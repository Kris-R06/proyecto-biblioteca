@extends('layout.admin')
@section('content')

<div class="flex-1 p-4 lg:p-8 space-y-6">
    
    <div class="grid grid-cols-1 md:grid-cols-3 gap-6">
        <div class="bg-white p-6 rounded-xl shadow-sm border border-gray-100 flex justify-between items-center">
            <div><p class="text-sm text-gray-500">Total Libros</p><h3 class="text-3xl font-bold text-gray-800 mt-1">1,240</h3></div>
            <div class="p-3 bg-blue-50 text-blue-600 rounded-lg"><i class="ph-duotone ph-books text-2xl"></i></div>
        </div>
        <div class="bg-white p-6 rounded-xl shadow-sm border border-gray-100 flex justify-between items-center">
            <div><p class="text-sm text-gray-500">Activos</p><h3 class="text-3xl font-bold text-gray-800 mt-1">85</h3></div>
            <div class="p-3 bg-orange-50 text-orange-600 rounded-lg"><i class="ph-duotone ph-clock-countdown text-2xl"></i></div>
        </div>
        <div class="bg-white p-6 rounded-xl shadow-sm border border-gray-100 flex justify-between items-center">
            <div><p class="text-sm text-gray-500">Usuarios</p><h3 class="text-3xl font-bold text-gray-800 mt-1">342</h3></div>
            <div class="p-3 bg-green-50 text-green-600 rounded-lg"><i class="ph-duotone ph-users text-2xl"></i></div>
        </div>
    </div>

    <div class="bg-white rounded-xl shadow-sm border border-gray-200 overflow-hidden">
        <div class="px-6 py-4 border-b border-gray-100 flex justify-between items-center">
            <h3 class="font-bold text-gray-800">Préstamos Recientes</h3>
            <a href="#" class="text-sm text-brand-600 hover:text-brand-800 font-medium">Ver todos</a>
        </div>
        <div class="overflow-x-auto">
            <table class="w-full text-left text-sm text-gray-600">
                <thead class="bg-gray-50 text-gray-700 font-semibold uppercase text-xs">
                    <tr>
                        <th class="px-6 py-3">Usuario</th>
                        <th class="px-6 py-3">Libro</th>
                        <th class="px-6 py-3">Fecha</th>
                        <th class="px-6 py-3">Estado</th>
                        <th class="px-6 py-3 text-right">Acción</th>
                    </tr>
                </thead>
                <tbody class="divide-y divide-gray-100">
                    <tr class="hover:bg-gray-50">
                        <td class="px-6 py-4 font-medium text-gray-900">Ana García</td>
                        <td class="px-6 py-4">Cien años de soledad</td>
                        <td class="px-6 py-4">05 Feb 2026</td>
                        <td class="px-6 py-4"><span class="px-2.5 py-1 rounded-full text-xs font-medium bg-green-100 text-green-700">A tiempo</span></td>
                        <td class="px-6 py-4 text-right"><button class="text-gray-400 hover:text-brand-600"><i class="ph-bold ph-pencil-simple text-lg"></i></button>
                        <button class="text-gray-400 hover:text-brand-600"><i class="ph-bold ph-trash text-lg"></i></button>
                        </td>
                    </tr>
                    <tr class="hover:bg-gray-50">
                        <td class="px-6 py-4 font-medium text-gray-900">Carlos Díaz</td>
                        <td class="px-6 py-4">Clean Code</td>
                        <td class="px-6 py-4">04 Feb 2026</td>
                        <td class="px-6 py-4"><span class="px-2.5 py-1 rounded-full text-xs font-medium bg-yellow-100 text-yellow-700">Pendiente</span></td>
                        <td class="px-6 py-4 text-right"><button class="text-gray-400 hover:text-brand-600"><i class="ph-bold ph-pencil-simple text-lg"></i></button>
                        <button class="text-gray-400 hover:text-brand-600"><i class="ph-bold ph-trash text-lg"></i></button>
                        </td>
                    </tr>
                </tbody>
            </table>
        </div>
    </div>

    <div class="bg-white rounded-xl shadow-sm border border-gray-200 overflow-hidden">
        <div class="px-6 py-4 border-b border-gray-100 flex justify-between items-center">
            <h3 class="font-bold text-gray-800">Lista de Libros</h3>
            <a href="#" class="text-sm text-brand-600 hover:text-brand-800 font-medium">Gestionar catálogo</a>
        </div>
        <div class="overflow-x-auto">
            <table class="w-full text-left text-sm text-gray-600">
                <thead class="bg-gray-50 text-gray-700 font-semibold uppercase text-xs">
                    <tr>
                        <th class="px-6 py-3">Título</th>
                        <th class="px-6 py-3">Autor</th>
                        <th class="px-6 py-3">ISBN</th>
                        <th class="px-6 py-3">Categoría</th>
                        <th class="px-6 py-3">Disponibilidad</th>
                        <th class="px-6 py-3 text-right">Acciones</th>
                    </tr>
                </thead>
                <tbody class="divide-y divide-gray-100">
                    <tr class="hover:bg-gray-50 transition-colors">
                        <td class="px-6 py-4 font-medium text-gray-900">El Señor de los Anillos</td>
                        <td class="px-6 py-4">J.R.R. Tolkien</td>
                        <td class="px-6 py-4">978-0261102385</td>
                        <td class="px-6 py-4">Fantasía</td>
                        <td class="px-6 py-4">
                            <span class="px-2.5 py-1 rounded-full text-xs font-medium bg-green-100 text-green-700">Disponible</span>
                        </td>
                        <td class="px-6 py-4 text-right">
                            <div class="flex items-center justify-end gap-3">
                                <button class="text-gray-400 hover:text-blue-600 transition-colors" title="Editar"><i class="ph-bold ph-pencil-simple text-lg"></i></button>
                                <button class="text-gray-400 hover:text-red-600 transition-colors" title="Eliminar"><i class="ph-bold ph-trash text-lg"></i></button>
                            </div>
                        </td>
                    </tr>
                    <tr class="hover:bg-gray-50 transition-colors">
                        <td class="px-6 py-4 font-medium text-gray-900">1984</td>
                        <td class="px-6 py-4">George Orwell</td>
                        <td class="px-6 py-4">978-0451524935</td>
                        <td class="px-6 py-4">Ciencia Ficción</td>
                        <td class="px-6 py-4">
                            <span class="px-2.5 py-1 rounded-full text-xs font-medium bg-red-100 text-red-700">Prestado</span>
                        </td>
                        <td class="px-6 py-4 text-right">
                            <div class="flex items-center justify-end gap-3">
                                <button class="text-gray-400 hover:text-blue-600 transition-colors" title="Editar"><i class="ph-bold ph-pencil-simple text-lg"></i></button>
                                <button class="text-gray-400 hover:text-red-600 transition-colors" title="Eliminar"><i class="ph-bold ph-trash text-lg"></i></button>
                            </div>
                        </td>
                    </tr>
                    <tr class="hover:bg-gray-50 transition-colors">
                        <td class="px-6 py-4 font-medium text-gray-900">Hábitos Atómicos</td>
                        <td class="px-6 py-4">James Clear</td>
                        <td class="px-6 py-4">978-1847941831</td>
                        <td class="px-6 py-4">Autoayuda</td>
                        <td class="px-6 py-4">
                            <span class="px-2.5 py-1 rounded-full text-xs font-medium bg-green-100 text-green-700">Disponible</span>
                        </td>
                        <td class="px-6 py-4 text-right">
                            <div class="flex items-center justify-end gap-3">
                                <button class="text-gray-400 hover:text-blue-600 transition-colors" title="Editar"><i class="ph-bold ph-pencil-simple text-lg"></i></button>
                                <button class="text-gray-400 hover:text-red-600 transition-colors" title="Eliminar"><i class="ph-bold ph-trash text-lg"></i></button>
                            </div>
                        </td>
                    </tr>
                </tbody>
            </table>
        </div>
    </div>

</div>

@endsection