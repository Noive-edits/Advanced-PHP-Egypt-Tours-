</main>

<footer class="py-4 text-center text-warning bg-dark border-top border-warning border-3">

    Copyright &copy; 2025 | <span class="egypt-flag-text">Egypt</span> Tours

</footer>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"></script>

<script>
    (function () {
        var root = document.documentElement;
        var btn = document.getElementById('themeToggle');
        if (!btn) {
            return;
        }

        var sun = btn.querySelector('.theme-icon-sun');
        var moon = btn.querySelector('.theme-icon-moon');

        function syncToggleIcons() {
            var isDark = root.getAttribute('data-bs-theme') === 'dark';
            sun.classList.toggle('d-none', !isDark);
            moon.classList.toggle('d-none', isDark);
            btn.setAttribute('aria-pressed', isDark ? 'true' : 'false');
        }

        btn.addEventListener('click', function () {
            var isDark = root.getAttribute('data-bs-theme') === 'dark';
            var next = isDark ? 'light' : 'dark';
            root.setAttribute('data-bs-theme', next);
            localStorage.setItem('theme', next);
            syncToggleIcons();
        });

        syncToggleIcons();
    })();
</script>

</body>

</html>