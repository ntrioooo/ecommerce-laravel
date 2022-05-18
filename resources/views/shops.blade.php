@extends('layouts.main')

@section('container')
    <div class="container mt-5">
        <div class="text-content">
            <h2 class="text-center fw-bold">{{ $title }}</h2>
        </div>

        <div class="row">
            <div class="col-md-4">
                <div class="card" style="width: 18rem;">
                    <img src="..." class="card-img-top" alt="...">
                    <div class="card-body">
                      <h5 class="card-title"></h5>
                      <p class="card-text"></p>
                      <a href="/shops/order" class="btn btn-primary">Pesan</a>
                    </div>
                  </div>
            </div>
        </div>
    </div>
@endsection