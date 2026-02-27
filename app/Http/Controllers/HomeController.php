<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Models\Libro;
use App\Models\User;

class HomeController extends Controller
{
    public function index()
    {
        $user = Auth::user();
        if ($user->user_type === 'admin') {
            $libros = Libro::paginate(3);
            return view('home.index', compact('libros'));
        } else {
            return view('home.index_user');
        }

    }
}
