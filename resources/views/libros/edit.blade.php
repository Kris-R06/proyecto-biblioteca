@extends('layout.admin')
@section('content')

    <div class="container mx-auto px-4 py-8">
    <h1 class="text-2xl font-bold mb-6">Editar Libro</h1>
    <form action="{{ route('libros.update', $libro->id) }}" method="POST" class="bg-white p-6 rounded-lg shadow-md">
        @csrf
        @method('PUT')
        <div class="mb-4">
            <label for="titulo" class="block text-gray-700 font-medium mb-2">Título</label>
            <input type="text" name="titulo" id="titulo" value="{{ $libro->titulo }}" class="w-full border border-gray-300 rounded-md p-2 focus:ring focus:ring-blue-200" required>
        </div>
        <div class="mb-4">
            <label for="autor" class="block text-gray-700 font-medium mb-2">Autor</label>
            <input type="text" name="autor" id="autor" value="{{ $libro->autor }}" class="w-full border border-gray-300 rounded-md p-2 focus:ring focus:ring-blue-200" required>
        </div>
        <div class="mb-4">
            <label for="isbn" class="block text-gray-700 font-medium mb-2">ISBN</label>
            <input type="text" name="isbn" id="isbn" value="{{ $libro->isbn }}" class="w-full border border-gray-300 rounded-md p-2 focus:ring focus:ring-blue-200">
        </div>
        <div class="mb-4">
            <label for="editorial" class="block text-gray-700 font-medium mb-2">Editorial</label>
            <input type="text" name="editorial" id="editorial" value="{{ $libro->editorial }}" class="w-full border border-gray-300 rounded-md p-2 focus:ring focus:ring-blue-200">
        </div>
        <div class="mb-4">
            <label for="categoria_id" class="block text-gray-700 font-medium mb-2">Categoría</label>
            <select name="categoria_id" id="categoria_id" class="w-full border border-gray-300 rounded-md p-2 focus:ring focus:ring-blue-200">
                @foreach($categorias as $categoria)
                    <option value="{{ $categoria->id }}" {{ $libro->categoria_id == $categoria->id ? 'selected' : '' }}>{{ $categoria->nombre }}</option>
                @endforeach
            </select>
        </div>
        <button type="submit" class="bg-blue-600 text-white px-4 py-2 rounded-md hover:bg-blue-700 transition-colors">Actualizar Libro</button>
    </form>
@endsection