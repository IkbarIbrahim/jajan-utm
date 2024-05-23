<!doctype html>
<html>
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>@yield('title')</title>
  <script src="https://unpkg.com/ionicons@4.5.10-0/dist/ionicons.js"></script>
  <script defer src="https://cdn.jsdelivr.net/npm/alpinejs@3.x.x/dist/cdn.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/flowbite/2.3.0/flowbite.min.js"></script>
  @vite(['resources/css/app.css', 'resources/js/app.js'])
</head>
<body class="bg-gray-200 dark:bg-gray-500">
    <div class="bg-gray-200 dark:bg-gray-500">
        @include('User.Layouts.Header')

        @yield('content')
        
        <button x-data="{}" @click="window.scrollTo({ top: 0, behavior: 'smooth' })" id="scroll-to-top" class="fixed bottom-10 right-10 z-50 rounded-full dark:bg-gray-100 w-12 h-12 hidden justify-center items-center shadow-md">
            <i class="fas fa-arrow-up text-3xl"></i>
        </button>
      
        @include('User.Layouts.Footer')
    </div>

    <script>
        document.addEventListener('DOMContentLoaded', (event) => {
            var themeToggleDarkIcon = document.getElementById('theme-toggle-dark-icon');
            var themeToggleLightIcon = document.getElementById('theme-toggle-light-icon');
            var themeToggleBtn = document.getElementById('theme-toggle');

            // Initial theme check
            if (localStorage.getItem('color-theme') === 'dark' || (!('color-theme' in localStorage) && window.matchMedia('(prefers-color-scheme: dark)').matches)) {
                document.documentElement.classList.add('dark');
                if (themeToggleLightIcon) themeToggleLightIcon.classList.remove('hidden');
                if (themeToggleDarkIcon) themeToggleDarkIcon.classList.add('hidden');
            } else {
                document.documentElement.classList.remove('dark');
                if (themeToggleLightIcon) themeToggleLightIcon.classList.add('hidden');
                if (themeToggleDarkIcon) themeToggleDarkIcon.classList.remove('hidden');
            }

            // Theme toggle button event listener
            if (themeToggleBtn) {
                themeToggleBtn.addEventListener('click', function() {
                    themeToggleDarkIcon.classList.toggle('hidden');
                    themeToggleLightIcon.classList.toggle('hidden');

                    if (localStorage.getItem('color-theme')) {
                        if (localStorage.getItem('color-theme') === 'light') {
                            document.documentElement.classList.add('dark');
                            localStorage.setItem('color-theme', 'dark');
                        } else {
                            document.documentElement.classList.remove('dark');
                            localStorage.setItem('color-theme', 'light');
                        }
                    } else {
                        if (document.documentElement.classList.contains('dark')) {
                            document.documentElement.classList.remove('dark');
                            localStorage.setItem('color-theme', 'light');
                        } else {
                            document.documentElement.classList.add('dark');
                            localStorage.setItem('color-theme', 'dark');
                        }
                    }
                });
            }

            // Scroll to top button
            var scrollToTopButton = document.getElementById('scroll-to-top');
            window.addEventListener('scroll', () => {
                if (window.pageYOffset > 100) {
                    scrollToTopButton.style.display = 'flex';
                } else {
                    scrollToTopButton.style.display = 'none';
                }
            });
        });

        function onToggleMenu(e) {
            e.name = e.name === 'menu' ? 'close' : 'menu';
        }

        // Initialize Flowbite Collapse (make sure elements are correctly defined in your HTML)
        var collapseTriggerEl = document.querySelector('[data-collapse-toggle]');
        if (collapseTriggerEl) {
            var collapse = new Collapse(collapseTriggerEl);
            collapseTriggerEl.addEventListener('click', function () {
                collapse.toggle();
            });
        }
    </script>
    
    <script src="https://unpkg.com/@popperjs/core@2"></script>
</body>
</html>
