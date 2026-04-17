<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

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
}
