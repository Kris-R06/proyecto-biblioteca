<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin Biblioteca - Dashboard</title>
    <script src="https://cdn.tailwindcss.com"></script>
    <script src="https://unpkg.com/@phosphor-icons/web"></script>
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@300;400;500;600;700&display=swap" rel="stylesheet">

    <script>
        tailwind.config = {
            theme: {
                extend: {
                    fontFamily: { sans: ['Inter', 'sans-serif'] },
                    colors: {
                        brand: { 50: '#f0f9ff', 100: '#e0f2fe', 500: '#0ea5e9', 600: '#0284c7', 900: '#0f172a' }
                    }
                }
            }
        }
    </script>
    <style>
        .custom-scrollbar::-webkit-scrollbar { width: 6px; }
        .custom-scrollbar::-webkit-scrollbar-track { background: #1e293b; }
        .custom-scrollbar::-webkit-scrollbar-thumb { background: #475569; border-radius: 10px; }
        .custom-scrollbar::-webkit-scrollbar-thumb:hover { background: #64748b; }
    </style>
</head>
<body class="bg-gray-100 font-sans text-gray-800 h-screen flex overflow-hidden">

    <div id="sidebar-overlay" class="fixed inset-0 bg-gray-900/50 z-20 hidden lg:hidden transition-opacity opacity-0" onclick="toggleSidebar()"></div>

    <aside id="sidebar" class="bg-slate-900 text-white w-64 fixed inset-y-0 left-0 z-30 transform -translate-x-full lg:translate-x-0 lg:static transition-transform duration-300 ease-in-out flex flex-col h-full shadow-2xl lg:shadow-none">
        
        <div class="flex items-center justify-between h-16 px-6 border-b border-slate-800 bg-slate-900 shrink-0">
            <div class="flex items-center gap-2 font-bold text-xl tracking-tight">
                <i class="ph-fill ph-books text-brand-500"></i>
                <span>Bibliotech</span>
            </div>
            <button class="lg:hidden text-gray-400" onclick="toggleSidebar()"><i class="ph ph-x text-xl"></i></button>
        </div>

        <nav class="flex-1 px-3 py-6 space-y-1 overflow-y-auto custom-scrollbar">
            <a href="{{ route('home') }}" class="flex items-center gap-3 px-3 py-2.5 rounded-lg bg-brand-600 text-white shadow-lg shadow-brand-600/20 group">
                <i class="ph ph-house text-lg"></i>
                <span class="font-medium">Inicio</span>
            </a>
            
            <div class="pt-4 pb-2"><p class="px-3 text-xs font-semibold text-slate-500 uppercase tracking-wider">Gestión</p></div>

            <a href="#" class="flex items-center gap-3 px-3 py-2.5 rounded-lg text-slate-400 hover:bg-slate-800 hover:text-white transition-all group">
                <i class="ph ph-users text-lg group-hover:text-brand-500"></i>
                <span class="font-medium">Usuarios</span>
            </a>
            <a href="{{ route('libros.index') }}" class="flex items-center gap-3 px-3 py-2.5 rounded-lg text-slate-400 hover:bg-slate-800 hover:text-white transition-all group">
                <i class="ph ph-book-open text-lg group-hover:text-brand-500"></i>
                <span class="font-medium">Libros</span>
            </a>
            <a href="#" class="flex items-center gap-3 px-3 py-2.5 rounded-lg text-slate-400 hover:bg-slate-800 hover:text-white transition-all group">
                <i class="ph ph-identification-card text-lg group-hover:text-brand-500"></i>
                <span class="font-medium">Préstamos</span>
            </a>
            <a href="{{ route('categorias.index') }}" class="flex items-center gap-3 px-3 py-2.5 rounded-lg text-slate-400 hover:bg-slate-800 hover:text-white transition-all group">
                <i class="ph ph-squares-four text-lg group-hover:text-brand-500"></i>
                <span class="font-medium">Categorías</span>
            </a>
        </nav>

        <div class="p-4 border-t border-slate-800 bg-slate-900 shrink-0">
            <a href="{{ route('logout') }}" class="flex items-center gap-3 px-3 py-2.5 rounded-lg text-red-400 hover:bg-red-500/10 hover:text-red-300 transition-all w-full">
                <i class="ph ph-sign-out text-lg"></i>
                <span class="font-medium">Cerrar Sesión</span>
            </a>
        </div>
    </aside>

    <div class="flex-1 flex flex-col overflow-hidden">
        
        <header class="h-16 bg-white shadow-sm border-b border-gray-200 flex items-center justify-between px-4 lg:px-8 z-10 shrink-0">
            <div class="flex items-center gap-4">
                <button class="lg:hidden p-2 -ml-2 text-gray-600 hover:bg-gray-100 rounded-md" onclick="toggleSidebar()">
                    <i class="ph ph-list text-2xl"></i>
                </button>
            </div>
            
            <div class="flex items-center gap-3">
                <div class="hidden md:flex flex-col items-end">
                    <span class="text-sm font-semibold text-gray-700">Admin</span>
                    <span class="text-xs text-gray-500">admin@bibliotech.com</span>
                </div>
                <div class="h-9 w-9 rounded-full bg-brand-100 flex items-center justify-center text-brand-600 border border-brand-200">
                    <i class="ph-fill ph-user text-xl"></i>
                </div>
            </div>
        </header>

        <main class="flex-1 overflow-x-hidden overflow-y-auto bg-gray-50 flex flex-col">

@yield('content')
@include('partials.admin.admin')