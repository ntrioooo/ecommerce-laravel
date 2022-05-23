@extends('layouts.main')

@section('container')

<div class="container mt-5">
    <div class="text-content">
        <h2 class="text-center fw-bold">{{ $title }}</h2>
    </div>
    <div class="row justify-content-center">
      <div class="col-md-4 mt-3">
        <div class="card">
            <img src="https://source.unsplash.com/500x500?{{ $shop->nama_produk }}" class="card-img-top" alt="{{ $shop->title }}">
            <div class="card-body">
            <h5 class="card-title">{{ $shop->nama_produk }}</h5>
            <p>{{ $shop->kategori->nama_kategori }}</p>
            <p class="text-muted">Kualitas terjamin</p>
            <p class="text-muted">Barang bagus</p>
            <p class="card-text fw-bold">Rp.{{ $shop->harga }}</p>
            </div>
            <a href="/shops/order/{{ $shop->id }}" class="btn btn-primary mt-3">Order</a>
        </div>
      </div>
    </div>
</div>  
@endsection