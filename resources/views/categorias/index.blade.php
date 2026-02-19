@extends ('layout.admin')
@section ('content')

    <div class="flex-1 p-6">
        <h1 class="text-2xl font-bold mb-4">Categorías</h1>

        @if (session('success'))
            <div class="bg-green-100 border border-green-400 text-green-700 px-4 py-3 rounded mb-4">
                {{ session('success') }}
            </div>
        @endif

        <a href="{{ route('categorias.create') }}" class="inline-block mb-4 px-4 py-2 bg-blue-500 text-white rounded hover:bg-blue-700 transition">
            Agregar Categoría
        </a>

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
                                    <a href="{{ route('categorias.edit', $categoria->id) }}" class="inline-flex items-center justify-center bg-blue-500 hover:bg-blue-600 text-white px-3 py-1.5 rounded text-sm font-medium transition-colors">
                                        Editar
                                    </a>
                                    
                                    <form action="{{ route('categorias.destroy', $categoria->id) }}" method="POST" class="m-0 p-0">
                                        @csrf
                                        @method('DELETE')
                                        <button type="submit" class="inline-flex items-center justify-center bg-red-500 hover:bg-red-600 text-white px-3 py-1.5 rounded text-sm font-medium transition-colors">
                                            Eliminar
                                        </button>
                                    </form>
                                </div>

                            </td> </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
    </div>

@endsection