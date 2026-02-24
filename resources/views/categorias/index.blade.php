@extends ('layout.admin')
@section ('content')

    <div class="flex-1 p-6">
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

        <div class="bg-white rounded-lg shadow p-4">
            <table class="w-full table-auto">
                <thead>
                    <tr class="text-left text-gray-700">
                        <th class="px-4 py-2 border-b">ID</th>
                        <th class="px-4 py-2 border-b">Nombre</th>
                        <th class="px-4 py-2 border-b w-48">Acciones</th> </tr>
                </thead>
                <tbody>
                    @foreach ($categorias as $categoria)
                        <tr class="hover:bg-gray-50 transition-colors">
                            <td class="px-4 py-2 border-b">{{ $categoria->id }}</td>
                            <td class="px-4 py-2 border-b">{{ $categoria->nombre }}</td>
                            <td class="px-4 py-2 border-b">
                                
                                <div class="flex items-center gap-2">
                                    <a href="{{ route('categorias.edit', $categoria->id) }}" class="text-gray-400 hover:text-blue-600 transition-colors" title="Editar">
                                        <i class="ph-bold ph-pencil-simple text-lg"></i>
                                    </a>
                                    <form action="{{ route('categorias.destroy', $categoria->id) }}" method="POST" class="m-0 p-0">
                                        @csrf
                                        @method('DELETE')
                                        <button type="submit" class="text-gray-400 hover:text-red-600 transition-colors" title="Eliminar">
                                            <i class="ph-bold ph-trash text-lg"></i>
                                        </button>
                                    </form>
                                </div>

                            </td> </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
        <div class="px-6 py-4 bg-gray-50 border-t border-gray-100">
            {{ $categorias->links() }}
        </div> 
    </div>

@endsection