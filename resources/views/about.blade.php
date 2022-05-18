@extends('layouts.main')

@section('container')
    <div class="container mt-5">
        <div class="text-content">
            <h2 class="text-center fw-bold">Tentang Kita</h2>
        </div>
        <div class="text-title mt-3">
            <p class="text-center">Sebuah perusahaan yang berjalan di bidang <br> teknologi dan sedang mengembangkan <br> website e-commerce dengan fokus produk <br> pada fashion</p>
        </div>
        <div class="text-content mt-5">
            <h2 class="text-center fw-bold">Team</h2>
        </div>
        <div class="card mx-auto mt-4" style="width: 18rem">
            <img src="images/{{ $image }}" class="card-img-top" alt="{{ $image }}">
            <div class="card-body">
              <h5 class="card-title text-center">Founder and Developer</h5>
              <p class="card-text text-center">Trio Nugroho</p>
            </div>
        </div>
    </div>
    <footer>
        <div class="text-footer mt-4">
            <p class="text-center">2022 Copyright NTRIO - All rights reserved - Made in love</p>
        </div>
    </footer>
@endsection