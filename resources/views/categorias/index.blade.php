@extends ('layout.admin')
@section ('content')

    <div class="flex-1 p-6">
        <h1 class="text-2xl font-bold mb-4">Categorías</h1>
        <a href="{{ route('categorias.create') }}" class="inline-block mb-4 px-4 py-2 bg-blue-500 hover:bg-blue-800 text-white rounded hover:bg-blue-700 transition">Agregar Categoría</a>

        <div class="bg-white rounded-lg shadow p-4">
            <table class="w-full table-auto">
                <thead>
                    <tr>
                        <th class="px-4 py-2 border-b">ID</th>
                        <th class="px-4 py-2 border-b">Nombre</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($categorias as $categoria)
                        <tr>
                            <td class="px-4 py-2 border-b">{{ $categoria->id }}</td>
                            <td class="px-4 py-2 border-b">{{ $categoria->nombre }}</td>
                        </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
    </div>
<div>
@endsection