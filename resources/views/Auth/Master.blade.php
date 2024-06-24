
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title>
        @yield('title-auth')
    </title>
    <!--     Fonts and icons     -->
    <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,400,600,700" rel="stylesheet" />
    <!-- Nucleo Icons -->
    <link href="../assets/css/nucleo-icons.css" rel="stylesheet" />
    <link href="../assets/css/nucleo-svg.css" rel="stylesheet" />
    <!-- Font Awesome Icons -->
    {{-- <script src="https://kit.fontawesome.com/42d5adcbca.js" crossorigin="anonymous"></script> --}}
    <link href="../assets/css/nucleo-svg.css" rel="stylesheet" />
    <!-- CSS Files -->
    <link id="pagestyle" href="../assets/css/soft-ui-dashboard.css?v=1.0.3" rel="stylesheet" />
    @stack('scripts')
</head>
<body>
    <div class="container position-sticky z-index-sticky top-0">
        <div class="row">
        <div class="col-12">
            <!-- Navbar -->
            <nav class="navbar navbar-expand-lg blur rounded-3 top-0 z-index-3 shadow position-absolute my-3 py-2 start-0 end-0 mx-4">
            <div class="container ">
                <a class="navbar-brand font-weight-bolder ms-3 " href="">
                @yield('navbar-title')
                </a>
                <button class="navbar-toggler shadow-none ms-2" type="button" data-bs-toggle="collapse" data-bs-target="#navigation" aria-controls="navigation" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon mt-2">
                    <span class="navbar-toggler-bar bar1"></span>
                    <span class="navbar-toggler-bar bar2"></span>
                    <span class="navbar-toggler-bar bar3"></span>
                </span>
                </button>
                <div class="collapse navbar-collapse " id="navigation">
                <ul class="navbar-nav mx-auto">

                    <li class="nav-item">
                    <a class="nav-link me-2" href="{{'register'}}">
                        <i class="fas fa-user-circle opacity-6 text-dark me-1"></i>
                        Sign Up
                    </a>
                    </li>
                    <li class="nav-item">
                    <a class="nav-link me-2" href="{{'login'}}">
                        <i class="fas fa-key opacity-6 text-dark me-1"></i>
                        Sign In
                    </a>
                    </li>
                </ul>
                </div>
            </div>
            </nav>
            <!-- End Navbar -->
        </div>
        </div>
    </div>

    <main class="main-content  mt-0">
        @yield('content-auth')
    </main>

    <footer class="footer py-5">
        <div class="container">
        <div class="row">
            <div class="col-lg-8 mb-4 mx-auto text-center">
            <a href="{{ route('soon') }}" class="text-secondary me-xl-5 me-3 mb-sm-0 mb-2">
                Company
            </a>
            <a href="{{ route('soon') }}" class="text-secondary me-xl-5 me-3 mb-sm-0 mb-2">
                About Us
            </a>
            <a href="{{ route('soon') }}" class="text-secondary me-xl-5 me-3 mb-sm-0 mb-2">
                Team
            </a>
            <a href="{{ route('soon') }}" class="text-secondary me-xl-5 me-3 mb-sm-0 mb-2">
                Products
            </a>
            <a href="{{ route('soon') }}" class="text-secondary me-xl-5 me-3 mb-sm-0 mb-2">
                Blog
            </a>
            <a href="{{ route('soon') }}" class="text-secondary me-xl-5 me-3 mb-sm-0 mb-2">
                Pricing
            </a>
            </div>
    
        </div>
        <div class="row">
            <div class="col-8 mx-auto text-center mt-1">
            <p class="mb-0 text-secondary">
                Copyright ©jajanutm <script>
                document.write(new Date().getFullYear())
                </script> 
            </p>
            </div>
        </div>
        </div>
    </footer>
    <!-- -------- END FOOTER 3 w/ COMPANY DESCRIPTION WITH LINKS & SOCIAL ICONS & COPYRIGHT ------- -->
    <!--   Core JS Files   -->
    <script src="../assets/js/core/popper.min.js"></script>
    <script src="../assets/js/core/bootstrap.min.js"></script>
    <script src="../assets/js/plugins/perfect-scrollbar.min.js"></script>
    <script src="../assets/js/plugins/smooth-scrollbar.min.js"></script>
    <script>
        var win = navigator.platform.indexOf('Win') > -1;
        if (win && document.querySelector('#sidenav-scrollbar')) {
        var options = {
            damping: '0.5'
        }
        Scrollbar.init(document.querySelector('#sidenav-scrollbar'), options);
        }
    </script>
    <!-- Github buttons -->
    <script async defer src="https://buttons.github.io/buttons.js"></script>
    <!-- Control Center for Soft Dashboard: parallax effects, scripts for the example pages etc -->
    <script src="../assets/js/soft-ui-dashboard.min.js?v=1.0.3"></script>
</body>

</html>