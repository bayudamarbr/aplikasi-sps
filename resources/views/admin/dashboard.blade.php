    <!DOCTYPE html>
    <html lang="en">
    
    <head>
      <meta charset="utf-8">
      <meta content="width=device-width, initial-scale=1.0" name="viewport">
    
      <title>SPS | Dashboard Admin</title>
    
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
    
    <body>
    
      <!-- ======= Header ======= -->
      <header id="header" class="header fixed-top d-flex align-items-center">
    
        <div class="d-flex align-items-center justify-content-between">
          <a href="dashboard" class="logo d-flex align-items-center">
            <img src="{{ asset('assets/img/logo2.png') }}" alt="">
            <span class="d-none d-lg-block">Dashboard Admin</span>
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
    
    
            <li class="pagetitle pe-5 mb-1 mt-1">
                
                 <h2>Welcome back, {{ auth()->user()->name }}<h2>
        
              <ul class="dropdown-menu" aria-labelledby="navbarDropdown">  
              <li>
    
    
    
          </ul>
        </nav><!-- End Icons Navigation -->
    
      </header><!-- End Header -->
    
      <!-- ======= Sidebar ======= -->
      <aside id="sidebar" class="sidebar">
    
        <ul class="sidebar-nav" id="sidebar-nav">
    
          <li class="nav-item">
            <a class="nav-link collapsed" href="/admin/dashboard">
              <i class="bi bi-grid"></i>
              <span>Dashboard</span>
            </a>
          </li><!-- End Dashboard Nav -->
    
          <li class="nav-item">
            <a class="nav-link collapsed" href="/admin/message">
              <i class="bx bx-envelope"></i>
              <span>Message</span>
            </a>
          </li><!-- End Dashboard Nav -->
          
    
    
          <li class="nav-item">
            <form class="nav-link collapsed" action="/logout" method="post">
                @csrf
                <button type="submit" class="dropdown-item"><i class="bi bi-box-arrow-left"></i>Logout</button>
            </form>
            
          </li><!-- End Logout Page Nav -->
    
    
        </ul>
    
      </aside><!-- End Sidebar-->
    
      <main id="main" class="main">

        <div class="pagetitle">
          <h1>Data Pickup</h1>
          <nav>
            <ol class="breadcrumb">
              <li class="breadcrumb-item">Pickup</li>
              <li class="breadcrumb-item active">Tabel Data</li>
            </ol>
          </nav>
        </div><!-- End Page Title -->
      
        <section class="section">
          <div class="row">
            <div class="col-lg-12">
      
              <div class="card">
                <div class="card-body">
                  <h5 class="card-title">Datatables</h5>
                  <!-- Table with stripped rows -->
                  <div class="table-responsive">
                    <table class="table datatable">
                      <thead>
                        <tr>
                          <th scope="col">Pickup Id</th>
                          <th scope="col">User Id</th>
                          <th scope="col">Kategori Sampah</th>
                          <th scope="col">Jenis</th>
                          <th scope="col">Alamat</th>
                          <th scope="col">Status</th>
                          <th scope="col">Catatan</th>
                          <th scope="col">Pembayaran</th>
                          <th scope="col">Bukti Pembayaran</th>
                          <th scope="col">Action</th>
                        </tr>
                      </thead>
                      <tbody>
                        @foreach($pickups as $pickup)
                        <tr>
                          <td scope="row">{{ $pickup->id }}</td>
                          <td>{{ $pickup->user_id }}</td>
                          <td>{{ $pickup->kategori_sampah }}</td>
                          <td>{{ $pickup->jenis_pickup }}</td>
                          <td style="white-space: nowrap;">{{ $pickup->alamat }}</td>
                          <td>{{ $pickup->status }}</td>
                          <td style="white-space: nowrap;">{{ $pickup->catatan }}</td>
                          <td>{{ $pickup->pembayaran }}</td>
                          <td style="white-space: nowrap;">{{ $pickup->bukti_pembayaran }}</td>
                          <td>
                            <div class="action-buttons">
                              <a href="{{ route('pickup.edit', ['id' => $pickup->id]) }}" class="btn-edit">Edit</a>
                              <form action="{{ route('pickup.destroy', ['id' => $pickup->id]) }}" method="post" class="form-delete">
                                @csrf
                                @method('DELETE')
                                <button type="submit" class="btn-delete">Delete</button>
                              </form>
                            </div>
                          </td>
                        </tr>
                        @endforeach
                      </tbody>
                    </table>
                  </div>
                  <!-- End Table with stripped rows -->
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
          SPS | Admin
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

