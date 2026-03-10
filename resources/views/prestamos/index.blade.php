@extends('layout.admin')
@section('content')

    <div class="container mx-auto px-4 py-8">
        <h1 class="text-2xl font-bold mb-4">Préstamos</h1>

        <a href="{{ route('prestamos.create') }}" class="bg-blue-500 text-white px-4 py-2 rounded mb-4 inline-block">Nuevo Préstamo</a>

        <table class="min-w-full bg-white border border-gray-200">
            <thead>
                <tr>
                    <th class="py-2 px-4 border-b">ID</th>
                    <th class="py-2 px-4 border-b">Usuario</th>
                    <th class="py-2 px-4 border-b">Libro</th>
                    <th class="py-2 px-4 border-b">Fecha de Préstamo</th>
                    <th class="py-2 px-4 border-b">Fecha de Devolución</th>
                    <th class="py-2 px-4 border-b">Acciones</th>
                </tr>
            </thead>
            <tbody>
                @foreach($prestamos as $prestamo)
                    <tr>
                        <td class="py-2 px-4 border-b">{{ $prestamo->id }}</td>
                        <td class="py-2 px-4 border-b">{{ $prestamo->user->name }}</td>
                        <td class="py-2 px-4 border-b">{{ $prestamo->book->title }}</td>
                        <td class="py-2 px-4 border-b">{{ $prestamo->loan_date }}</td>
                        <td class="py-2 px-4 border-b">{{ $prestamo->return_date }}</td>
                        <td class="py-2 px-4 border-b">
                            <a href="#" class="bg-yellow-500 text-white px-3 py-1 rounded">Editar</a>
                            <form action="#" method="POST" style="display:inline-block;">
                                @csrf
                                @method('DELETE')
                                <button type="submit" class="bg-red-500 text-white px-3 py-1 rounded" onclick="return confirm('¿Estás seguro de eliminar este préstamo?')">Eliminar</button>
                            </form>
                        </td>
                    </tr>
                @endforeach
            </tbody>
        </table>
    </div>

@endsection