<!doctype html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
      <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
      
      <!-- Favicon -->
      <link rel="shortcut icon" type="image/png" href="{{ asset('logo_siak.png') }}" />
      
      <!-- Library / Plugin Css Build -->
      <link rel="stylesheet" href="{{ asset('assets/css/core/libs.min.css') }}" />
      
      <!-- Aos Animation Css -->
      <link rel="stylesheet" href="{{ asset('assets/vendor/aos/dist/aos.css') }}" />
      
      <!-- Hope Ui Design System Css -->
      <link rel="stylesheet" href="{{ asset('assets/css/mycustom.css?v=1.0.3') }}" />
      
      <!-- Custom Css -->
      <link rel="stylesheet" href="{{ asset('assets/css/custom.min.css?v=1.2.0') }}" />
      
      <!-- Customizer Css -->
      <link rel="stylesheet" href="{{ asset('assets/css/customizer.min.css') }}" />

      <link rel="stylesheet" href="{{ asset('assets/js/DataTables/DataTables-1.12.1/css/dataTables.bootstrap5.min.css') }}">
      <link rel="stylesheet" href="{{ asset('assets/js/sweetalert/sweetalert2.min.css') }}">
      <link rel="stylesheet" href="//code.jquery.com/ui/1.13.2/themes/base/jquery-ui.css">
    
      <title>@yield('title')</title>
      
      <style>
        html, body {
            color: #2f3036;
        }
        .sidebar-default .sidebar-list .navbar-nav .nav-item .nav-link:not(.disabled) {
            display: flex;
            white-space: normal;
        }
      </style>
      
      @yield('css')
  </head>
  <body class="  ">
    <!-- loader Start -->
    <div id="loading">
        <div class="loader simple-loader">
            <div class="loader-body"></div>
        </div>    
    </div>
    <!-- loader END -->
      
    <main class="main-content">
        <div class="position-relative">

            <!--Nav Start-->
            <nav class="nav navbar navbar-expand-lg navbar-light iq-navbar">
                <div class="container-fluid navbar-inner">
                    <div class="collapse navbar-collapse" id="navbarCollapse">
                        <div class="navbar-nav ms-auto align-items-center navbar-list" style="height: 50px;">
                            @if(session()->get('username'))
                            <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                                    <li class="nav-item">
                                        <a class="nav-link active" aria-current="page" href="{{ url('/admin/dashboard') }}">Home</a>
                                    </li>
                                    <li class="nav-item dropdown">
                                        <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                                        Management
                                        </a>
                                        <ul class="dropdown-menu">
                                        <li><a class="dropdown-item" href="{{ url('/admin/layanan') }}">Layanan</a></li>
                                        <li><a class="dropdown-item" href="{{ url('/admin/pertanyaan') }}">Pertanyaan</a></li>
                                        <li><a class="dropdown-item" href="{{ url('/admin/jawaban') }}">Jawaban</a></li>
                                        </ul>
                                    </li>
                                    </ul>
                            <a href="{{ url('auth/logout') }}" class="btn btn-success">                           
                                Logout
                            </a>
                            @else 
                            <a href="{{ url('login') }}" class="btn btn-success">                           
                                Login
                            </a>
                            @endif
                        </div>
                    </div>
                </div>
            </nav>          
            {{-- Nav End --}}

        </div>

        <div class="conatiner-fluid content-inner ">
            @yield('content')
        </div>

    </main>
    <!-- Wrapper End-->

    @yield('modal')

    <script src="{{ asset('assets/js/core/libs.min.js') }}"></script>
    <script src="{{ asset('assets/js/core/external.min.js') }}"></script>
    <script src="{{ asset('assets/js/hope-ui.js') }}" defer></script>

    <script src="{{ asset('jquery-3.6.1.min.js') }}"></script>

    <script src="{{ asset('assets/js/sweetalert/sweetalert2@11.js') }}"></script>
    
	{{-- <script src="{{ asset('assets/js/jquery-validation/jquery-validate.min.js') }}"></script> --}}
	{{-- <script src="{{ asset('assets/js/jquery-validation/additional-methods.js') }}"></script> --}}
	<script src="https://cdn.jsdelivr.net/jquery.validation/1.16.0/jquery.validate.min.js"></script>
	<script src="https://cdn.jsdelivr.net/jquery.validation/1.16.0/additional-methods.min.js"></script>
    
    <script src="{{ asset('assets/js/DataTables/DataTables-1.12.1/js/jquery.dataTables.min.js') }}"></script>
    <script src="{{ asset('assets/js/DataTables/DataTables-1.12.1/js/dataTables.bootstrap5.min.js') }}"></script>
    <script src="{{ asset('assets/js/active-sidebar.js') }}?v=1.0.0"></script>
    <script src="https://code.jquery.com/ui/1.13.2/jquery-ui.js"></script>

    @yield('script')

    @include('layouts.foot')
  </body>
</html>