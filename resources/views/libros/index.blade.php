@extends('layout.admin')
@section('content')

    <div class="flex-1 p-6">
        <div class="flex items-center justify-between mb-4">
            <h1 class="text-2xl font-bold">Libros</h1>
            <a href="{{ route('libros.create') }}" class="px-4 py-2 bg-blue-500 text-white rounded hover:bg-blue-700 transition">
                Agregar Libro
            </a>
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
                        <th class="px-4 py-2 border-b">Título</th>
                        <th class="px-4 py-2 border-b">Autor</th>
                        <th class="px-4 py-2 border-b">ISBN</th>
                        <th class="px-4 py-2 border-b">Categoría</th>
                        <th class="px-4 py-2 border-b">Disponibilidad</th>
                        <th class="px-4 py-2 border-b w-48">Acciones</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach($libros as $libro)
                    <tr class="hover:bg-gray-50 transition-colors">
                        <td class="px-4 py-2 border-b">{{ $libro->titulo }}</td>
                        <td class="px-4 py-2 border-b">{{ $libro->autor }}</td>
                        <td class="px-4 py-2 border-b">{{ $libro->isbn }}</td>
                        <td class="px-4 py-2 border-b">{{ $libro->categoria->nombre }}</td>
                        <td class="px-4 py-2 border-b">
                            <span class="px-2.5 py-1 rounded-full text-xs font-medium bg-green-100 text-green-700">Disponible</span>
                        </td>
                        <td class="px-4 py-2 border-b">
                            <div class="flex items-center gap-2">
                                <a href="{{ route('libros.edit', $libro->id) }}" class="text-gray-400 hover:text-blue-600 transition-colors" title="Editar">
                                    <i class="ph-bold ph-pencil-simple text-lg"></i>
                                </a>
                                <form action="{{ route('libros.destroy', $libro->id) }}" method="POST" class="m-0 p-0">
                                    @csrf
                                    @method('DELETE')
                                    <button type="submit" class="text-gray-400 hover:text-red-600 transition-colors" title="Eliminar">
                                        <i class="ph-bold ph-trash text-lg"></i>
                                    </button>
                                </form>
                            </div>
                        </td>
                    </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
        <div class="px-6 py-4 bg-gray-50 border-t border-gray-100">
            {{ $libros->links() }}
        </div>
    </div>

@endsection 