<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Laravel</title>

          <!-- Favicons -->
        <link href="assets/img/favicon.png" rel="icon">
        <link href="assets/img/apple-touch-icon.png" rel="apple-touch-icon">

        <!-- Google Fonts -->
        <link rel="preconnect" href="https://fonts.googleapis.com">
        <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
        <link href="https://fonts.googleapis.com/css2?family=Open+Sans:ital,wght@0,300;0,400;0,500;0,600;0,700;1,300;1,400;1,500;1,600;1,700&family=Poppins:ital,wght@0,300;0,400;0,500;0,600;0,700;1,300;1,400;1,500;1,600;1,700&family=Source+Sans+Pro:ital,wght@0,300;0,400;0,600;0,700;1,300;1,400;1,600;1,700&display=swap" rel="stylesheet">

        <!-- Vendor CSS Files -->
        <link href="assets/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
        <link href="assets/vendor/bootstrap-icons/bootstrap-icons.css" rel="stylesheet">
        <link href="assets/vendor/aos/aos.css" rel="stylesheet">
        <link href="assets/vendor/glightbox/css/glightbox.min.css" rel="stylesheet">
        <link href="assets/vendor/swiper/swiper-bundle.min.css" rel="stylesheet">

        <!-- Variables CSS Files. Uncomment your preferred color scheme -->
        <link href="assets/css/variables.css" rel="stylesheet">
        <!-- <link href="assets/css/variables-blue.css" rel="stylesheet"> -->
        <!-- <link href="assets/css/variables-green.css" rel="stylesheet"> -->
        <!-- <link href="assets/css/variables-orange.css" rel="stylesheet"> -->
        <!-- <link href="assets/css/variables-purple.css" rel="stylesheet"> -->
        <!-- <link href="assets/css/variables-red.css" rel="stylesheet"> -->
        <!-- <link href="assets/css/variables-pink.css" rel="stylesheet"> -->

        <!-- Template Main CSS File -->
        <link href="assets/css/main.css" rel="stylesheet">

        <!-- =======================================================
        * Template Name: HeroBiz - v2.1.0
        * Template URL: https://bootstrapmade.com/herobiz-bootstrap-business-template/
        * Author: BootstrapMade.com
        * License: https://bootstrapmade.com/license/
        ======================================================== -->
    </head>
    {{-- <body class="antialiased">
        <div class="relative flex items-top justify-center min-h-screen bg-gray-100 dark:bg-gray-900 sm:items-center py-4 sm:pt-0">
            @if (Route::has('login'))
                <div class="hidden fixed top-0 right-0 px-6 py-4 sm:block">
                    @auth
                        <a href="{{ url('/home') }}" class="text-sm text-gray-700 dark:text-gray-500 underline">Home</a>
                    @else
                        <a href="{{ route('login') }}" class="text-sm text-gray-700 dark:text-gray-500 underline">Log in</a>

                        @if (Route::has('register'))
                            <a href="{{ route('register') }}" class="ml-4 text-sm text-gray-700 dark:text-gray-500 underline">Register</a>
                        @endif
                    @endauth
                </div>
            @endif

            
        </div>
    </body> --}}
    <body>

        <!-- ======= Header ======= -->
        <header id="header" class="header fixed-top" data-scrollto-offset="0">
          <div class="container-fluid d-flex align-items-center justify-content-between">
      
            <a href="/" class="logo d-flex align-items-center scrollto me-auto me-lg-0">
              <!-- Uncomment the line below if you also wish to use an image logo -->
              <!-- <img src="assets/img/logo.png" alt=""> -->
              <h1>myMusic<span>.</span></h1>
            </a>
      
            <nav id="navbar" class="navbar">
              <ul>
                <li><a class="nav-link scrollto" href="index.html#about">Brands</a></li>
                <li><a class="nav-link scrollto" href="index.html#services">Product</a></li>
                <li><a class="nav-link scrollto" href="index.html#recent-blog-posts">Blogs</a></li>
                <li><a class="nav-link scrollto" href="index.html#team">About</a></li>
                <li><a href="blog.html">Blog</a></li>
                
              </ul>
              <i class="bi bi-list mobile-nav-toggle d-none"></i>
            </nav><!-- .navbar -->
            @if (Route::has('login'))
                <div class="hidden fixed top-0 right-0 px-6 py-4 sm:block">
                    @auth
                        <a href="{{ url('/home') }}" class="btn-getstarted scrollto">Dashboard</a>
                    @else
                        
                        <a href="{{ route('login') }}" class="btn-getstarted scrollto">Log In</a>

                        @if (Route::has('register'))
                           
                            <a class="btn-getstarted scrollto" href="{{ route('register') }}">Register</a>
                        @endif
                    @endauth
                </div>
            @endif
            
            
          </div>
        </header><!-- End Header -->
          @yield('content')
      
        <!-- ======= Footer ======= -->
        <footer id="footer" class="footer fixed">
      
      
          <div class="footer-legal text-center">
            <div class="container d-flex flex-column flex-lg-row justify-content-center justify-content-lg-between align-items-center">
      
              <div class="d-flex flex-column align-items-center align-items-lg-start">
                <div class="copyright">
                  &copy; Copyright <strong><span>myMusic</span></strong>. All Rights Reserved
                </div>
                <div class="credits">
                  <!-- All the links in the footer should remain intact. -->
                  <!-- You can delete the links only if you purchased the pro version. -->
                  <!-- Licensing information: https://bootstrapmade.com/license/ -->
                  <!-- Purchase the pro version with working PHP/AJAX contact form: https://bootstrapmade.com/herobiz-bootstrap-business-template/ -->
                  Designed by <a href="https://bootstrapmade.com/">BootstrapMade</a>
                </div>
              </div>
      
              <div class="social-links order-first order-lg-last mb-3 mb-lg-0">
                <a href="#" class="twitter"><i class="bi bi-twitter"></i></a>
                <a href="#" class="facebook"><i class="bi bi-facebook"></i></a>
                <a href="#" class="instagram"><i class="bi bi-instagram"></i></a>
                <a href="#" class="google-plus"><i class="bi bi-skype"></i></a>
                <a href="#" class="linkedin"><i class="bi bi-linkedin"></i></a>
              </div>
      
            </div>
          </div>
      
        </footer><!-- End Footer -->
      
        <a href="#" class="scroll-top d-flex align-items-center justify-content-center"><i class="bi bi-arrow-up-short"></i></a>
      
        <div id="preloader"></div>
      
        <!-- Vendor JS Files -->
        <script src="assets/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
        <script src="assets/vendor/aos/aos.js"></script>
        <script src="assets/vendor/glightbox/js/glightbox.min.js"></script>
        <script src="assets/vendor/isotope-layout/isotope.pkgd.min.js"></script>
        <script src="assets/vendor/swiper/swiper-bundle.min.js"></script>
        <script src="assets/vendor/php-email-form/validate.js"></script>
      
        <!-- Template Main JS File -->
        <script src="assets/js/main.js"></script>
      
      </body>
</html>
