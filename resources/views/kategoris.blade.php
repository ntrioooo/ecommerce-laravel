@extends('layouts.main')

@section('container')
    <div class="container mt-5">
        <div class="text-content">
            <h2 class="text-center fw-bold">{{ $title }}</h2>
        </div>

        <div class="container">
            <div class="row">
                @foreach ($kategoris as $kategori)
                    <div class="col-md-4 mt-3">
                        <a href="/shops?kategoris={{ $kategori->id }}">
                            <div class="card bg-dark text-white">
                                <img src="https://source.unsplash.com/500x500?{{ $kategori->nama_kategori }}" class="card-img" alt="{{ $kategori->nama_kategori }}">
                                <div class="card-img-overlay d-flex align-items-center p-0">
                                <h5 class="card-title text-center bg-dark text-white flex-fill p-2">{{ $kategori->nama_kategori }}</h5>
                                </div>
                            </div>
                        </a>
                    </div> 
                @endforeach
            </div>
        </div>


    </div>
@endsection