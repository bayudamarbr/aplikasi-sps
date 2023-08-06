@extends('layouts.main')

@section('container')

  @if(session('success'))
    <div class="alert alert-success">
        {{ session('success') }}
    </div>
  @endif

  <section data-aos="fade-down" data-aos-delay="50" class="py-4 py-xl-5">
    <!-- Card with an image on left -->
    <div class="card mb-3">
      <div class="row g-0">
        <div class="col-md-4">
          <img src="assets/img/pici11.jpg" class="img-fluid rounded-start" alt="...">
        </div>
        <div class="col-md-8">
          <div class="card-body">
            <h5 class="card-title">Pickup Sampah</h5>
            <p class="card-text">Kami berkomitmen dan bertanggung jawab memastikan sampah Anda diangkut dan didaur ulang secara optimal oleh tim kami. pengangkutan sampah memerhatikan beberapa ketentuan dan persyaratan yang perlu dipenuhi oleh pengguna.</p>
            <a href="/data_sampah" type="button" class="btn btn-primary">Lets Pickup!</a>
          </div>
        </div>
      </div>
    </div><!-- End Card with an image on left -->
  </section>

  <section data-aos="fade-down" data-aos-delay="50" class="py-4 py-xl-5">
    <div class="card mb-3">
      <div class="row g-0">
        <div class="col-md-8">
          <div class="card-body">
            <h5 class="card-title">Jenis Kategori Sampah</h5>
            <p class="card-text">Bingung sampah kamu masuk kategori mana?</p><br><br>
            <a href="/sampah" type="button" class="btn btn-primary">Lihat disini!</a>
          </div>
        </div>
        <div class="col-md-4">
          <img src="assets/img/pici14.jpg" class="img-fluid rounded-start" alt="...">
        </div>
      </div>
    </div><!-- End Card with an image on left -->
  </section>

  <section data-aos="fade-down" data-aos-delay="50" class="py-4 py-xl-5">
    <div class="card">
      <div class="card-body">
        <h5 class="card-title text-center">Rating and Reviews</h5>
  
        <!-- Carousel with rating and review -->
        <div id="carouselExampleIndicators" class="carousel slide" data-bs-ride="carousel">
          <div class="carousel-inner">
            @foreach ($ratingReviews as $key => $ratingReview)
              <div class="carousel-item {{ $key === 0 ? 'active' : '' }}">
                <div class="row">
                  <div class="col-md-6 offset-md-3">
                    <div class="text-center">
                      <h5>{{ $ratingReview->user->name }}</h5>
                      <div class="rating">
                        @for ($i = 1; $i <= $ratingReview->rating; $i++)
                          <span class="fa fa-star checked"></span>
                        @endfor
                        @for ($i = $ratingReview->rating + 1; $i <= 5; $i++)
                          <span class="fa fa-star"></span>
                        @endfor
                      </div>
                      <p>{{ $ratingReview->review }}</p>
                    </div>
                  </div>
                </div>
              </div>
            @endforeach
          </div>
  
          <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide="prev">
            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
            <span class="visually-hidden">Previous</span>
          </button>
          <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide="next">
            <span class="carousel-control-next-icon" aria-hidden="true"></span>
            <span class="visually-hidden">Next</span>
          </button>
  
        </div><!-- End Carousel with rating and review -->
      </div>
    </div>
  </section>

@endsection
