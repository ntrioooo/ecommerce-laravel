@extends('layouts.main')

@section('container')
    <div class="container">
        <div class="row fluid">
            <div class="col-md-5 mt-3 image-login">
                <img src="{{ $image }}" class="img-fluid" alt="{{ $image }}">
            </div>
            <div class="col-md-5 align-self-center">
                @if (session()->has('success'))
                    <div class="alert alert-success alert-dismissible fade show form-signin" role="alert">
                        {{ session('success') }}
                        <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                    </div>
                @endif
                @if (session()->has('loginError'))
                    <div class="alert alert-danger alert-dismissible fade show form-signin" role="alert">
                        {{ session('loginError') }}
                        <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                    </div>
                @endif
                
                <main class="form-signin">
                    <h1 class="h3 fw-500 text-center">Sign into your account</h1>
                    <form action="/login" method="POST" class="mt-3">
                        @csrf
                        <div class="form-floating">
                            <input type="email" name="email" class="form-control @error('email') is-invalid @enderror" id="email" placeholder="name@example.com" autofocus required value="{{ old('email') }}">
                            <label for="email">Email address</label>
                            @error('email')
                                <div class="invalid-feedback">
                                    {{ $message }}
                                </div>
                            @enderror
                        </div>
                        <div class="form-floating">
                            <input type="password" name="password" class="form-control" id="password" placeholder="Password" required>
                            <label for="password">Password</label>
                        </div>
                        <button class="w-100 btn btn-lg btn-primary mt-3" type="submit">Login</button>
                    </form>
                    <small class="mt-3 d-block">Not registered? <a href="/register">Register Now!</a></small>
                </main>
            </div>
        </div>
    </div>
@endsection