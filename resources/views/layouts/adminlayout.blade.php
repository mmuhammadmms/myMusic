<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">

  <title>Dashboard - myMusic Admin</title>
  <meta content="" name="description">
  <meta content="" name="keywords">

  <!-- Favicons -->
  <link href="assets/img/favicon.png" rel="icon">
  <link href="assets/img/apple-touch-icon.png" rel="apple-touch-icon">

  <!-- Google Fonts -->
  <link href="https://fonts.gstatic.com" rel="preconnect">
  <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i|Nunito:300,300i,400,400i,600,600i,700,700i|Poppins:300,300i,400,400i,500,500i,600,600i,700,700i" rel="stylesheet">

  <!-- Vendor CSS Files -->
  <link href="{{ asset('assets/vendor/adminvendor/bootstrap/css/bootstrap.min.css') }}" rel="stylesheet">
  <link href="{{ asset('assets/vendor/adminvendor/bootstrap-icons/bootstrap-icons.css') }}" rel="stylesheet">
  <link href="{{ asset('assets/vendor/adminvendor/boxicons/css/boxicons.min.css') }}" rel="stylesheet">
  <link href="{{ asset('assets/vendor/adminvendor/quill/quill.snow.css') }}" rel="stylesheet">
  <link href="{{ asset('assets/vendor/adminvendor/quill/quill.bubble.css') }}" rel="stylesheet">
  <link href="{{ asset('assets/vendor/adminvendor/remixicon/remixicon.css') }}" rel="stylesheet">
  <link href="{{ asset('assets/vendor/adminvendor/simple-datatables/style.css') }}" rel="stylesheet">

  <!-- Template Main CSS File -->
  <link href="{{ asset('assets/css/style.css') }}" rel="stylesheet">

  <!-- =======================================================
  * Template Name: NiceAdmin - v2.2.2
  * Template URL: https://bootstrapmade.com/nice-admin-bootstrap-admin-html-template/
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
    <body class="d-flex flex-column min-vh-100">

      <!-- ======= Header ======= -->
      <header id="header" class="header fixed-top d-flex align-items-center">
    
        <div class="d-flex align-items-center justify-content-between">
          <a href="/" class="logo d-flex align-items-center">
            <img src="assets/img/logo.png" alt="">
            <span class="d-none d-lg-block">myMusic</span>
          </a>
          <i class="bi bi-list toggle-sidebar-btn"></i>
        </div><!-- End Logo -->
    
        <div class="search-bar">
          <form class="search-form d-flex align-items-center" method="POST" action="#">
            <input type="text" name="query" placeholder="Search" title="Enter search keyword">
            <button type="submit" title="Search"><i class="bi bi-search"></i></button>
          </form>
        </div><!-- End Search Bar -->
    
        <nav class="header-nav ms-auto">
          <ul class="d-flex align-items-center">
    
            <li class="nav-item d-block d-lg-none">
              <a class="nav-link nav-icon search-bar-toggle " href="#">
                <i class="bi bi-search"></i>
              </a>
            </li><!-- End Search Icon-->
    
          
    
            <li class="nav-item dropdown pe-3">
    
              <a class="nav-link nav-profile d-flex align-items-center pe-0" href="#" data-bs-toggle="dropdown">
                <img src="assets/img/profile-img.jpg" alt="Profile" class="rounded-circle">
                <span class="d-none d-md-block dropdown-toggle ps-2">
                  
                  {{ Auth::user()->name }}
                  @can('admin')
                    (Admin)
                  @endcan
                </span>
              </a><!-- End Profile Iamge Icon -->
    
              <ul class="dropdown-menu dropdown-menu-end dropdown-menu-arrow profile">
                <li class="dropdown-header">
                  <h6>{{ Auth::user()->name }}</h6>
                  <span>Admin</span>
                </li>
                <li>
                  <hr class="dropdown-divider">
                </li>
    
                <li>
                  <a class="dropdown-item d-flex align-items-center" href="users-profile.html">
                    <i class="bi bi-person"></i>
                    <span>My Profile</span>
                  </a>
                </li>
                <li>
                  <hr class="dropdown-divider">
                </li>
    
                <li>
                  <a class="dropdown-item d-flex align-items-center" href="users-profile.html">
                    <i class="bi bi-gear"></i>
                    <span>Account Settings</span>
                  </a>
                </li>
                <li>
                  <hr class="dropdown-divider">
                </li>
    
                <li>
                  <hr class="dropdown-divider">
                </li>
    
                <li>
                  <a class="dropdown-item d-flex align-items-center" href="{{ route('logout') }}"
                           onclick="event.preventDefault();
                                         document.getElementById('logout-form').submit();">
                            <i class="bi bi-box-arrow-right"></i>{{ __('Logout') }}
                  </a>
                    
                        <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                            @csrf
                        </form>
                </li>
    
              </ul><!-- End Profile Dropdown Items -->
            </li><!-- End Profile Nav -->
    
          </ul>
        </nav><!-- End Icons Navigation -->
    
      </header><!-- End Header -->
    
      <!-- ======= Sidebar ======= -->
      <aside id="sidebar" class="sidebar">
    
        <ul class="sidebar-nav" id="sidebar-nav">
    
          <li class="nav-item">
            <a class="nav-link " href="/home">
              <i class="bi bi-grid"></i>
              <span>Dashboard</span>
            </a>
          </li><!-- End Dashboard Nav -->
    
          <li class="nav-item">
            @can('admin')
            <a class="nav-link collapsed" data-bs-target="#components-nav" data-bs-toggle="collapse" href="#">
              <i class="bi bi-menu-button-wide"></i><span>System Management</span><i class="bi bi-chevron-down ms-auto"></i>
            </a>
            <ul id="components-nav" class="nav-content " data-bs-parent="#sidebar-nav">
              <li>
                <a href="{{ route('users.index') }}">
                  <i class="bi bi-circle"></i><span>Users</span>
                </a>
              </li>
              <li>
                <a href="{{ route('brands.index') }}">
                  <i class="bi bi-circle"></i><span>Brands</span>
                </a>
              </li>
              <li>
                <a href="{{ route('categories.index') }}">
                  <i class="bi bi-circle"></i><span>Categories</span>
                </a>
              </li>
              <li>
                <a href="{{ route('products.index') }}">
                  <i class="bi bi-circle"></i><span>Products</span>
                </a>
              </li>
           </ul>
           @endcan
           <li class="nav-item">
            <a class="nav-link " href="/blogs">
              <i class="bi bi-grid"></i>
              <span>Blogs</span>
            </a>
          </li>
          </ul>

    
      </aside><!-- End Sidebar-->
    
      <main id="main" class="main">
    
        <div class="pagetitle">
          <h1>Dashboard</h1>
          <nav>
            <ol class="breadcrumb">
              <li class="breadcrumb-item"><a href="/home">Home</a></li>
              <li class="breadcrumb-item active">Dashboard</li>
            </ol>
          </nav>
        </div><!-- End Page Title -->
        
        
          @yield('content')
        
        
      </main><!-- End #main -->
    
      <!-- ======= Footer ======= -->
      <footer id="footer" class="footer mt-auto">
        <div class="copyright">
          &copy; Copyright <strong><span>myMusic</span></strong>. All Rights Reserved
        </div>
        <div class="credits">
          <!-- All the links in the footer should remain intact. -->
          <!-- You can delete the links only if you purchased the pro version. -->
          <!-- Licensing information: https://bootstrapmade.com/license/ -->
          <!-- Purchase the pro version with working PHP/AJAX contact form: https://bootstrapmade.com/nice-admin-bootstrap-admin-html-template/ -->
          Designed by <a href="https://bootstrapmade.com/">BootstrapMade</a>
        </div>
      </footer><!-- End Footer -->
    
      <a href="#" class="back-to-top d-flex align-items-center justify-content-center"><i class="bi bi-arrow-up-short"></i></a>
    
      <!-- Vendor JS Files -->
      <script src="{{ asset('assets/vendor/adminvendor/apexcharts/apexcharts.min.js') }}"></script>
      <script src="{{ asset('assets/vendor/adminvendor/bootstrap/js/bootstrap.bundle.min.js') }}"></script>
      <script src="{{ asset('assets/vendor/adminvendor/chart.js/chart.min.js') }}"></script>
      <script src="{{ asset('assets/vendor/adminvendor/echarts/echarts.min.js') }}"></script>
      <script src="{{ asset('assets/vendor/adminvendor/quill/quill.min.js') }}"></script>
      <script src="{{ asset('assets/vendor/adminvendor/simple-datatables/simple-datatables.js') }}"></script>
      <script src="{{ asset('assets/vendor/adminvendor/tinymce/tinymce.min.js') }}"></script>
      <script src="{{ asset('assets/vendor/adminvendor/php-email-form/validate.js') }}"></script>
    
      <!-- Template Main JS File -->
      <script src="{{ asset('assets/js/main.js') }}"></script>
    
    </body>
    </html>
