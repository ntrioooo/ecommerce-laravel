@extends('layouts.main')

@section('container')
    <main>
        <div class="container">
            <div class="row flex-column-reverse flex-lg-row">
                <div class="col-md-6 mt-5">
                    <div class="text-title">
                        <p>Tinggal “klik-klik” barang sudah datang!</p>
                    </div>
                    <div class="text-content">
                        <p>FASHION BUKAN <br>HANYA SEKADAR <br>GAYA SAJA.</p>
                    </div>
                    <div class="text-add">
                        <p>&nbsp;Fashion adalah bagian dari hidup yang <br>
                            &nbsp;harus diperhatikan oleh semua orang</p>
                    </div>
                    <a href="/register" class="text-decoration-none btn button-daftar my-4">Daftar Sekarang</a>
                </div>
                <div class="col-md-6 mt-5">
                    <img src="images/{{ $image }}" class="img-fluid" alt="{{ $image }}">
                </div>
            </div>
        </div>
    </main>
    <section>
        <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 1440 320"><path fill="#fff" fill-opacity="1" d="M0,128L24,144C48,160,96,192,144,176C192,160,240,96,288,90.7C336,85,384,139,432,165.3C480,192,528,192,576,165.3C624,139,672,85,720,69.3C768,53,816,75,864,101.3C912,128,960,160,1008,170.7C1056,181,1104,171,1152,165.3C1200,160,1248,160,1296,154.7C1344,149,1392,139,1416,133.3L1440,128L1440,0L1416,0C1392,0,1344,0,1296,0C1248,0,1200,0,1152,0C1104,0,1056,0,1008,0C960,0,912,0,864,0C816,0,768,0,720,0C672,0,624,0,576,0C528,0,480,0,432,0C384,0,336,0,288,0C240,0,192,0,144,0C96,0,48,0,24,0L0,0Z"></path></svg>
        <div class="container">
            <div class="row">
                <div class="col-md-6">
                    <p class="text-content text-white">Features</p>
                    <p class="text-title text-white fs-5">Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's  standard dummy text ever since the 1500s</p>
                </div>
                <div class="col-md-6">
                    <div class="row mt-4 ms-3">
                        <div class="col-md-6">
                            <div class="card">
                                <div class="card-body">
                                  <h5 class="card-title">Transfer</h5>
                                  <p class="card-text mb-2 text-muted">Lorem ipsum dolor, sit amet consectetur adipisicing elit. Dignissimos, beatae.</p>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="card">
                                <div class="card-body">
                                  <h5 class="card-title">COD</h5>
                                  <p class="card-text mb-2 text-muted">Lorem ipsum dolor sit amet consectetur adipisicing.</p>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="row mt-4 ms-3 mb-4">
                        <div class="col-md-6">
                            <div class="card">
                                <div class="card-body">
                                  <h5 class="card-title">Refund</h5>
                                  <p class="card-text mb-2 text-muted">Lorem ipsum dolor sit amet consectetur adipisicing elit.</p>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="card">
                                <div class="card-body">
                                  <h5 class="card-title">Cashback</h5>
                                  <p class="card-text mb-2 text-muted">Lorem ipsum dolor, sit amet consectetur adipisicing elit. Odit!</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <footer>
        <div class="text-footer mt-4">
            <p class="text-center">2022 Copyright NTRIO - All rights reserved - Made in love</p>
        </div>
    </footer>
@endsection