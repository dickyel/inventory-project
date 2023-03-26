@extends('layouts.login')

@section('title')
    Login
@endsection

@section('content')
    <main class="login-container">
        <div class="container">
            <div class="row page-login d-flex align-item-center ">
                <div class="section-left col-12 col-md-6">
                    <h1 class="mb-4">
                        SISTEM
                        <br/> INVENTORY
                    </h1>
                    <img src="./frontend/images/login.png" class="w-75 d-none d-sm-flex" alt="">
                </div>
                <div class="section-right  col-12 col-md-4">
                    <div class="card">
                        <div class="card-body">
                           @if(session()->has('loginError'))
                                <div class="alert alert-danger alert-dismissable fade show" role="error">
                                    {{ session('loginError') }}
                                    <button class="btn-close" type="button" data-bs-dismiss="alert" aria-label="close"></button>
                                </div>
                           @endif
                            <form action="/" method="post">
                                @csrf
                                <div class="form-group">
                                    <label for="email">
                                      Email address
                                    </label>
                                    <input type="email" class="form-control @error('email') is-invalid @enderror" name="email" id="email" required autofocus value="{{ old('email') }}">
                                    @error('email')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                    @enderror
                                </div>
                                <div class="form-group">
                                  <label for="password">Password</label>
                                  <input name="password" type="password" class="form-control" id="password" required>
                                </div>
                                
                                <button type="submit" class="btn btn-login  btn-block">Sign In</button>
                               
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </main>
@endsection