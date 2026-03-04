@extends('layout.admin')
@section('content')

    <div class="container mx-auto px-4 py-8">
    <h1 class="text-2xl font-bold mb-6">Editar Usuario</h1>
    <form action="{{ route('usuarios.update', $user->id) }}" method="POST" class="bg-white p-6 rounded-lg shadow-md">
        @csrf
        @method('PUT')
        <div class="mb-4">
            <label for="name" class="block text-gray-700 font-medium mb-2">Nombre</label>
            <input type="text" name="name" id="name" value="{{ $user->name }}" class="w-full border border-gray-300 rounded-md p-2 focus:ring focus:ring-blue-200" required>
        </div>
        <div class="mb-4">
            <label for="email" class="block text-gray-700 font-medium mb-2">Correo Electrónico</label>
            <input type="email" name="email" id="email" value="{{ $user->email }}" class="w-full border border-gray-300 rounded-md p-2 focus:ring focus:ring-blue-200" required>
        </div>
        <div class="mb-4">
            <label for="user_type" class="block text-gray-700 font-medium mb-2">Tipo de Usuario</label>
            <select name="user_type" id="user_type" class="w-full border border-gray-300 rounded-md p-2 focus:ring focus:ring-blue-200" required>
                <option value="user" {{ $user->user_type == 'user' ? 'selected' : '' }}>Usuario</option>
                <option value="admin" {{ $user->user_type == 'admin' ? 'selected' : '' }}>Administrador</option>
            </select>
        </div>
        <button type="submit" class="bg-blue-600 text-white px-4 py-2 rounded-md hover:bg-blue-700 transition-colors">Actualizar Usuario</button>
    </form>
    </div>
@endsection