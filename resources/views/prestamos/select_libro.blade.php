@extends ('layout.admin')
@section ('content')

    <div class="container mx-auto px-4 py-8">
        <h1 class="text-2xl font-bold mb-4">Seleccionar Libro</h1>
        
        <div class="mb-4 bg-green-100 border border-green-400 text-green-700 px-4 py-3 rounded">
            <h2 class="text-lg font-bold mb-2">Usuario Seleccionado:</h2>
            <p><strong>ID:</strong> {{ $usuario->id }}</p>
            <p><strong>Nombre:</strong> {{ $usuario->name }}</p>
            <p><strong>Email:</strong> {{ $usuario->email }}</p>
        </div>
        
        <form action="{{ route('prestamos.store') }}" method="POST" class="bg-white rounded-lg shadow p-6">
            @csrf
            <div class="mb-4">
                <label for="libro_id" class="block text-gray-700 font-bold mb-2">Selecciona un Libro:</label>
                <select name="libro_id" id="libro_id" class="w-full px-3 py-2 border rounded focus:outline-none focus:ring focus:border-blue-300">
                <option value="">-- Selecciona un libro --</option>    
                @foreach($libros as $libro)
                        <option value="{{ $libro->id }}">{{ $libro->titulo }} - {{ $libro->autor }}</option>
                    @endforeach
                </select>
                <input type="hidden" name="usuario_id" value="{{ $usuario->id }}">
            </div>
            <button type="submit" class="px-4 py-2 bg-green-500 hover:bg-green-700 text-white rounded transition">Seleccionar Libro</button>
        </form>
    </div>
    
@endsection