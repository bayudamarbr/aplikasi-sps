@extends('layouts.main')

@section('container')

<div class="container py-4 py-xl-5">
    <div class="row mb-5">
        <div class="col-md-8 col-xl-6 text-center mx-auto">
            <div class="pagetitle">
            <h1>Tentukan metode pembayaran yang diinginkan</h1></div>
        </div>
    </div>
    <div class="row gy-4 row-cols-1 row-cols-md-2 row-cols-xl-3">
        <div class="col" style="position: relative;display: inline-block;margin-left: -0.01px;">
            <div class="card h-100">
                <div class="card-body d-flex flex-column justify-content-between p-4">
                    <div class="text-center">
                        <h6 class="text-uppercase text-muted">bayar di tempat</h6>
                        <div class="d-flex justify-content-center">
                            <img src="{{ asset('assets/img/cod1.jpg') }}" style="width: 175px;">
                        </div>
                        <ul class="list-inline">
                            <br>
                            <li class="list-inline-item d-flex mb-2"><span style="margin-top: 20px;">Siapin uang pas ya, biar gak perlu ribet kembalian</span></li>
                            <li class="list-inline-item d-flex mb-2"></li>
                            <li class="list-inline-item d-flex mb-2"></li>
                        </ul>
                    </div>
            
                    <form action="{{ '/pembayaran/' . $RecordId }}" method="post" name="cod">
                        @csrf
                        <input type="hidden" name="pembayaran" value="Bayar Di Tempat">
                        <button class="btn btn-primary d-block w-100" type="submit">Pilih</button>
                    </form>
                    
                    
                </div>
            </div>
        </div>
        <div class="pagetitle">
            <div class="pricing">
              <div class="pricing-item">
                <h1 class="pricing-price">Rp. 20.000</h1>
                <p class="pricing-description">Pickup Sekali</p>
              </div>
              <div class="pricing-item">
                <h1 class="pricing-price">Rp. 50.000</h1>
                <p class="pricing-description">Pickup Sebulan</p>
              </div>
            </div>
          </div>
          
        
        <div class="col-xl-4 offset-xl-4" style="position: relative;display: inline-block;margin-left: -0.01px;">
            <div class="card h-100">
                <div class="card-body d-flex flex-column justify-content-between p-4">
                    <div style="text-align: center;">
                        <h6 class="text-uppercase text-muted">Qris</h6>
                        <div style="display: flex; justify-content: center;">
                          <img src="{{ asset('assets/img/qris.jpeg') }}" style="width: 130px;">
                        </div>
                        <ul class="list-unstyled">
                          <li class="d-flex mb-2"></li>
                          <br>
                          <li class="d-flex mb-2"><span>Pakai E-wallet biar makin mudah dalam transaksi</span></li>
                        </ul>
                      </div>
                      
                    <form action="{{ '/pembayaran/' . $RecordId }}" method="post" name="qris">
                        @csrf
                        <input type="hidden" name="pembayaran" value="Qris">
                        <button class="btn btn-primary d-block w-100" type="submit">Pilih</button>
                    </form>
                    
                </div>
            </div>
        </div>
    </div>
</div>
<script src="assets/bootstrap/js/bootstrap.min.js"></script>
<script src="assets/js/bs-init.js"></script>
<script src="assets/js/Lightbox-Gallery-baguetteBox.min.js"></script>
<script src="assets/js/Lightbox-Gallery.js"></script>
<script src="assets/js/Simple-Slider-swiper-bundle.min.js"></script>
<script src="assets/js/Simple-Slider.js"></script>

@endsection