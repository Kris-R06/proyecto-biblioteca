<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Biblio Tech</title>

        <!-- Fonts -->
         <script src="https://cdn.tailwindcss.com"></script>
        <script src="https://unpkg.com/@phosphor-icons/web"></script>
        <link href="https://fonts.googleapis.com/css2?family=Inter:wght@300;400;500;600;700&display=swap" rel="stylesheet">
        <link rel="preconnect" href="https://fonts.bunny.net">
        <link href="https://fonts.bunny.net/css?family=instrument-sans:400,500,600" rel="stylesheet" />

        <!-- Styles / Scripts -->
        @if (file_exists(public_path('build/manifest.json')) || file_exists(public_path('hot')))
            @vite(['resources/css/app.css', 'resources/js/app.js'])
        @else
            <script>
                tailwind.config = {
                    theme: {
                        extend: {
                            fontFamily: {
                                sans: ['Inter', 'sans-serif'],
                            },
                            colors: {
                                brand: {
                                    50: '#f0f9ff',
                                    100: '#e0f2fe',
                                    600: '#0284c7', // Azul principal
                                    800: '#075985',
                                    900: '#0c4a6e',
                                }
                            }
                        }
                    }
                }
            </script>
            <style>
                /* Animación suave para el menú móvil */
                #mobile-menu {
                    transition: max-height 0.3s ease-in-out, opacity 0.3s ease-in-out;
                    max-height: 0;
                    opacity: 0;
                    overflow: hidden;
                }
                #mobile-menu.open {
                    max-height: 400px; /* Altura suficiente para el contenido */
                    opacity: 1;
                }
            </style>
        @endif
    </head>
    <body class="font-sans text-gray-700 antialiased flex flex-col min-h-screen">

        <header class="fixed w-full bg-white/95 backdrop-blur-sm shadow-sm z-50 transition-all duration-300" id="navbar">
            <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
                <div class="flex justify-between items-center h-20">
                    
                    <div class="flex-shrink-0 flex items-center gap-2 cursor-pointer">
                        <div class="bg-brand-600 text-white p-1.5 rounded-lg">
                            <i class="ph-bold ph-books text-2xl"></i>
                        </div>
                        <span class="font-bold text-xl tracking-tight text-gray-900">Bibliotech</span>
                    </div>

                    <nav class="hidden md:flex space-x-8 items-center">
                        <a href="#" class="text-gray-600 hover:text-brand-600 font-medium transition-colors">Inicio</a>
                        <a href="#" class="text-gray-600 hover:text-brand-600 font-medium transition-colors">Catálogo</a>
                        <a href="#" class="text-gray-600 hover:text-brand-600 font-medium transition-colors">Servicios</a>
                        
                        <a href="#" class="bg-brand-600 hover:bg-brand-800 text-white px-5 py-2.5 rounded-full font-medium transition-all shadow-lg shadow-brand-600/30 flex items-center gap-2 transform hover:-translate-y-0.5">
                            <i class="ph-bold ph-user"></i>
                            Iniciar Sesión
                        </a>
                    </nav>

                    <div class="md:hidden flex items-center">
                        <button id="mobile-menu-btn" class="text-gray-600 hover:text-brand-600 focus:outline-none p-2">
                            <i class="ph ph-list text-3xl" id="menu-icon"></i>
                        </button>
                    </div>
                </div>
            </div>

            <div id="mobile-menu" class="md:hidden bg-white border-b border-gray-100 shadow-xl">
                <div class="px-4 pt-2 pb-6 space-y-2">
                    <a href="#" class="block px-3 py-3 rounded-md text-base font-medium text-brand-600 bg-brand-50">Inicio</a>
                    <a href="#" class="block px-3 py-3 rounded-md text-base font-medium text-gray-600 hover:text-brand-600 hover:bg-gray-50">Catálogo</a>
                    <a href="#" class="block px-3 py-3 rounded-md text-base font-medium text-gray-600 hover:text-brand-600 hover:bg-gray-50">Servicios</a>
                    <div class="pt-4 border-t border-gray-100 mt-2">
                        <a href="#" class="w-full flex justify-center items-center gap-2 bg-brand-600 text-white px-4 py-3 rounded-lg font-medium shadow-md">
                            <i class="ph-bold ph-sign-in"></i>
                            Iniciar Sesión
                        </a>
                    </div>
                </div>
            </div>
        </header>

        <main class="flex-grow">
            
            <section class="relative bg-gray-900 pt-32 pb-20 lg:pt-48 lg:pb-32 overflow-hidden">
                <div class="absolute inset-0 z-0">
                    <img src="https://images.unsplash.com/photo-1507842217121-9e93a5f6b7cd?q=80&w=2070&auto=format&fit=crop" 
                        alt="Biblioteca interior" 
                        class="w-full h-full object-cover opacity-40">
                    <div class="absolute inset-0 bg-gradient-to-t from-gray-900 via-gray-900/60 to-transparent"></div>
                </div>

                <div class="relative z-10 max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 text-center">
                    <span class="inline-block py-1 px-3 rounded-full bg-brand-600/20 border border-brand-500/30 text-brand-100 text-sm font-semibold mb-6 backdrop-blur-sm">
                        📚 Bienvenidos a Bibliotech
                    </span>
                    <h1 class="text-4xl sm:text-5xl lg:text-6xl font-extrabold text-white tracking-tight mb-6 leading-tight">
                        Explora un universo de <br>
                        <span class="text-transparent bg-clip-text bg-gradient-to-r from-blue-200 to-brand-400">conocimiento infinito</span>
                    </h1>
                    <p class="mt-4 text-xl text-gray-300 max-w-2xl mx-auto mb-10">
                        Accede a miles de libros, recursos digitales y espacios de estudio. Gestiona tus préstamos desde cualquier lugar con nuestra plataforma digital.
                    </p>
                    <div class="flex flex-col sm:flex-row justify-center gap-4">
                        <a href="#" class="px-8 py-4 bg-brand-600 hover:bg-brand-500 text-white rounded-lg font-bold text-lg transition-all shadow-lg shadow-brand-600/40 hover:shadow-brand-600/60 transform hover:-translate-y-1">
                            Buscar Libros
                        </a>
                        <a href="#" class="px-8 py-4 bg-white/10 hover:bg-white/20 backdrop-blur-md border border-white/20 text-white rounded-lg font-bold text-lg transition-all flex items-center justify-center gap-2">
                            <i class="ph ph-play-circle text-xl"></i>
                            Ver Tutorial
                        </a>
                    </div>
                </div>
            </section>

            <section class="py-20 bg-gray-50">
                <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
                    <div class="text-center mb-16">
                        <h2 class="text-3xl font-bold text-gray-900">Todo lo que necesitas para estudiar</h2>
                        <p class="mt-4 text-gray-600">Nuestros servicios están diseñados para facilitar tu aprendizaje.</p>
                    </div>

                    <div class="grid grid-cols-1 md:grid-cols-3 gap-8">
                        <div class="bg-white p-8 rounded-2xl shadow-sm border border-gray-100 hover:shadow-md transition-shadow">
                            <div class="w-14 h-14 bg-blue-100 rounded-xl flex items-center justify-center text-brand-600 mb-6">
                                <i class="ph-duotone ph-magnifying-glass text-3xl"></i>
                            </div>
                            <h3 class="text-xl font-bold text-gray-900 mb-3">Búsqueda Rápida</h3>
                            <p class="text-gray-600 leading-relaxed">
                                Encuentra cualquier libro en segundos con nuestro sistema de filtrado inteligente por autor, género o ISBN.
                            </p>
                        </div>

                        <div class="bg-white p-8 rounded-2xl shadow-sm border border-gray-100 hover:shadow-md transition-shadow">
                            <div class="w-14 h-14 bg-green-100 rounded-xl flex items-center justify-center text-green-600 mb-6">
                                <i class="ph-duotone ph-device-mobile-camera text-3xl"></i>
                            </div>
                            <h3 class="text-xl font-bold text-gray-900 mb-3">Reserva Digital</h3>
                            <p class="text-gray-600 leading-relaxed">
                                Aparta tus libros desde tu celular y recógelos cuando estés listo. Sin filas ni esperas.
                            </p>
                        </div>

                        <div class="bg-white p-8 rounded-2xl shadow-sm border border-gray-100 hover:shadow-md transition-shadow">
                            <div class="w-14 h-14 bg-purple-100 rounded-xl flex items-center justify-center text-purple-600 mb-6">
                                <i class="ph-duotone ph-armchair text-3xl"></i>
                            </div>
                            <h3 class="text-xl font-bold text-gray-900 mb-3">Espacios Cómodos</h3>
                            <p class="text-gray-600 leading-relaxed">
                                Reserva salas de estudio privadas o cubículos individuales equipados con internet de alta velocidad.
                            </p>
                        </div>
                    </div>
                </div>
            </section>
            
            <section class="py-16 bg-white border-t border-gray-100">
                <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 flex flex-col md:flex-row items-center justify-between gap-8">
                    <div class="flex items-center gap-6">
                        <img src="https://images.unsplash.com/photo-1544716278-ca5e3f4abd8c?q=80&w=100&auto=format&fit=crop" class="w-20 h-20 rounded-full object-cover ring-4 ring-gray-50" alt="Avatar">
                        <div>
                            <h3 class="text-2xl font-bold text-gray-900">¿Nuevo en la biblioteca?</h3>
                            <p class="text-gray-600">Regístrate hoy y obtén acceso inmediato al catálogo digital.</p>
                        </div>
                    </div>
                    <a href="#" class="w-full md:w-auto text-center px-8 py-3 rounded-lg border-2 border-brand-600 text-brand-600 font-bold hover:bg-brand-50 transition-colors">
                        Crear una cuenta gratis
                    </a>
                </div>
            </section>

        </main>

        <footer class="bg-gray-900 text-gray-300 py-12 border-t border-gray-800">
            <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
                <div class="grid grid-cols-1 md:grid-cols-4 gap-8 mb-8">
                    <div class="col-span-1 md:col-span-1">
                        <div class="flex items-center gap-2 text-white font-bold text-xl mb-4">
                            <i class="ph-fill ph-books"></i>
                            <span>Bibliotech</span>
                        </div>
                        <p class="text-sm text-gray-400">
                            Fomentando la cultura y el aprendizaje desde 2024. Tu espacio seguro para crecer.
                        </p>
                    </div>
                    <div>
                        <h4 class="text-white font-semibold mb-4">Enlaces</h4>
                        <ul class="space-y-2 text-sm">
                            <li><a href="#" class="hover:text-white transition-colors">Inicio</a></li>
                            <li><a href="#" class="hover:text-white transition-colors">Catálogo</a></li>
                            <li><a href="#" class="hover:text-white transition-colors">Eventos</a></li>
                        </ul>
                    </div>
                    <div>
                        <h4 class="text-white font-semibold mb-4">Soporte</h4>
                        <ul class="space-y-2 text-sm">
                            <li><a href="#" class="hover:text-white transition-colors">Preguntas Frecuentes</a></li>
                            <li><a href="#" class="hover:text-white transition-colors">Contacto</a></li>
                            <li><a href="#" class="hover:text-white transition-colors">Normativa</a></li>
                        </ul>
                    </div>
                    <div>
                        <h4 class="text-white font-semibold mb-4">Horario</h4>
                        <ul class="space-y-2 text-sm text-gray-400">
                            <li>Lun - Vie: 8:00 AM - 8:00 PM</li>
                            <li>Sábados: 9:00 AM - 2:00 PM</li>
                            <li>Domingos: Cerrado</li>
                        </ul>
                    </div>
                </div>
                <div class="border-t border-gray-800 pt-8 flex flex-col md:flex-row justify-between items-center text-sm">
                    <p>&copy; 2026 Bibliotech System. Todos los derechos reservados.</p>
                    <div class="flex space-x-6 mt-4 md:mt-0">
                        <a href="#" class="hover:text-white"><i class="ph-fill ph-facebook-logo text-xl"></i></a>
                        <a href="#" class="hover:text-white"><i class="ph-fill ph-twitter-logo text-xl"></i></a>
                        <a href="#" class="hover:text-white"><i class="ph-fill ph-instagram-logo text-xl"></i></a>
                    </div>
                </div>
            </div>
        </footer>

        <script>
            document.addEventListener('DOMContentLoaded', () => {
                const btn = document.getElementById('mobile-menu-btn');
                const menu = document.getElementById('mobile-menu');
                const icon = document.getElementById('menu-icon');

                btn.addEventListener('click', () => {
                    // Toggle de la clase 'open' para animaciones CSS
                    menu.classList.toggle('open');
                    
                    // Cambio de icono (Hamburguesa <-> X)
                    if (menu.classList.contains('open')) {
                        icon.classList.remove('ph-list');
                        icon.classList.add('ph-x');
                    } else {
                        icon.classList.remove('ph-x');
                        icon.classList.add('ph-list');
                    }
                });

                // Efecto Sticky Navbar: cambiar fondo al hacer scroll
                const navbar = document.getElementById('navbar');
                window.addEventListener('scroll', () => {
                    if (window.scrollY > 10) {
                        navbar.classList.add('shadow-md');
                    } else {
                        navbar.classList.remove('shadow-md');
                    }
                });
            });
        </script>
    </body>
</html>
