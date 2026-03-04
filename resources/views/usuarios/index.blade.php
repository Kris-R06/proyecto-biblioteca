@extends('layout.admin')
@section('content')

    <div class="flex-1 p-6">
        <div class="flex items-center justify-between mb-4">
            <h1 class="text-2xl font-bold">Usuarios</h1>
            <a href="{{ route('usuarios.create') }}" class="bg-brand-500 hover:bg-brand-600 text-white py-2 px-4 rounded-md transition-colors">Crear nuevo usuario</a>
        </div>
        @if (session('success'))
            <div class="bg-green-100 border border-green-400 text-green-700 px-4 py-3 rounded mb-4">
                {{ session('success') }}
            </div>
        @endif

        <div class="bg-white rounded-lg shadow p-4">
            <table class="w-full table-auto">
                <thead>
                    <tr class="text-left text-gray-700">
                        <th class="px-4 py-2 border-b">ID</th>
                        <th class="px-4 py-2 border-b">Nombre</th>
                        <th class="px-4 py-2 border-b">Email</th>
                        <th class="px-4 py-2 border-b w-48">Acciones</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($usuarios as $usuario)
                        <tr class="hover:bg-gray-50 transition-colors">
                            <td class="px-4 py-2 border-b">{{ $usuario->id }}</td>
                            <td class="px-4 py-2 border-b">{{ $usuario->name }}</td>
                            <td class="px-4 py-2 border-b">{{ $usuario->email }}</td>
                            <td class="px-4 py-2 border-b">{{ $usuario->user_type }}</td>
                            <td class="px-4 py-2 border-b">
                                <div class="flex items-center gap-2">
                                    <a href="{{ route('usuarios.edit', $usuario->id) }}" class="text-gray-400 hover:text-blue-600 transition-colors" title="Editar">
                                        <i class="ph-bold ph-pencil-simple text-lg"></i>
                                    </a>
                                    <form action="{{ route('usuarios.destroy', $usuario->id) }}" method="POST" class="m-0 p-0">
                                        @csrf
                                        @method('DELETE')
                                        <button type="submit" class="text-gray-400 hover:text-red-600 transition-colors" title="Eliminar">
                                            <i class="ph-bold ph-trash text-lg"></i>
                                        </button>
                                    </form>
                            </td> </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
    </div>

@endsection