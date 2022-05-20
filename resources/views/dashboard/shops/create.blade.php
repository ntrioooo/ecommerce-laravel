@extends('dashboard.layouts.main')

@section('container')
    <div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
        <h1 class="h2">Bikin Barang Baru</h1>
    </div>

    <div class="col-md-8">
        <form method="POST" action="/dashboard/shops" class="mb-5" enctype="multipart/form-data">
            @csrf
            <div class="mb-3">
              <label for="nama_produk" class="form-label">Nama Produk</label>
              <input type="text" class="form-control @error('nama_produk') is-invalid @enderror" id="nama_produk" name="nama_produk" required autofocus value="{{ old('nama_produk') }}">
              @error('nama_produk')
                <div class="invalid-feedback">
                    {{ $message }}
                </div>
                @enderror
            </div>
            <div class="mb-3">
                <label for="nama_kategori" class="form-label">Kategori</label>
                <select class="form-select" name="kategori_id">
                    @foreach ($kategoris as $kategori)
                    @if (old('kategori_id') == $kategori->id)
                        <option value="{{ $kategori->id }}" selected>{{ $kategori->nama_kategori }}</option>
                    @else
                        <option value="{{ $kategori->id }}">{{ $kategori->nama_kategori }}</option>
                    @endif
                    @endforeach
                </select>
            </div>
            <div class="mb-3">
                <label for="harga" class="form-label">Harga Produk</label>
                <input type="number" class="form-control @error('harga') is-invalid @enderror" id="harga" name="harga" required autofocus value="{{ old('harga') }}">
                @error('harga')
                  <div class="invalid-feedback">
                      {{ $message }}
                  </div>
                  @enderror
              </div>
              <div class="mb-3">
                <label for="image" class="form-label">Gambar Produk</label>
                <img class="img-preview img-fluid mb-3 col-sm-5">
                <input class="form-control @error('image') is-invalid @enderror" type="file" id="image" name="image" onchange="previewImage()">
                @error('image')
                <div class="invalid-feedback">
                    {{ $message }}
                </div>
                @enderror
              </div>
            <button type="submit" class="btn btn-primary">Submit</button>
        </form>
    </div>

    <script>
        function previewImage() {
            const image = document.querySelector('#image');
            const imagePreview = document.querySelector('.img-preview');

            imagePreview.style.display = 'block';

            const oFReader = new FileReader();
            oFReader.readAsDataURL(image.files[0]);

            oFReader.onload = function(oFREvent) {
                imagePreview.src = oFREvent.target.result;
            }
        }
    </script>
    
@endsection