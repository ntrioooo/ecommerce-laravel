@extends('layouts.main')

@section('container')
    <div class="container">
        <div class="row mt-5">
            @foreach ($shops as $shop)
                <div class="card mb-3">
                    <div class="row g-0">
                    <div class="col-md-4">
                        <img src="https://source.unsplash.com/400x300?{{ $shop->nama_produk }}" class="img-fluid rounded-start" alt="{{ $shop->nama_produk }}">
                    </div>
                    <div class="col-md-8">
                        <div class="card-body">
                        <h5 class="card-title">{{ $shop->nama_produk }}</h5>
                        <p>Jenis {{ $shop->kategori->nama_kategori }}</p>
                        <p class="text-muted">Kualitas terjamin</p>
                        <p class="text-muted">Barang bagus</p>
                        <p class="card-text fw-bold">Rp.{{ $shop->harga }}</p>
                        </div>
                    </div>
                    </div>
                </div>
            @endforeach
        </div>
        <div class="row mt-5">
            <div class="col align-self-center">
                @if (session()->has('success'))
                <div class="alert alert-success text-center" role="alert">
                    {{ session('success') }}
                </div>
            @endif
            </div>
        </div>
        <form method="POST" action="/shops/order/{{ $shops }}" class="row g-2" enctype="multipart/form-data">
            @csrf
            <h3 class="text-center mt-2">Detail Pemesanan</h3>
            <div class="col-md-6">
                <div class="mb-3">
                    {{-- <label for="nama_lengkap" class="form-label">Nama Lengkap</label> --}}
                    <select class="form-select" name="user_id" hidden>
                        @foreach ($users as $name)
                            <option value="{{ $name->id }}">{{ $name->id }}</option>
                        @endforeach
                    </select>
                </div>
                <div class="mb-3">
                    {{-- <label for="nama_produk" class="form-label">Nama Produk</label> --}}
                    <select class="form-select" name="nama_produk_id" hidden>
                        @foreach ($shops as $shops_id)
                            <option value="{{ $shops_id->id }}">{{ $shops_id->id }}</option>
                        @endforeach
                    </select>
                </div>
                <div class="mb-3">
                    <label for="kelurahan" class="form-label">Kelurahan</label>
                    <input class="form-control" @error('kelurahan') is-invalid @enderror id="kelurahan" name="kelurahan" required autofocus value="{{ old('kelurahan') }}">
                </div>
                <div class="mb-3">
                    <label for="kecamatan" class="form-label">Kecamatan</label>
                    <input class="form-control" @error('kecamatan') is-invalid @enderror id="kecamatan" name="kecamatan" required autofocus value="{{ old('kecamatan') }}">
                </div>
                <div class="mb-3">
                    <label for="alamat" class="form-label">Alamat Lengkap</label>
                    <textarea class="form-control" @error('alamat') is-invalid @enderror id="alamat" name="alamat" required autofocus value="{{ old('alamat') }}">
                    </textarea>
                </div>
            </div>
            <div class="col-md-4">
                <label for="size" class="form-label mt-3">Select size :</label>
                <select class="form-select" name="size">
                    <option selected>S</option>
                    <option value="M">M</option>
                    <option value="L">L</option>
                    <option value="XL">XL</option>
                </select>
                <div class="mt-3">
                    <label for="no_hp" class="form-label">Nomor Whatsapp</label>
                    <input class="form-control" @error('no_hp') is-invalid @enderror id="no_hp" name="no_hp" required autofocus value="{{ old('no_hp') }}">
                </div>
                <button type="submit" class="btn btn-primary mt-5">Buy Now</button>
            </div>
        </form>
        <footer>
            <div class="text-footer mt-4">
                <p class="text-center">2022 Copyright NTRIO - All rights reserved - Made in love</p>
            </div>
        </footer>
    </div>
    
@endsection

