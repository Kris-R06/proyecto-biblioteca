@extends('layout.admin')
@section('content')

    <div class="container mx-auto px-4 py-8">
        <div class="flex items-center justify-between mb-4">
            <h1 class="text-2xl font-bold">Prestamos</h1>
            <a href="{{ route('prestamos.create') }}" class="px-4 py-2 bg-blue-500 text-white rounded hover:bg-blue-700 transition">
                Agregar Préstamo
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
                            <th class="px-6 py-3">ID</th>
                            <th class="px-6 py-3">Usuario</th>
                            <th class="px-6 py-3">Libro</th>
                            <th class="px-6 py-3">Estado</th>
                            <th class="px-6 py-3 text-right">Fecha de Entrega</th>
                            <th class="px-6 py-3 text-right">Acción</th>
                        </tr>
                    </thead>
                    <tbody class="divide-y divide-gray-100">
                        @foreach($prestamos as $prestamo)
                        <tr class="hover:bg-gray-50 transition-colors">
                            <td class="px-6 py-4 font-medium text-gray-900">{{ $prestamo->id }}</td>
                            <td class="px-6 py-4">{{ $prestamo->usuario->name ?? 'Usuario no disponible' }}</td>
                            <td class="px-6 py-4">{{ $prestamo->libro->titulo ?? 'Libro no disponible' }}</td>
                            <td class="px-6 py-4">
                                @if($prestamo->estado == 'pendiente')
                                    <span class="px-2.5 py-1 rounded-full text-xs font-medium bg-yellow-100 text-yellow-700">Pendiente</span>
                                @elseif($prestamo->estado == 'entregado')
                                    <span class="px-2.5 py-1 rounded-full text-xs font-medium bg-green-100 text-green-700">Entregado</span>
                                @else
                                    <span class="px-2.5 py-1 rounded-full text-xs font-medium bg-red-100 text-red-700">Vencido</span>
                                @endif
                            </td>
                            <td class="px-6 py-4 text-right">{{ $prestamo->fecha_entrega ? $prestamo->fecha_entrega : 'N/A' }}</td>
                            <td class="px-6 py-4 text-right">
                                <div class="flex items-center justify-end gap-3">
                                    @if($prestamo->estado == 'pendiente')
                                        <a href="{{ route('prestamos.entregar', $prestamo->id) }}" class="text-blue-400 hover:text-blue-600 transition-colors" title="Entregar"><i class="ph-bold ph-arrow-circle-left text-lg"></i></a>
                                    @endif
                                    <form action="#" method="POST" class="inline">
                                        @csrf
                                        @method('DELETE')
                                        <button type="submit" class="text-blue-400 hover:text-red-600 transition-colors" title="Eliminar" onclick="return confirm('¿Estás seguro de eliminar este préstamo?')"><i class="ph-bold ph-trash text-lg"></i></button>
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
            {{ $prestamos->links() }}
        </div>
    </div>

@endsection