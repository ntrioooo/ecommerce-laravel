@extends('dashboard.layouts.main')

@section('container')
    <div class="container">
        <a href="/dashboard/shops" class="btn btn-success mt-5"><span data-feather="arrow-left"></span> Back</a>
        <div class="row mt-3">
            <div class="col-md-6">
                <div class="card mb-3">
                    <div class="row g-0">
                      <div class="col-md-6">
                        <img src="https://source.unsplash.com/1200x800?{{ $shop->nama_produk }}" class="img-fluid rounded-start" alt="{{ $shop->nama_produk }}">
                      </div>
                      <div class="col-md-6">
                        <div class="card-body">
                          <h5 class="card-title fs-3">{{ $shop->nama_produk }}</h5>
                          <br>
                          <p class="card-text fs-5">{{ $shop->kategori->nama_kategori }}</p>
                          <br>
                          <p class="card-text text-primary fw-bold fs-5">Rp.{{ $shop->harga }}</p>
                        </div>
                      </div>
                    </div>
                </div>
                <a href="/dashboard/shops/{{ $shop->id }}/edit" class="btn btn-warning"><span data-feather="edit"></span> Edit</a>
                <form action="/dashboard/shops/{{ $shop->id }}" method="POST" class="d-inline">
                    @method('delete')
                    @csrf
                    <button class="btn btn-danger" onclick="return confirm('Are you sure?')">
                      <span data-feather="x-circle"></span> Delete
                    </button>
                </form>
            </div>
        </div>
    </div> 
@endsection