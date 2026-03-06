@extends('layout.admin')
@section('content')

    <div class="container mx-auto px-4 py-8">
    <h1 class="text-2xl font-bold mb-6">Eliminar Usuario</h1>
    <p class="mb-4">¿Estás seguro de que deseas eliminar al usuario "{{ $user->name }}"?</p>

        <div class="bg-white rounded-lg shadow p-4">
            <table class="w-full table-auto">
                <thead>
                    <tr class="text-left text-gray-700">
                        <th class="px-4 py-2 border-b">ID</th>
                        <th class="px-4 py-2 border-b">Nombre</th>
                        <th class="px-4 py-2 border-b">Email</th>
                        <th class="px-4 py-2 border-b">Tipo de Usuario</th>
                    </tr>
                </thead>
                <tbody>
                    <tr class="hover:bg-gray-50 transition-colors">
                        <td class="px-4 py-2 border-b">{{ $user->id }}</td>
                        <td class="px-4 py-2 border-b">{{ $user->name }}</td>
                        <td class="px-4 py-2 border-b">{{ $user->email }}</td>
                        <td class="px-4 py-2 border-b">{{ $user->user_type }}</td>
                    </tr>
                </tbody>
            </table>
        </div>

        <form action="{{ route('usuarios.destroy', $user->id) }}" method="POST" class="flex gap-2 mt-6">
            @csrf
            @method('DELETE')
            <button type="submit" class="w-32 bg-red-500 hover:bg-red-600 text-white py-2 px-4 rounded-md transition-colors text-center">Sí, eliminar</button>
            <a href="{{ route('usuarios.index') }}" class="w-32 bg-gray-500 hover:bg-gray-600 text-white py-2 px-4 rounded-md transition-colors text-center flex items-center justify-center">No, cancelar</a>
        </form>
    </div>
@endsection 