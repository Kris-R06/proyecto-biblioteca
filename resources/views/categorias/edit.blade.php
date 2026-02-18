@extends ('layout.admin')
@section ('content')

    <div class="flex-1 p-6">
        <h1 class="text-2xl font-bold mb-4">Editar Categoría</h1>

        <div class="bg-white rounded-lg shadow p-4">
            <form action="{{ route('categorias.update', $categoria->id) }}" method="POST">
                @csrf
                @method('PUT')
                <div class="mb-4">
                    <label for="nombre" class="block text-gray-700 font-bold mb-2">Nombre:</label>
                    <input type="text" name="nombre" id="nombre" value="{{ $categoria->nombre }}" class="w-full px-4 py-2 border rounded focus:outline-none focus:ring-2 focus:ring-blue-500">
                </div>
                
                <div class="flex items-center gap-3">
                    <button type="submit" class="bg-blue-500 hover:bg-blue-600 text-white px-5 py-2.5 rounded font-medium transition-colors">
                        Actualizar
                    </button>
                    <a href="{{ route('categorias.index') }}" class="inline-flex items-center justify-center bg-gray-500 hover:bg-gray-600 text-white px-5 py-2.5 rounded font-medium transition-colors">
                        Cancelar
                    </a>
                </div>
            </form>
        </div>
    </div>

@endsection