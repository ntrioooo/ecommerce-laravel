@extends('layouts.main')

@section('container')

<div class="container mt-5">
    <div class="text-content">
        <h2 class="text-center fw-bold">{{ $title }}</h2>
    </div>

    <form class="row mt-5" method="POST" action="/order" enctype="multipart/form-data">
        @csrf
        <div class="col-md-8">
            <div class="card mb-3">
                <div class="row g-0">
                  <div class="col-md-4">
                    <img src="..." class="img-fluid rounded-start" alt="...">
                  </div>
                  <div class="col-md-8">
                    <div class="card-body">
                      <h5 class="card-title">Sweater</h5>
                      <br>
                      <br>
                      <br>
                      <p class="card-text text-primary fw-bold">Rp.20000</p>
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
    </form>
</div>
    
@endsection