<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Models\Libro;
use App\Models\User;
use App\Models\Prestamo;

class HomeController extends Controller
{
    public function index()
    {
        $user = Auth::user();
        if ($user->user_type === 'admin') {

            $totalUsuarios = User::count();
            $prestamosActivos = Prestamo::where('estado', 'pendiente')->count();
            $libros = Libro::with('categoria')->paginate(3);
            $totalLibros = $libros->total();
            $prestamos = Prestamo::with(['usuario', 'libro'])->paginate(3);

            return view('home.index', compact('libros', 'prestamos', 'totalLibros', 'totalUsuarios', 'prestamosActivos'));
        } else {
            return view('home.index_user');
        }

    }
}