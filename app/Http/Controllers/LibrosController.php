<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Categoria;
use App\Models\Libro;


class LibrosController extends Controller
{
    public function index()
    {
        return view('libros.index');
    }

    public function create()
    {
        $categorias = Categoria::all();
        return view('libros.create', compact('categorias'));
    }

    public function store(Request $request)
    {
        // Validar y guardar el libro
        $request->validate([
            'titulo' => 'required|string|max:255',
            'autor' => 'required|string|max:255',
            'categoria_id' => 'required|exists:categorias,id',
            'editorial' => 'required|string|max:255',
            'isbn' => 'required|string|max:255'
        ]);

        // Aquí puedes crear el libro usando un modelo Libro
        $libros = new Libro();
        $libros->titulo = $request->titulo;
        $libros->autor = $request->autor;
        $libros->categoria_id = $request->categoria_id;
        $libros->editorial = $request->editorial;
        $libros->isbn = $request->isbn;
        $libros->save();

        return redirect()->route('home')->with('success', 'Libro creado exitosamente.');
    }
}
