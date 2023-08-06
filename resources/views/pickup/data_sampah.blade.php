@extends('layouts.main')

@section('container')
<section class="py-4 py-xl-5">
    <div class="container">
        <div class="row d-flex justify-content-center">
            <div class="col-md-8 col-lg-6 col-xl-5 col-xxl-4">
                <div class="card mb-5 my-custom-card">
                    <div class="card-body p-sm-5">
                        <div class="pagetitle">
                            <h1 class="text-center mb-4">Masukan Data Sampah</h1>
                        </div>
                        <form action="data_sampah" method="post" name="data_sampah">
                            @csrf
                            <div class="form-group">
                                <label for="kategori_sampah">Kategori Sampah</label>
                                <select class="form-select my-custom-select" id="kategori_sampah" name="kategori_sampah">
                                    <option value="B3">B3</option>
                                    <option value="Organik">Organik</option>
                                    <option value="Anorganik">Anorganik</option>
                                </select>
                            </div>
                            <div class="form-group">
                                <label for="jenis_pickup">Jenis Pickup</label>
                                <select class="form-select my-custom-select" id="jenis_pickup" name="jenis_pickup">
                                    <option value="Pickup Sekali">Pickup Sekali</option>
                                    <option value="Pickup Sebulan (1x/minggu)">Pickup Sebulan (1x/minggu)</option>
                                </select>
                            </div>
                            <div class="form-group">
                                <label for="alamat">Masukan Alamat Anda</label>
                                <textarea class="form-control my-custom-textarea" id="alamat" name="alamat" rows="3" placeholder="Masukan Alamat" required></textarea>
                            </div>
                            <div class="form-group">
                                <label for="catatan">Catatan</label>
                                <textarea class="form-control my-custom-textarea" id="catatan" name="catatan" rows="3" placeholder="Opsional"></textarea>
                            </div>
                            <button class="btn btn-primary d-block w-100 my-custom-button" type="submit">Selanjutnya</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
@endsection
