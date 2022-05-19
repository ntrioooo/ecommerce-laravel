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
                        <img src="https://source.unsplash.com/1200x400?{{ $shop->nama_produk }}" class="card-img-top" alt="{{ $shop->title }}">
                        <div class="card-body">
                        <h5 class="card-title">{{ $shop->nama_produk }}</h5>
                        <p class="card-text">{{ $shop->kategori->nama_kategori }}</p>
                        <p class="card-text">{{ $shop->harga }}</p>
                        <a href="/order/" class="btn btn-primary">Pesan</a>
                        </div>
                    </div>
                </div>
            @endforeach
        </div>

    @else
        <p class="text-center fs-4">Tidak ada barang</p>
    @endif
        
    </div>
@endsection