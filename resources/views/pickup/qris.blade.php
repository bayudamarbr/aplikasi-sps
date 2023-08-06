<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, shrink-to-fit=no">
    <title>SPS | {{ $title }}</title>
    <link rel="stylesheet" href="{{ asset('assets/bootstrap/css/bootstrap.min.css') }}">
    <link rel="stylesheet" href="{{ asset('https://fonts.googleapis.com/css?family=Montserrat&amp;display=swap') }}">
    <link rel="stylesheet" href="{{ asset('assets/css/swiper-icons.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/css/Hero-Carousel-images.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/css/Lightbox-Gallery-baguetteBox.min.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/css/Navbar-Right-Links-Dark-icons.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/css/Pricing-Clean-badges.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/css/Simple-Slider-swiper-bundle.min.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/css/Simple-Slider.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/css/styles.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/css/about.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/css/uploadimg.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/css/dashboard.css') }}">
    <style>
    body {
      background-color: #012970; /* Ganti dengan kode warna yang Anda inginkan */
    }
  </style>
</head>

<body styles= >
                  <!-- ======= Header ======= -->
  


                  <div class="container" style="height: 647px;">
                    <div class="text-center">
                        <img src="{{ asset('assets/img/qris.jpeg') }}" style="width: 171px;">
                        <div class="container">
                            <form action="{{ '/qris/'. $RecordId }}" method="post" enctype="multipart/form-data">
                                @csrf
                                <div class="img-area" id="imageArea" style="margin-bottom: 10px;">
                                    <i class="bx bxs-cloud-upload icon"></i>
                                    <h3>Upload Image</h3>
                                    <p>Image size must be less than <span>2MB</span></p>
                                </div>
                                <input type="file" accept="image/*" name="gambar" id="InputImage" onchange="previewImage(event)"/><br><br>
 
                                <button type="submit" class="btn btn-primary rounded-pill margin">SUBMIT IMAGE</button>
                            </form>
                        </div>
                    </div>

                



<script src="{{ asset('assets/bootstrap/js/bootstrap.min.js') }}"></script>
    <script src="{{ asset('assets/js/bs-init.js') }}"></script>
    <script src="{{ asset('assets/js/Lightbox-Gallery-baguetteBox.min.js') }}"></script>
    <script src="{{ asset('assets/js/Lightbox-Gallery.js') }}"></script>
    <script src="{{ asset('assets/js/Simple-Slider-swiper-bundle.min.js') }}"></script>
    <script src="{{ asset('assets/js/Simple-Slider.js') }}"></script>
    <script src="{{ asset('assets/js/script.js') }}"></script>
    
</body>

</html>