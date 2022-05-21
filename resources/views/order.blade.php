@extends('layouts.main')

@section('container')

<div class="container mt-5">
    <div class="text-content">
        <h2 class="text-center fw-bold">{{ $title }}</h2>
    </div>

    <form class="row mt-5" method="POST" action="shops/order/{{ $shop->id }}" enctype="multipart/form-data">
        @csrf
        <div class="col-md-8">
            <div class="card mb-3">
                <div class="row g-0">
                  <div class="col-md-4">
                    <img src="https://source.unsplash.com/700x400?{{ $shop->nama_produk }}" class="img-fluid rounded-start" alt="...">
                  </div>
                  <div class="col-md-8">
                    <div class="card-body">
                      <h5 class="card-title">{{ $shop->nama_produk }}</h5>
                      <br>
                      <br>
                      <br>
                      <p class="card-text text-primary fw-bold">Rp.{{ $shop->harga }}</p>
                    </div>
                  </div>
                </div>
            </div>
        </div>
        <div class="col-md-4">
            <label for="size" class="form-label">Select size :</label>
            <select class="form-select" name="size_id">
                <option selected>S</option>
                <option value="1">M</option>
                <option value="2">L</option>
                <option value="3">XL</option>
            </select>
            <button type="submit" class="btn btn-primary mt-3">Buy Now</button>
        </div>
        <h3>Detail Pemesanan</h3>
        <div class="col-md-5">
          <div class="mb-3">
            <label for="username" class="form-label">Username</label>
            <input type="text" class="form-control @error('username') is-invalid @enderror" id="username" name="username" required disabled value="{{ $shop->user }}">
          </div>
          <div class="mb-3">
            <label for="nama_lengkap" class="form-label">Nama Lengkap</label>
            <input type="text" class="form-control @error('nama_lengkap') is-invalid @enderror" id="nama_lengkap" name="nama_lengkap" required autofocus value="{{ old('nama_lengkap') }}">
            @error('nama_lengkap')
              <div class="invalid-feedback">
                  {{ $message }}
              </div>
              @enderror
          </div>
          <div class="mb-3">
            <label for="no_hp" class="form-label">Nomor Whatsapp</label>
            <input type="number" class="form-control @error('no_hp') is-invalid @enderror" id="no_hp" name="no_hp" required autofocus value="{{ old('no_hp') }}">
            @error('no_hp')
              <div class="invalid-feedback">
                  {{ $message }}
              </div>
              @enderror
          </div>
        </div>
        <div class="col-md-3">
          <div class="mb-3">
            <label for="kecamatan" class="form-label">Kecamatan</label>
            <input type="text" class="form-control @error('kecamatan') is-invalid @enderror" id="kecamatan" name="kecamatan" required autofocus value="{{ old('kecamatan') }}">
            @error('kecamatan')
              <div class="invalid-feedback">
                  {{ $message }}
              </div>
              @enderror
          </div>
          <div class="mb-3">
            <label for="kelurahan" class="form-label">Kelurahan</label>
            <input type="text" class="form-control @error('kelurahan') is-invalid @enderror" id="kelurahan" name="kelurahan" required autofocus value="{{ old('kelurahan') }}">
            @error('kelurahan')
              <div class="invalid-feedback">
                  {{ $message }}
              </div>
              @enderror
          </div>
          <div class="mb-3">
            <label for="kode_pos" class="form-label">Kode Pos</label>
            <input type="number" class="form-control @error('kode_pos') is-invalid @enderror" id="kode_pos" name="kode_pos" required autofocus value="{{ old('kode_pos') }}">
            @error('kode_pos')
              <div class="invalid-feedback">
                  {{ $message }}
              </div>
              @enderror
          </div>
        </div>
        <div class="col-md-8">
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
    </form>
</div>
    
@endsection