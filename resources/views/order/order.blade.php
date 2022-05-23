@extends('layouts.main')

@section('container')
    <div class="container">
        <form method="POST" action="/shops/order/{{ $shops }}" class="row g-2" enctype="multipart/form-data">
            @csrf
            @if (session()->has('success'))
                <div class="alert alert-success col-lg-8" role="alert">
                    {{ session('success') }}
                </div>
            @endif
            <h3 class="text-center mt-5">Detail Pemesanan</h3>
            <div class="col-md-6">
                <div class="mb-3">
                    <label for="nama_lengkap" class="form-label">Nama Lengkap</label>
                    <select class="form-select" name="user_id">
                        @foreach ($users as $name)
                            <option value="{{ $name->id }}">{{ $name->id }}</option>
                        @endforeach
                    </select>
                </div>
                <div class="mb-3">
                    <label for="nama_produk" class="form-label">Nama Produk</label>
                    <select class="form-select" name="nama_produk_id">
                        @foreach ($shops as $shops_id)
                            <option value="{{ $shops_id->id }}">{{ $shops_id->id }}</option>
                        @endforeach
                    </select>
                </div>
                <div class="mb-3">
                    <label for="alamat" class="form-label">Alamat Lengkap</label>
                    <textarea class="form-control" @error('alamat') is-invalid @enderror id="alamat" name="alamat" required autofocus value="{{ old('alamat') }}">
                    @error('alamat')
                    <div class="invalid-feedback">
                        {{ $message }}
                    </div>
                    @enderror
                    </textarea>
                </div>
            </div>
            <div class="col-md-4">
                <label for="size" class="form-label">Select size :</label>
                <select class="form-select" name="size">
                    <option selected>S</option>
                    <option value="1">M</option>
                    <option value="2">L</option>
                    <option value="3">XL</option>
                </select>
                <button type="submit" class="btn btn-primary mt-5">Buy Now</button>
            </div>
        </form>
    </div>
    
@endsection

