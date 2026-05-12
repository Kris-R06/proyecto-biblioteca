<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Http\Resources\LibroResource;
use App\Models\Libro;
use Illuminate\Support\Facades\DB;
use App\Models\Prestamo;

class ApiController extends Controller
{
    public function login(Request $request){
        $credentials = $request->validate([
            'email' => 'required|string|email',
            'password' => 'required|string',
        ]);

        if (Auth::attempt($credentials)) {
            /** @var \App\Models\User $user */
            $user = Auth::user();
            $token = $user->createToken('api-token')->plainTextToken;
            return ['token' => $token];
        }
        return ['error' => 'Datos incorrectos'];
    }

    public function logout(Request $request){
        $request->user()->currentAccessToken()->delete();
        return ['data' => 'Sesión cerrada'];
    }

    public function libros_disponibles(){
        $libros = Libro::where('estatus', 0)->orderBy('id', 'asc')->get();
        $libros_resource = LibroResource::collection($libros);
        return $libros_resource;
    }

    public function entregar_libro(Request $request){    
    $request->validate([
        'prestamo_id' => 'required|integer|exists:prestamos,id',
    ]);
    $id = $request->input('prestamo_id');
    
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
            return ['data' => 'Error al entregar el préstamo: ' . $e->getMessage()];
        }
        return ['data' => 'Libro entregado exitosamente.'];
    }
}
