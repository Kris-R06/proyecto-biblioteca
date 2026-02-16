            <footer class="mt-auto py-6 border-t border-gray-200 text-center text-sm text-gray-500 bg-white/50">
                &copy; 2026 Sistema de Biblioteca. Todos los derechos reservados.
            </footer>

        </main> 
    </div> 

        <script>
            function toggleSidebar() {
                const sidebar = document.getElementById('sidebar');
                const overlay = document.getElementById('sidebar-overlay');
                if (sidebar.classList.contains('-translate-x-full')) {
                    sidebar.classList.remove('-translate-x-full');
                    overlay.classList.remove('hidden');
                    setTimeout(() => overlay.classList.remove('opacity-0'), 10);
                } else {
                    sidebar.classList.add('-translate-x-full');
                    overlay.classList.add('opacity-0');
                    setTimeout(() => overlay.classList.add('hidden'), 300);
                }
            }
        </script>
    </body>
</html>