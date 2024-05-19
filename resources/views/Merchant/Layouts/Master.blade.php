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
<body>
    <div class="bg-gray-500">
        @include('Merchant.layouts.Sidebar')
        @yield('content')

        @include('Merchant.layouts.Footer')
        
      </div>
      


    <script>

      var themeToggleDarkIcon = document.getElementById('theme-toggle-dark-icon');
      var themeToggleLightIcon = document.getElementById('theme-toggle-light-icon');

      if (localStorage.getItem('color-theme') === 'dark' || (!('color-theme' in localStorage) && window.matchMedia('(prefers-color-scheme: dark)').matches)) {
          themeToggleLightIcon.classList.remove('hidden');
      } else {
          themeToggleDarkIcon.classList.remove('hidden');
      }

      var themeToggleBtn = document.getElementById('theme-toggle');

      themeToggleBtn.addEventListener('click', function() {

          // toggle icons inside button
          themeToggleDarkIcon.classList.toggle('hidden');
          themeToggleLightIcon.classList.toggle('hidden');

          // if set via local storage previously
          if (localStorage.getItem('color-theme')) {
              if (localStorage.getItem('color-theme') === 'light') {
                  document.documentElement.classList.add('dark');
                  localStorage.setItem('color-theme', 'dark');
              } else {
                  document.documentElement.classList.remove('dark');
                  localStorage.setItem('color-theme', 'light');
              }

          // if NOT set via local storage previously
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
      
      function onToggleMenu(e){
      e.name = e.name === 'menu' ? 'close' : 'menu' 
      }  
      const collapse = new Collapse($targetEl, $triggerEl, options, instanceOptions);
  
      $triggerEl.addEventListener('click', function () {
          collapse.toggle();
      });
    </script>
    
    <script src="https://unpkg.com/@popperjs/core@2"></script>
</body>
</html>