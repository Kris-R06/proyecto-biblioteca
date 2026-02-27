@extends ('layout.admin')
@section ('content')

    <div class="container mx-auto px-4 py-8">
        <h1 class="text-2xl font-bold mb-4">Agregar Nueva Categoría</h1>
        <form action="{{ route('categorias.store') }}" method="POST" class="bg-white rounded-lg shadow p-6">
            @csrf
            <div class="mb-4">
                <label for="nombre" class="block text-gray-700 font-bold mb-2">Nombre de la Categoría:</label>
                <input type="text" name="nombre" id="nombre" class="w-full px-3 py-2 border rounded focus:outline-none focus:ring focus:border-blue-300" required>
            </div>
            <button type="submit" class="px-4 py-2 bg-green-500 hover:bg-green-700 text-white rounded transition">Guardar Categoría</button>

            <div class="mt-4">
                <a href="{{ route('categorias.index') }}" class="inline-block px-4 py-2 bg-blue-500 hover:bg-blue-700 text-white rounded transition">Volver a la lista de categorias</a>  
            </div>
        </form>
    </div>
    
@endsection