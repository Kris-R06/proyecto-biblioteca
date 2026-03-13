@extends('layout.admin')
@section('content')

    <div class="container mx-auto px-4 py-8">
        <div class="flex items-center justify-between mb-4">
            <h1 class="text-2xl font-bold">Usuarios</h1>
            <a href="{{ route('usuarios.create') }}" class="bg-brand-500 hover:bg-brand-600 text-white py-2 px-4 rounded-md transition-colors">Crear nuevo usuario</a>
        </div>
        @if (session('success'))
            <div class="bg-green-100 border border-green-400 text-green-700 px-4 py-3 rounded mb-4">
                {{ session('success') }}
            </div>
        @endif

        <div class="bg-white rounded-xl shadow-sm border border-gray-200 overflow-hidden">
            <div class="overflow-x-auto">
                <table class="w-full text-left text-sm text-gray-600">
                    <thead class="bg-gray-50 text-gray-700 font-semibold uppercase text-xs">
                        <tr>
                            <th class="px-6 py-3">ID</th>
                            <th class="px-6 py-3">Nombre</th>
                            <th class="px-6 py-3">Email</th>
                            <th class="px-6 py-3">Tipo</th>
                            <th class="px-6 py-3 text-right">Acciones</th>
                        </tr>
                    </thead>
                    <tbody class="divide-y divide-gray-100">
                        @foreach ($usuarios as $usuario)
                        <tr class="hover:bg-gray-50 transition-colors">
                            <td class="px-6 py-4 font-medium text-gray-900">{{ $usuario->id }}</td>
                            <td class="px-6 py-4">{{ $usuario->name }}</td>
                            <td class="px-6 py-4">{{ $usuario->email }}</td>
                            <td class="px-6 py-4">{{ $usuario->user_type }}</td>
                            <td class="px-6 py-4 text-right">
                                <div class="flex items-center justify-end gap-3">
                                    <a href="{{ route('usuarios.edit', $usuario->id) }}" class="text-gray-400 hover:text-blue-600 transition-colors" title="Editar"><i class="ph-bold ph-pencil-simple text-lg"></i></a>
                                    <a href="{{ route('usuarios.delete_confirm', $usuario->id) }}" class="text-gray-400 hover:text-red-600 transition-colors" title="Eliminar"><i class="ph-bold ph-trash text-lg"></i></a>
                                    <!--
                                    <form action="{{ route('usuarios.destroy', $usuario->id) }}" method="POST" class="inline">
                                        @csrf
                                        @method('DELETE')
                                        <button type="submit" class="text-gray-400 hover:text-red-600 transition-colors" title="Eliminar"><i class="ph-bold ph-trash text-lg"></i></button>
                                    </form>
                                    -->
                                </div>
                            </td>
                        </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
        </div>
        <div class="px-6 py-4 bg-gray-50 border-t border-gray-100">
            {{ $usuarios->links() }}
        </div>
    </div>

@endsection