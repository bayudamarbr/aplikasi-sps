<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">

  <title>SPS | {{ $title }} </title>

  <meta content="" name="description">
  <meta content="" name="keywords">


  <!-- Google Fonts -->
  <link href="{{ asset('https://fonts.gstatic.com') }}" rel="preconnect">
  <link href="{{ asset('https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i|Nunito:300,300i,400,400i,600,600i,700,700i|Poppins:300,300i,400,400i,500,500i,600,600i,700,700i') }}" rel="stylesheet">

  <!-- Vendor CSS Files -->
  <link href="{{ asset('assets/vendor/bootstrap/css/bootstrap.min.css') }}" rel="stylesheet">
  <link href="{{ asset('assets/vendor/bootstrap-icons/bootstrap-icons.css') }}" rel="stylesheet">
  <link href="{{ asset('assets/vendor/boxicons/css/boxicons.min.css') }}" rel="stylesheet">
  <link href="{{ asset('assets/vendor/quill/quill.snow.css') }}" rel="stylesheet">
  <link href="{{ asset('assets/vendor/quill/quill.bubble.css') }}" rel="stylesheet">
  <link href="{{ asset('assets/vendor/remixicon/remixicon.css') }}" rel="stylesheet">
  <link href="{{ asset('assets/vendor/simple-datatables/style.css') }}" rel="stylesheet">

  <!-- Template Main CSS File -->
  <link href="{{ asset('assets/css/dashboard.css') }}" rel="stylesheet">

</head>

<body style="background-color:#ffffff;">

  <!-- ======= Header ======= -->
  <header id="header" class="header fixed-top d-flex align-items-center">

    <div class="d-flex align-items-center justify-content-between">
        <a href="homepage" class="logo d-flex align-items-center">
          <img src="{{ asset('assets/img/logo.png') }}" alt="">
          <span class="d-none d-lg-block">SPS</span>
        </a>
        <i class="bi bi-list toggle-sidebar-btn"></i>
      </div><!-- End Logo -->
      
      



    <nav class="header-nav ms-auto">
      <ul class="d-flex align-items-center">

        <li class="nav-item d-block d-lg-none">
          <a class="nav-link nav-icon search-bar-toggle " href="#">
            <i class="bi bi-search"></i>
          </a>
        </li><!-- End Search Icon-->

        @auth
        <li class="pagetitle pe-5">
            <h2>Hello, {{ auth()->user()->name }}</h2> 
        <li>
            @else
            <li class="pagetitle pe-5">
                <h2>Hello, Welcome to SPS</h2> 
            <li>
        @endauth



      </ul>
    </nav><!-- End Icons Navigation -->

  </header><!-- End Header -->

  <!-- ======= Sidebar ======= -->
  <aside id="sidebar" class="sidebar">

    <ul class="sidebar-nav" id="sidebar-nav">

      <li class="nav-item">
        <a class="nav-link collapsed">
          <i class="bi bi-grid"></i>
          <span>Dashboard</span>
        </a>
      </li><!-- End Dashboard Nav -->
      @auth
      <li class="nav-item">
        <a class="nav-link collapsed" href="{{ route('cservice') }}">
          <i class="bi bi-envelope"></i>
          <span>Contact</span>
        </a>
      </li><!-- End Contact Page Nav -->

      <li class="nav-item">
        <a class="nav-link collapsed" href="{{ route('about') }}">
          <i class="bi bi-people"></i>
          <span>About Us</span>
        </a>
      </li><!-- End Contact Page Nav -->

      <li class="nav-heading">Akun</li>


      <li class="nav-item">
        <form class="nav-link collapsed" action="/logout" method="post">
            @csrf
            <button type="submit" class="dropdown-item"><i class="bi bi-box-arrow-left"></i>Logout</button>
        </form>
      </li><!-- End Logout Page Nav -->
      @else
      <li class="nav-item">
        <a class="nav-link collapsed" href="/login">
            <i class="bi bi-box-arrow-right"></i>
            <span>Login</span>
      </li><!-- End Login Page Nav -->
      @endauth


    </ul>

  </aside><!-- End Sidebar-->

  <main id="main" class="main">
    
    @yield('container')



    <section style="height: 582px;">
        <div data-bss-parallax-bg="true" style="height: 600px;">
            <div class="container h-100" style="width: 100%;max-width: 100%;border-radius: 0px;background: url(&quot;assets/img/vuwu.jpg&quot;) center / cover no-repeat, #714747;">
                <div class="row h-100">
                    <div class="col-md-6 col-xl-6 col-xxl-7 text-center text-md-start d-flex d-sm-flex d-md-flex justify-content-center align-items-center justify-content-md-start align-items-md-center justify-content-xl-center" style="background: rgba(0,0,0,0.51);border-radius: 5px;">
                        <div class="pagetitle" style="max-width: 350px;">
                            <h1 class="text-uppercase fw-bold" style=" font-size: 40px; position: static;display: block;color: rgb(255,255,255);">Sistem Pengangkut sampah</h1>
                            <h2 class="my-3" style="width: 499px;height: 58px;color: rgb(255,255,255);font-size: 20px;">Solusi sampah menumpukmu!</h2><a class="btn btn-primary" role="button" style="border-radius: 11px;width: 111px;height: 35px;font-weight: bold;font-size: 13px;" href="/homepage">MULAI!</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

  </main><!-- End #main -->

  <!-- ======= Footer ======= -->
  <footer id="footer" class="footer">
    <div class="copyright">
      &copy; Copyright <strong><span>SPS</span></strong>. Sistem Pickup Sampah
    </div>
    <div class="credits">
      <!-- All the links in the footer should remain intact. -->
      <!-- You can delete the links only if you purchased the pro version. -->
      <!-- Licensing information: https://bootstrapmade.com/license/ -->
      <!-- Purchase the pro version with working PHP/AJAX contact form: https://bootstrapmade.com/nice-admin-bootstrap-admin-html-template/ -->
      SPS | 2023
    </div>
  </footer><!-- End Footer -->

  <a href="#" class="back-to-top d-flex align-items-center justify-content-center"><i class="bi bi-arrow-up-short"></i></a>

  <!-- Vendor JS Files -->
  <script src="assets/vendor/apexcharts/apexcharts.min.js"></script>
  <script src="assets/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
  <script src="assets/vendor/chart.js/chart.umd.js"></script>
  <script src="assets/vendor/echarts/echarts.min.js"></script>
  <script src="assets/vendor/quill/quill.min.js"></script>
  <script src="assets/vendor/simple-datatables/simple-datatables.js"></script>
  <script src="assets/vendor/tinymce/tinymce.min.js"></script>
  <script src="assets/vendor/php-email-form/validate.js"></script>

  <!-- Template Main JS File -->
  <script src="{{ asset('assets/js/main.js') }}"></script>

</body>

</html>