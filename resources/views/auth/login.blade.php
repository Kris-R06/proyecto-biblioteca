@extends('layout.auth')
@section('content')

        <main class="flex-grow flex items-center justify-center p-4">
        
        <div class="grid grid-cols-1 lg:grid-cols-2 gap-8 w-full max-w-6xl items-start">

            <div class="bg-white p-8 rounded-2xl shadow-lg border border-gray-100 w-full max-w-md mx-auto">
                <div class="text-center mb-8">
                    <h2 class="text-2xl font-bold text-gray-900">Iniciar Sesión</h2>
                    <p class="text-sm text-gray-500 mt-2">Bienvenido de nuevo a la biblioteca</p>
                </div>

                <form action="{{ route('login') }}" method="POST" class="space-y-5">
                    @csrf
                    <div>
                        <label for="login_email" class="block text-sm font-medium text-gray-700 mb-1">Correo Electrónico</label>
                        <input type="email" id="login_email" name="email" class="w-full px-4 py-2 border border-gray-300 rounded-lg focus:ring-2 focus:ring-brand-600 focus:border-brand-600 outline-none transition-all placeholder-gray-400" placeholder="tu@email.com" required>
                    </div>

                    <div>
                        <div class="flex items-center justify-between mb-1">
                            <label for="login_password" class="block text-sm font-medium text-gray-700">Contraseña</label>
                            <a href="#" class="text-xs text-brand-600 hover:underline font-medium">¿Olvidaste tu contraseña?</a>
                        </div>
                        <input type="password" id="login_password" name="password" class="w-full px-4 py-2 border border-gray-300 rounded-lg focus:ring-2 focus:ring-brand-600 focus:border-brand-600 outline-none transition-all placeholder-gray-400" placeholder="••••••••" required>
                    </div>

                    <button type="submit" class="w-full bg-brand-600 hover:bg-brand-700 text-white font-semibold py-2.5 rounded-lg transition-colors shadow-md">
                        Entrar
                    </button>
                </form>
            </div>

            <div class="bg-white p-8 rounded-2xl shadow-lg border border-gray-100 w-full max-w-md mx-auto">
                <div class="text-center mb-8">
                    <h2 class="text-2xl font-bold text-gray-900">Crear Cuenta</h2>
                    <p class="text-sm text-gray-500 mt-2">Únete para acceder al catálogo</p>
                </div>

                <form action="{{ route('register') }}" method="POST" class="space-y-5">
                    @csrf
                    <div class="grid grid-cols-1 md:grid-cols-2 gap-5">
                        <div>
                            <label for="name" class="block text-sm font-medium text-gray-700 mb-1">Nombre</label>
                            <input type="text" id="name" name="name" class="w-full px-4 py-2 border border-gray-300 rounded-lg focus:ring-2 focus:ring-brand-600 focus:border-brand-600 outline-none transition-all placeholder-gray-400" placeholder="Juan" required>
                        </div>
                    </div>

                    <div>
                        <label for="email" class="block text-sm font-medium text-gray-700 mb-1">Correo Electrónico</label>
                        <input type="email" id="email" name="email" class="w-full px-4 py-2 border border-gray-300 rounded-lg focus:ring-2 focus:ring-brand-600 focus:border-brand-600 outline-none transition-all placeholder-gray-400" placeholder="tu@email.com" required>
                    </div>

                    <div>
                        <label for="password" class="block text-sm font-medium text-gray-700 mb-1">Contraseña</label>
                        <input type="password" id="password" name="password" class="w-full px-4 py-2 border border-gray-300 rounded-lg focus:ring-2 focus:ring-brand-600 focus:border-brand-600 outline-none transition-all placeholder-gray-400" placeholder="Mínimo 8 caracteres" required>
                    </div>

                    <div>
                        <label for="password_confirmation" class="block text-sm font-medium text-gray-700 mb-1">Repetir Contraseña</label>
                        <input type="password" id="password_confirmation" name="password_confirmation" class="w-full px-4 py-2 border border-gray-300 rounded-lg focus:ring-2 focus:ring-brand-600 focus:border-brand-600 outline-none transition-all placeholder-gray-400" placeholder="••••••••" required>
                    </div>

                    <button type="submit" class="w-full bg-brand-600 hover:bg-brand-700 text-white font-semibold py-2.5 rounded-lg transition-colors shadow-md">
                        Registrarse
                    </button>
                </form>
            </div>
        </div>
    </main>
@endsection