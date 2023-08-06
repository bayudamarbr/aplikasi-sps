@extends('layouts.main')

@section('container')



<div class="pagetitle">
    <h1>Kategori Sampah</h1>
    <nav>
      <ol class="breadcrumb">
        <li class="breadcrumb-item">Jenis</li>
        <li class="breadcrumb-item active">Jenis Sampah</li>
      </ol>
    </nav>
  </div><!-- End Page Title -->

  <div class="card">
    <div class="card-body">
      <h5 class="card-title">Sampah Organik</h5>
      <p>Merupakan jenis sampah yang terdiri dari bahan-bahan yang berasal dari makhluk hidup, seperti sisa-sisa makanan, dedaunan, ranting, kulit buah, dan bahan organik lainnya. Sampah organik umumnya mudah terurai dan mengandung banyak bahan organik yang dapat membusuk atau terdekomposisi secara alami oleh mikroorganisme seperti bakteri dan jamur.</p>
      <div class="row gx-2 gy-2 row-cols-1 row-cols-md-2 row-cols-xl-3" data-bss-baguettebox="">
        <div class="col" style="background: url(&quot;assets/img/Foto%20daun%20kering.jpeg&quot;) center / cover no-repeat;">
            <div></div>
        </div>
        <div class="col" style="background: url(&quot;assets/img/kulit%20buah.png&quot;) center / cover no-repeat;">
            <div></div>
        </div>
        <div class="col" style="height: 200px;background: url(&quot;assets/img/sampah%20rumah%20tangga.jpg&quot;) center / cover no-repeat;">
            <div></div>
        </div>
    </div>



    </div>
  

    </div>
  <div class="card">
    <div class="card-body">
      <h5 class="card-title">Sampah Anorganik</h5>
      <p>Jenis sampah yang terdiri dari bahan-bahan yang tidak berasal dari makhluk hidup atau tidak dapat terurai secara alami oleh proses biologis. Sampah anorganik biasanya terdiri dari bahan-bahan seperti plastik, kaca, logam, kertas, kain sintetis, dan bahan kimia.</p>
    <div class="row gx-2 gy-2 row-cols-1 row-cols-md-2 row-cols-xl-3" data-bss-baguettebox="">
        <div class="col" style="height: 198px;background: url(&quot;assets/img/sampah%20kerta.jpg&quot;) center / cover no-repeat;">
            <div></div>
        </div>
        <div class="col" style="background: url(&quot;assets/img/Sampah%20Gelas%20Kaca.jpeg&quot;) center / cover no-repeat;">
            <div></div>
        </div>
        <div class="col" style="background: url(&quot;assets/img/sampah%20botol.jpeg&quot;) center / cover no-repeat;">
            <div></div>
        </div>
    </div>



    </div>
  

    </div>
  <div class="card">
    <div class="card-body">
      <h5 class="card-title">Sampah B3</h5>
      <p>Sampah B3 (Bahan Berbahaya dan Beracun) merujuk pada jenis sampah yang mengandung bahan-bahan yang memiliki potensi bahaya bagi manusia dan lingkungan. Sampah B3 dapat terdiri dari berbagai bahan kimia atau zat-zat berbahaya, seperti logam berat, pestisida, bahan kimia industri, bahan radioaktif, limbah medis, baterai, cat, dan sebagainya.</p>
      <div class="row gx-2 gy-2 row-cols-1 row-cols-md-2 row-cols-xl-3" data-bss-baguettebox="">
        <div class="col" style="background: url(&quot;assets/img/lampu.jpg&quot;) center / cover no-repeat;">
            <div></div>
        </div>
        <div class="col" style="background: url(&quot;assets/img/b3.jpeg&quot;) center / cover no-repeat;">
            <div></div>
        </div>
        <div class="col" style="height: 200px;background: url(&quot;assets/img/baterai.jpeg&quot;);">
            <div></div>
        </div>
    </div>


    </div>
  

    </div>
  </div>
  
           
  
</div>



@endsection