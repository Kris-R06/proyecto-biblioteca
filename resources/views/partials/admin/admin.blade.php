<footer class="bg-white border-t border-gray-200 py-4 text-center">
        <div class="container mx-auto px-4">
            <p class="text-sm text-gray-500">
                &copy; 2026 Sistema de Biblioteca. Todos los derechos reservados.
            </p>
        </div>
    </footer>

    <script>
        document.addEventListener('DOMContentLoaded', () => {
            // Referencias al DOM
            const mobileBtn = document.getElementById('mobile-menu-btn');
            const closeBtn = document.getElementById('close-sidebar-btn');
            const sidebar = document.getElementById('sidebar');
            const overlay = document.getElementById('sidebar-overlay');

            // Funciones de utilidad
            const openSidebar = () => {
                sidebar.classList.remove('-translate-x-full');
                overlay.classList.remove('hidden');
                // Pequeño delay para permitir que el display:block se renderice antes de la opacidad
                setTimeout(() => {
                    overlay.classList.remove('opacity-0');
                }, 10);
            };

            const closeSidebar = () => {
                sidebar.classList.add('-translate-x-full');
                overlay.classList.add('opacity-0');
                
                // Esperar a que termine la transición de opacidad para ocultar el div
                setTimeout(() => {
                    overlay.classList.add('hidden');
                }, 300);
            };

            // Event Listeners
            mobileBtn.addEventListener('click', openSidebar);
            closeBtn.addEventListener('click', closeSidebar);
            overlay.addEventListener('click', closeSidebar);

            // Cerrar sidebar si la ventana se agranda (vuelve a escritorio)
            window.addEventListener('resize', () => {
                if (window.innerWidth >= 1024) { // 1024px es el breakpoint 'lg' de Tailwind
                    sidebar.classList.add('lg:translate-x-0'); // Asegura que se vea en desktop
                    overlay.classList.add('hidden'); // Oculta overlay
                }
            });
        });
    </script>
</body>
</html>