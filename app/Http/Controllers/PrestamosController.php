<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Models\User;
use App\Models\Libro;
use App\Models\Prestamo;

class PrestamosController extends Controller
{
    public function index()
    {
        $prestamos = Prestamo::with('usuario', 'libro')->paginate(7);
        return view('prestamos.index', compact('prestamos'));
    }

    public function create()
    {
        return view('prestamos.create');    
    }

    public function buscar_usuario(Request $request)
    {
        $usuario_id = $request->input('usuario_id');
        $usuario_nombre = $request->input('usuario_nombre');
        $usuario = null;
        $usuario_no_encontrado = false;

        if(!empty($usuario_id)) {
            $usuario = User::find($usuario_id);
            if ($usuario) {
                return view('prestamos.create', compact('usuario'));
            } else {
                $usuario_no_encontrado = true;
                return view('prestamos.create', compact('usuario', 'usuario_no_encontrado'));
            }
        }

        if(!empty($usuario_nombre)) {
            $usuario = User::where('name', 'like', '%' . $usuario_nombre . '%')->first();
            if ($usuario) {
                return view('prestamos.create', compact('usuario'));
            } else {
                $usuario_no_encontrado = true;
                return view('prestamos.create', compact('usuario', 'usuario_no_encontrado'));
            }
        }

        // Si no se ingresó nada, regresar la vista sin usuario
        return view('prestamos.create');
    }   

    public function seleccionar_libro(Request $request)
    {
        $usuario_id = $request->input('usuario_id');
        $libros = Libro::all();
        $usuario = User::findOrFail($usuario_id);
        $libros = Libro::where('estatus', 0)->orderBy('id', 'asc')->get();

        return view('prestamos.select_libro', compact('usuario', 'libros'));
    }

    public function store(Request $request)
    {
        # Crear transacción
        DB::beginTransaction();
        try{
            $prestamo = new Prestamo();
            $prestamo->usuario_id = $request->input('usuario_id');
            $prestamo->libro_id = $request->input('libro_id');
            $prestamo->estado = 'pendiente';
            $prestamo->save();

            $libro = Libro::findOrFail($request->input('libro_id'));
            $libro->estatus = 1;
            $libro->save();

            DB::commit();
        }
        catch(\Exception $e){
            DB::rollback();
            return redirect()->route('prestamos.index')->with('error', 'Error al registrar el préstamo: ' . $e->getMessage());
        }
        return redirect()->route('prestamos.index')->with('success', 'Préstamo creado exitosamente.');

    }

    public function entregar($id){
        
        DB::beginTransaction();
        try {
            $prestamo = Prestamo::findOrFail($id);
            $prestamo->estado = 'entregado';
            $prestamo->fecha_entrega = now();
            $prestamo->save();
            
            $libro = Libro::findOrFail($prestamo->libro_id);
            $libro->estatus = 0;
            $libro->save();
            DB::commit();
        }
        catch(\Exception $e){
            DB::rollback();
            return redirect()->route('prestamos.index')->with('error', 'Error al entregar el préstamo: ' . $e->getMessage());
        }
        return redirect()->route('prestamos.index')->with('success', 'Préstamo entregado exitosamente.');
    }
}