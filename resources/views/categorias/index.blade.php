@extends ('layout.admin')
@section ('content')

    <div class="container mx-auto px-4 py-8">
        <div class="flex items-center justify-between mb-4">
            <h1 class="text-2xl font-bold">Categorías</h1>
            <a href="{{ route('categorias.create') }}" class="px-4 py-2 bg-blue-500 text-white rounded hover:bg-blue-700 transition">
                Agregar Categoría
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
                            <th class="px-6 py-3">Nombre</th>
                            <th class="px-6 py-3 text-right">Acciones</th>
                        </tr>
                    </thead>
                    <tbody class="divide-y divide-gray-100">
                        @foreach ($categorias as $categoria)
                        <tr class="hover:bg-gray-50 transition-colors">
                            <td class="px-6 py-4 font-medium text-gray-900">{{ $categoria->id }}</td>
                            <td class="px-6 py-4">{{ $categoria->nombre }}</td>
                            <td class="px-6 py-4 text-right">
                                <div class="flex items-center justify-end gap-3">
                                    <a href="{{ route('categorias.edit', $categoria->id) }}" class="text-blue-400 hover:text-blue-600 transition-colors" title="Editar"><i class="ph-bold ph-pencil-simple text-lg"></i></a>
                                    <a href="{{ route('categorias.delete_confirm', $categoria->id) }}" class="text-blue-400 hover:text-red-600 transition-colors" title="Eliminar"><i class="ph-bold ph-trash text-lg"></i></a>
                                </div>
                            </td>
                        </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
        </div>
        <div class="px-6 py-4 bg-gray-50 border-t border-gray-100">
            {{ $categorias->links() }}
        </div> 
    </div>

@endsection