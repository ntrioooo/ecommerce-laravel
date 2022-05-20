@extends('dashboard.layouts.main')

@section('container')
  <div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
      <h1 class="h2">Data Barang</h1>
  </div>


@if (session()->has('success'))
    <div class="alert alert-success col-lg-8" role="alert">
      {{ session('success') }}
    </div>
@endif
  <a href="/dashboard/shops/create" class="btn btn-primary mb-3">Bikin barang baru</a>
  <div class="table-responsive col-lg-8">
    <table class="table table-striped table-sm">
      <thead>
        <tr>
          <th scope="col">#</th>
          <th scope="col">Nama Produk</th>
          <th scope="col">Kategori</th>
          <th scope="col">Harga</th>
          <th scope="col">Action</th>
        </tr>
      </thead>
      <tbody>
        @foreach ($shops as $shop)
          <tr>
            <td>{{ $loop->iteration }}</td>
            <td>{{ $shop->nama_produk }}</td>
            <td>{{ $shop->kategori->nama_kategori }}</td>
            <td>{{ $shop->harga }}</td>
            <td>
              <a href="/dashboard/shops/{{ $shop->id }}" class="badge bg-primary"><span data-feather="eye"></span></a>
              <a href="/dashboard/shops/{{ $shop->id }}/edit" class="badge bg-warning"><span data-feather="edit"></span></a>
              <form action="/dashboard/shops/{{ $shop->id }}" method="POST" class="d-inline">
              @method('delete')
              @csrf
                <button class="badge bg-danger border-0" onclick="return confirm('Are you sure?')">
                  <span data-feather="x-circle"></span>
                </button>
              </form>
            </td>
          </tr>
        @endforeach
      </tbody>
    </table>
  </div>
@endsection