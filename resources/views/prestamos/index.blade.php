@extends('layout.admin')
@section('content')

    <div class="container mx-auto px-4 py-8">
        <h1 class="text-2xl font-bold mb-4">Préstamos</h1>
        <a href="{{ route('prestamos.create') }}" class="bg-blue-500 text-white px-4 py-2 rounded mb-4 inline-block">Nuevo Préstamo</a>

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
                        <th class="px-4 py-2 border-b">Usuario</th>
                        <th class="px-4 py-2 border-b">Libro</th>
                        <th class="px-4 py-2 border-b">Estado</th>
                        <th class="px-4 py-2 border-b w-48">Acciones</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach($prestamos as $prestamo)
                        <tr class="hover:bg-gray-50 transition-colors">
                            <td class="px-4 py-2 border-b">{{ $prestamo->id }}</td>
                            <td class="px-4 py-2 border-b">{{ $prestamo->usuario->name ?? 'Usuario no disponible' }}</td>
                            <td class="px-4 py-2 border-b">{{ $prestamo->libro->titulo ?? 'Libro no disponible' }}</td>
                            <td class="px-4 py-2 border-b">{{ $prestamo->estado }}</td>
                            <td class="px-4 py-2 border-b">
                                <div class="flex items-center gap-2">
                                    <a href="#" class="text-gray-400 hover:text-blue-600 transition-colors" title="Editar">
                                        <i class="ph-bold ph-pencil-simple text-lg"></i>
                                    </a>
                                    <form action="#" method="POST" class="m-0 p-0">
                                        @csrf
                                        @method('DELETE')
                                        <button type="submit" class="text-gray-400 hover:text-red-600 transition-colors" title="Eliminar" onclick="return confirm('¿Estás seguro de eliminar este préstamo?')">
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
    </div>

@endsection