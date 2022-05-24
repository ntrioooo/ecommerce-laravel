@extends('layouts.main')

@section('container')
    <div class="container">
        <div class="row fluid">
            <div class="col-md-5 mt-3">
                <img src="{{ $image }}" alt="{{ $image }}">
            </div>
            <div class="col-md-5 align-self-center">
                <main class="form-signin">
                    <h1 class="h3 fw-500 text-center">Sign up your account</h1>
                    <form action="/register" method="POST" class="mt-3">
                        @csrf
                        <div class="form-floating">
                            <input type="text" name="name" class="form-control @error('name') is-invalid @enderror" id="name" placeholder="Name" autofocus required value="{{ old('name') }}">
                            <label for="name">Name</label>
                            @error('name')
                                <div class="invalid-feedback">
                                    {{ $message }}
                                </div>
                            @enderror
                        </div>
                        <div class="form-floating">
                            <input type="text" name="username" class="form-control @error('username') is-invalid @enderror" id="username" placeholder="Username" autofocus required value="{{ old('username') }}">
                            <label for="username">Username</label>
                            @error('username')
                                <div class="invalid-feedback">
                                    {{ $message }}
                                </div>
                            @enderror
                        </div>
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
                        <button class="w-100 btn btn-lg btn-primary mt-3" type="submit">Sign up</button>
                    </form>
                    <small class="mt-3 d-block">Already have an account? <a href="/login">Login Now!</a></small>
                </main>
            </div>
        </div>
    </div>
@endsection