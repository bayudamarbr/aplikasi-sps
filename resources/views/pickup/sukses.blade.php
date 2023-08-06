@extends('layouts.main')

@section('container')
<section class="section faq">
    <div class="row">
    <div class="col-lg-6">
          <div class="card">
            <div class="card-body pt-3">
            <div class="row justify-content-center">
                <div class="col-md-12 text-center">
                    <div class="pagetitle">
                        <h1 style="text-align: center; font-size: 20px;">PICKUP SUKSES!<br><br></h1>
                   </div>
                    <img src="{{ asset('assets/img/checked%20(1).png') }}" style="width: 220px;">
                        <div class="pagetitle">
                             <h1 style="text-align: center; font-size: 20px;">Pickup anda sedang dalam antrian<br>mohon tunggu dan siapkan uang pas ya jika COD!<br><br></h1>
                        </div>
                    </div>
                </div>
          </div>
      </div>
    </div>


<div class="col-lg-6">
    <div class="card">
      <div class="card-body">
        <h5 class="card-title">Rating and Review</h5>
            <!-- Form Rating dan Ulasan -->
            <div class="rating-form">
               <form action="{{ route('rating.review.store') }}" method="post">
                    @csrf
                    
                    <div class="form-group" style="display: none;">
                        <label for="user_id">User ID:</label>
                        <input type="hidden" name="user_id" id="user_id" value="{{ $user->id }}">
                    </div>

                    <div class="form-group">
                        <label for="rating">Rating:</label>
                        <div class="stars">
                            <input class="star star-5" id="star-5" type="radio" name="star" value="5"/>
                            <label class="star star-5" for="star-5"></label>
                          
                            <input class="star star-4" id="star-4" type="radio" name="star" value="4"/>
                            <label class="star star-4" for="star-4"></label>
                          
                            <input class="star star-3" id="star-3" type="radio" name="star" value="3"/>
                            <label class="star star-3" for="star-3"></label>
                          
                            <input class="star star-2" id="star-2" type="radio" name="star" value="2"/>
                            <label class="star star-2" for="star-2"></label>
                          
                            <input class="star star-1" id="star-1" type="radio" name="star" value="1"/>
                            <label class="star star-1" for="star-1"></label>
                        </div>
                    </div>
                
                    <div class="form-group">
                        <label for="review">Review:</label>
                        <textarea name="review" id="review" rows="5" class="form-control"></textarea>
                    </div>
                
                    <button type="submit" class="btn btn-primary">Submit</button>
                </form>
                
            </div>
            <!-- End Form Rating dan Ulasan -->
        </div>
    </div>
</div>
    </div>
</section>

@endsection
