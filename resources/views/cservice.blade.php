@extends('layouts.main')

@section('container')
<section class="section contact">

  <div class="pagetitle">
    <h1>Contact</h1>
    <nav>
      <ol class="breadcrumb">
        <li class="breadcrumb-item">Contact and Location Information</li>
      </ol>
    </nav>
  </div><!-- End Page Title -->

<div class="row gy-4">

    <div class="col-xl-6">

      <div class="row">
        <div class="col-lg-6">
          <div class="info-box card">
            <i class="bi bi-geo-alt"></i>
            <h3>Address</h3>
            <p>50229, Banaran, Sekaran,<br> Kec. Gn. Pati, Kota Semarang</p>
          </div>
        </div>
        <div class="col-lg-6">
          <div class="info-box card">
            <i class="bi bi-telephone"></i>
            <h3>Call / Whatsapp</h3>
            <p>+62 821 1542 5345<br>+62 812 8186 5761</p>
          </div>
        </div>
        <div class="col-lg-6">
          <div class="info-box card">
            <i class="bi bi-envelope"></i>
            <h3>Email Us</h3>
            <p>sps@gmail.com<br>bayudamar802@gmail.com</p>
          </div>
        </div>
        <div class="col-lg-6">
          <div class="info-box card">
              <i class="bi bi-instagram"></i>
              <h3>Instagram</h3>
              <p>@sps.id<br>@bayudamarbr</p>

            
          </div>
        </div>
      </div>

    </div>

    
    <div class="col-xl-6">
      <div class="card p-4">
        @if(session('success'))
        <div class="alert alert-success d-flex align-items-center justify-content-between">
            <div>
                {{ session('success') }}
            </div>
            <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
        </div>
        @endif
        @if ($errors && $errors->any())
            <div class="alert alert-danger d-flex align-items-center justify-content-between">
                @foreach ($errors->all() as $error)
                  <li>{{ $error }}</li>
                @endforeach
              <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
            </div>
        @endif
    
    
        <form action="{{ route('cservice.store') }}" method="post">
      @csrf
      <div class="row gy-4">

        <div class="col-md-6">
          <input type="text" name="name" class="form-control" placeholder="Your Name" required>
        </div>

        <div class="col-md-6 ">
          <input type="email" class="form-control" name="email" placeholder="Your Email" required>
        </div>

        <div class="col-md-12">
          <input type="text" class="form-control" name="subject" placeholder="Subject" required>
        </div>

        <div class="col-md-12">
          <textarea class="form-control" name="message" rows="6" placeholder="Message" required></textarea>
        </div>

        <div class="col-md-12 text-center php-email-form">
          <h6 class="pagetitle text-left">Note : Balasan akan dikirim melalui email</h6>
          <button type="submit">Send Message</button>
        </div>

      </div>
    </form>
        
      </div>
    </div>
    

    </div>
    
</section>


@endsection