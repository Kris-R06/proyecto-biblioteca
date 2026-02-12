<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin Biblioteca - Dashboard</title>
    
    <script src="https://cdn.tailwindcss.com"></script>
    
    <script src="https://unpkg.com/@phosphor-icons/web"></script>

    <script>
        tailwind.config = {
            theme: {
                extend: {
                    colors: {
                        brand: {
                            50: '#f0f9ff',
                            100: '#e0f2fe',
                            600: '#0284c7',
                            800: '#075985',
                            900: '#0c4a6e',
                        }
                    }
                }
            }
        }
    </script>
    
    <style>
        /* Transición suave para el sidebar en móvil */
        .sidebar-transition {
            transition: transform 0.3s cubic-bezier(0.4, 0, 0.2, 1);
        }
    </style>
</head>
    <body class="bg-gray-100 font-sans text-gray-800 flex flex-col min-h-screen">

    

    <header class="bg-white shadow-sm border-b border-gray-200 h-16 flex items-center justify-between px-4 lg:px-8 sticky top-0 z-50">
        
        <div class="flex items-center gap-4">
            <button id="mobile-menu-btn" class="lg:hidden p-2 text-gray-600 hover:bg-gray-100 rounded focus:outline-none">
                <i class="ph ph-list text-2xl"></i>
            </button>
            
            <div class="flex items-center gap-2 text-brand-800 font-bold text-xl">
                <i class="ph-fill ph-books"></i>
                <span>Bibliotech Admin</span>
            </div>
        </div>

        <nav class="hidden lg:flex items-center gap-6">
            <a href="#" class="text-sm font-medium text-gray-600 hover:text-brand-600 transition-colors">Inicio</a>
            <a href="#" class="text-sm font-medium text-gray-600 hover:text-brand-600 transition-colors">Usuarios</a>
            <a href="#" class="text-sm font-medium text-gray-600 hover:text-brand-600 transition-colors">Libros</a>
            <a href="#" class="text-sm font-medium text-gray-600 hover:text-brand-600 transition-colors">Préstamos</a>
            
            <div class="h-4 w-px bg-gray-300 mx-2"></div> <a href="{{ route('logout') }}" class="flex items-center gap-2 text-sm font-medium text-red-600 hover:text-red-700 transition-colors">
                <i class="ph ph-sign-out"></i>
                Salir
            </a>
        </nav>
        
        <div class="lg:hidden">
            <button class="p-2 text-gray-600">
                <i class="ph ph-user-circle text-2xl"></i>
            </button>
        </div>
    </header>

    @yield('admin')
    @include('partials.admin.admin')
