@extends ('layout.user')
@section ('content')

    <div class="container">
        <h1 class="text-2xl font-bold mb-4">Bienvenido a tu Dashboard</h1>
        <p class="text-gray-700">Aquí puedes ver tus préstamos actuales y gestionar tu cuenta.</p>
        <div class="mt-6">
            <h2 class="text-xl font-semibold mb-2">Préstamos Actuales</h2>
            <div class="bg-white shadow rounded-lg p-4">
                <p class="text-gray-500">No tienes préstamos activos en este momento.</p>
            </div>
        </div>
    </div>


@endsection