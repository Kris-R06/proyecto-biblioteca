@extends ('layout.admin')
@section ('content')

    <div class="container mx-auto px-4 py-8">
        <h1 class="text-2xl font-bold mb-4">Nuevo Préstamo</h1>
        <form action="{{ route('prestamos.buscar_usuario') }}" method="POST" class="bg-white rounded-lg shadow p-6">
            @csrf
            <div class="mb-4">
                <label for="usuario_id" class="block text-gray-700 font-bold mb-2">ID del Usuario:</label>
                <input type="text" name="usuario_id" id="usuario_id" value="{{ old('usuario_id') }}" class="w-full px-3 py-2 border rounded focus:outline-none focus:ring focus:border-blue-300">
            </div>
            <div class="mb-4">
                <label for="usuario_nombre" class="block text-gray-700 font-bold mb-2">Nombre del Usuario:</label>
                <input type="text" name="usuario_nombre" id="usuario_nombre" value="{{ old('usuario_nombre') }}" class="w-full px-3 py-2 border rounded focus:outline-none focus:ring focus:border-blue-300">
            </div>
            <button type="submit" class="px-4 py-2 bg-green-500 hover:bg-green-700 text-white rounded transition">Buscar Usuario</button>
        </form>
        
        @isset($usuario)
            <div class="mt-6 bg-green-100 border border-green-400 text-green-700 px-4 py-3 rounded">
                <h2 class="text-lg font-bold mb-2">Usuario Encontrado:</h2>
                <p><strong>ID:</strong> {{ $usuario->id }}</p>
                <p><strong>Nombre:</strong> {{ $usuario->name }}</p>
                <p><strong>Email:</strong> {{ $usuario->email }}</p>
            </div>
        @endisset

        @if(isset($usuario_no_encontrado) && $usuario_no_encontrado)
            <div class="mt-6 bg-red-100 border border-red-400 text-red-700 px-4 py-3 rounded">
                <strong>Usuario no encontrado.</strong> Por favor, verifica el ID o nombre e intenta nuevamente.
            </div>
        @endisset
    </div>
    
@endsection