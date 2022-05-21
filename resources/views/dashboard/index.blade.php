@extends('dashboard.layouts.main')

@section('container')
    <div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
        <h1 class="h2">Data Admin</h1>
    </div>

    <div class="row">
        <div class="col-md-3">
            <div class="card">
                <div class="card-body text-end">
                  <h1 class="card-title">{{ $userCount }}</h1>
                  <h4 class="card-text">Data user</h4>
                </div>
              </div>
        </div>
        <div class="col-md-3">
            <div class="card">
                <div class="card-body text-end">
                  <h1 class="card-title">{{ $shopCount }}</h1>
                  <h4 class="card-text">Data barang</h4>
                </div>
              </div>
        </div>
    </div>
@endsection