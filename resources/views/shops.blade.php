@extends('layouts.main')

@section('container')
    <div class="container mt-5">
        <div class="text-content">
            <h2 class="text-center fw-bold">{{ $title }}</h2>
        </div>
    @if ($shops->count())
        <div class="row mt-5">
            @foreach ($shops as $shop)
                <div class="col-md-4 mt-3">
                    <div class="card">
                        <img src="https://source.unsplash.com/500x500?{{ $shop->nama_produk }}" class="card-img-top" alt="{{ $shop->title }}">
                        <div class="card-body">
                        <h5 class="card-title">{{ $shop->nama_produk }}</h5>
                        <p>{{ $shop->kategori->nama_kategori }}</p>
                        <p class="card-text">Rp.{{ $shop->harga }}</p>
                        <a href="shops/order/{{ $shop->id }}" class="btn btn-primary">Pesan</a>
                        </div>
                    </div>
                </div>
            @endforeach
        </div>
        
    @else
        <p class="text-center fs-4">Tidak ada barang</p>
    @endif
    <div class="d-flex justify-content-center mt-3">
        {{ $shops->links() }}
    </div>

        <footer>
            <div class="text-footer mt-4">
                <p class="text-center">2022 Copyright NTRIO - All rights reserved - Made in love</p>
            </div>
        </footer>
    
        
    </div>
@endsection