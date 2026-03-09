<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PrestamosController extends Controller
{
    public function index()
    {
        $prestamos = [];
        return view('prestamos.index', compact('prestamos'));
    }
}
