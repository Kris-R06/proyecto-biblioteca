@extends('layout.admin')
@section('content')

    <div class="container mx-auto px-4 py-8">
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

        <div class="bg-white rounded-xl shadow-sm border border-gray-200 overflow-hidden">
            <div class="overflow-x-auto">
                <table class="w-full text-left text-sm text-gray-600">
                    <thead class="bg-gray-50 text-gray-700 font-semibold uppercase text-xs">
                        <tr>
                            <th class="px-6 py-3">Título</th>
                            <th class="px-6 py-3">Autor</th>
                            <th class="px-6 py-3">ISBN</th>
                            <th class="px-6 py-3">Categoría</th>
                            <th class="px-6 py-3">Disponibilidad</th>
                            <th class="px-6 py-3 text-right">Acciones</th>
                        </tr>
                    </thead>
                    <tbody class="divide-y divide-gray-100">
                        @foreach($libros as $libro)
                        <tr class="hover:bg-gray-50 transition-colors">
                            <td class="px-6 py-4 font-medium text-gray-900">{{ $libro->titulo }}</td>
                            <td class="px-6 py-4">{{ $libro->autor }}</td>
                            <td class="px-6 py-4">{{ $libro->isbn }}</td>
                            <td class="px-6 py-4">{{ $libro->categoria->nombre }}</td>
                            <td class="px-6 py-4">
                                @if($libro->estatus == 0)
                                    <span class="px-2.5 py-1 rounded-full text-xs font-medium bg-green-100 text-green-700">Disponible</span>
                                @elseif($libro->estatus == 1)
                                    <span class="px-2.5 py-1 rounded-full text-xs font-medium bg-yellow-100 text-yellow-700">Prestado</span>
                                @else
                                    <span class="px-2.5 py-1 rounded-full text-xs font-medium bg-gray-100 text-gray-700">Sin información</span>
                                @endif
                            </td>
                            <td class="px-6 py-4 text-right">
                                <div class="flex items-center justify-end gap-3">
                                    <a href="{{ route('libros.edit', $libro->id) }}" class="text-gray-400 hover:text-blue-600 transition-colors" title="Editar"><i class="ph-bold ph-pencil-simple text-lg"></i></a>
                                    <form action="{{ route('libros.destroy', $libro->id) }}" method="POST" class="inline">
                                        @csrf
                                        @method('DELETE')
                                        <button type="submit" class="text-gray-400 hover:text-red-600 transition-colors" title="Eliminar"><i class="ph-bold ph-trash text-lg"></i></button>
                                    </form>
                                </div>
                            </td>
                        </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
        </div>
        <div class="px-6 py-4 bg-gray-50 border-t border-gray-100">
            {{ $libros->links() }}
        </div>
    </div>

@endsection 