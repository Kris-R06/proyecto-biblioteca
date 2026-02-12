@extends('layout.admin')
@section('admin')

    <div class="flex flex-1 relative overflow-hidden">

        <div id="sidebar-overlay" class="fixed inset-0 bg-gray-900/50 z-40 hidden lg:hidden glass transition-opacity opacity-0"></div>

        <aside id="sidebar" class="bg-slate-900 text-white w-64 fixed inset-y-0 left-0 z-50 transform -translate-x-full lg:translate-x-0 lg:static flex flex-col sidebar-transition h-full shadow-xl lg:shadow-none">
            
            <div class="flex items-center justify-between p-4 border-b border-slate-800 lg:hidden">
                <span class="font-bold text-lg">Menú</span>
                <button id="close-sidebar-btn" class="text-gray-400 hover:text-white">
                    <i class="ph ph-x text-xl"></i>
                </button>
            </div>

            <nav class="flex-1 p-4 space-y-2">
                <a href="#" class="flex items-center gap-3 px-4 py-3 rounded-lg bg-brand-600 text-white shadow-lg shadow-brand-600/20">
                    <i class="ph ph-house text-lg"></i>
                    <span>Inicio</span>
                </a>

                <p class="px-4 text-xs font-semibold text-slate-500 uppercase tracking-wider mt-6 mb-2">Gestión</p>

                <a href="#" class="flex items-center gap-3 px-4 py-3 rounded-lg text-slate-300 hover:bg-slate-800 hover:text-white transition-all group">
                    <i class="ph ph-book-open text-lg group-hover:text-brand-400"></i>
                    <span>Libros</span>
                </a>

                <a href="#" class="flex items-center gap-3 px-4 py-3 rounded-lg text-slate-300 hover:bg-slate-800 hover:text-white transition-all group">
                    <i class="ph ph-identification-card text-lg group-hover:text-brand-400"></i>
                    <span>Préstamos</span>
                </a>
            </nav>

            <div class="p-4 border-t border-slate-800">
                <a href="#" class="flex items-center gap-3 px-4 py-3 rounded-lg text-red-400 hover:bg-red-500/10 hover:text-red-300 transition-all">
                    <i class="ph ph-sign-out text-lg"></i>
                    <span>Salir</span>
                </a>
            </div>
        </aside>

        <main class="flex-1 overflow-y-auto p-4 lg:p-8">
            <div class="max-w-7xl mx-auto">
                <h1 class="text-2xl font-bold text-gray-800 mb-6">Panel de Control</h1>
                
                <div class="grid grid-cols-1 md:grid-cols-3 gap-6 mb-8">
                    <article class="bg-white p-6 rounded-xl shadow-sm border border-gray-100 flex items-center justify-between">
                        <div>
                            <p class="text-sm text-gray-500 mb-1">Total Libros</p>
                            <h2 class="text-3xl font-bold text-gray-800">1,240</h2>
                        </div>
                        <div class="p-3 bg-blue-50 text-brand-600 rounded-full">
                            <i class="ph ph-books text-2xl"></i>
                        </div>
                    </article>
                    
                    <article class="bg-white p-6 rounded-xl shadow-sm border border-gray-100 flex items-center justify-between">
                        <div>
                            <p class="text-sm text-gray-500 mb-1">Préstamos Activos</p>
                            <h2 class="text-3xl font-bold text-gray-800">85</h2>
                        </div>
                        <div class="p-3 bg-orange-50 text-orange-600 rounded-full">
                            <i class="ph ph-clock-countdown text-2xl"></i>
                        </div>
                    </article>

                    <article class="bg-white p-6 rounded-xl shadow-sm border border-gray-100 flex items-center justify-between">
                        <div>
                            <p class="text-sm text-gray-500 mb-1">Usuarios</p>
                            <h2 class="text-3xl font-bold text-gray-800">342</h2>
                        </div>
                        <div class="p-3 bg-green-50 text-green-600 rounded-full">
                            <i class="ph ph-users text-2xl"></i>
                        </div>
                    </article>
                </div>

                <div class="bg-white rounded-xl shadow-sm border border-gray-200 overflow-hidden">
                    <div class="px-6 py-4 border-b border-gray-200">
                        <h3 class="font-bold text-gray-800">Préstamos Recientes</h3>
                    </div>
                    <div class="overflow-x-auto">
                        <table class="w-full text-left text-sm text-gray-600">
                            <thead class="bg-gray-50 text-gray-800 font-semibold uppercase text-xs">
                                <tr>
                                    <th class="px-6 py-3">Usuario</th>
                                    <th class="px-6 py-3">Libro</th>
                                    <th class="px-6 py-3">Fecha</th>
                                    <th class="px-6 py-3">Estado</th>
                                </tr>
                            </thead>
                            <tbody class="divide-y divide-gray-200">
                                <tr class="hover:bg-gray-50">
                                    <td class="px-6 py-4 font-medium text-gray-900">Ana García</td>
                                    <td class="px-6 py-4">Cien años de soledad</td>
                                    <td class="px-6 py-4">05 Feb 2026</td>
                                    <td class="px-6 py-4"><span class="bg-green-100 text-green-800 px-2 py-1 rounded-full text-xs">A tiempo</span></td>
                                </tr>
                                <tr class="hover:bg-gray-50">
                                    <td class="px-6 py-4 font-medium text-gray-900">Carlos Díaz</td>
                                    <td class="px-6 py-4">Clean Code</td>
                                    <td class="px-6 py-4">04 Feb 2026</td>
                                    <td class="px-6 py-4"><span class="bg-yellow-100 text-yellow-800 px-2 py-1 rounded-full text-xs">Pendiente</span></td>
                                </tr>
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </main>
    </div>
@endsection
