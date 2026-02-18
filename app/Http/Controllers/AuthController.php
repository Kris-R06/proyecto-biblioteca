<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class AuthController extends Controller
{
    public function loginForm()
    {
        return view('auth.login');
    }

    public function register()
    {
        $validatedData = request()->validate([
            'name' => 'required|string|max:255',
            'email' => 'required|string|email|max:255|unique:users',
            'password' => 'required|string|min:8|confirmed',
            'password_confirmation' => 'required|string|min:8',
        ]);

        #crear usuario
        $user = \App\Models\User::create([
           'name' => $validatedData['name'],
            'email' => $validatedData['email'],
            'password' => bcrypt($validatedData['password']),
        ]);
        
        #redirigir después de registrarse
        Auth::login($user);
        return redirect()->route('home');
    }

        public function login()
    {
        $credentials = request()->validate([
            'email' => 'required|string|email',
            'password' => 'required|string',
        ]);

        if (Auth::attempt($credentials)) {
            request()->session()->regenerate();
            return redirect()->route('home');
        }

        return back()->withErrors([
            'email' => 'Las credenciales son incorrectas.',
        ]);    

    }

    public function logout()
    {
        Auth::logout();
        return redirect()->route('login');
    }
}