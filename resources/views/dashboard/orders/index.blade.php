@extends('dashboard.layouts.main')

@section('container')
  <div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
      <h1 class="h2">Data Orderan</h1>
  </div>

  <div class="table-responsive col-lg-9">
    <table class="table table-striped table-sm">
      <thead>
        <tr>
          <th scope="col">#</th>
          <th scope="col">Nama Lengkap</th>
          <th scope="col">Nama Produk</th>
          <th scope="col">Size</th>
          <th scope="col">Harga</th>
          <th scope="col">Kecamatan</th>
          <th scope="col">Kelurahan</th>
          <th scope="col">Alamat Lengkap</th>
        </tr>
      </thead>
      <tbody>
        @foreach ($orders as $order)
          <tr>
            <td>{{ $loop->iteration }}</td>
            <td>{{ $order->user->name }}</td>
            <td>{{ $order->shop->nama_produk }}</td>
            <td>{{ $order->size }}</td>
            <td>{{ $order->shop->harga }}</td>
            <td>{{ $order->kecamatan }}</td>
            <td>{{ $order->kelurahan }}</td>
            <td>{{ $order->alamat }}</td>
          </tr>
        @endforeach
      </tbody>
    </table>
  </div>
@endsection