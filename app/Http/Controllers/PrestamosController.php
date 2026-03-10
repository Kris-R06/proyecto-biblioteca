<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use App\Models\Libro;
use App\Models\Prestamo;

class PrestamosController extends Controller
{
    public function index()
    {
        $prestamos = [];
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
}
