@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-12">
            <form class="form-signin" method="POST" action="{{ route('login') }}">
                @csrf
                <div class="text-center mb-2">
                    <img src="https://img.icons8.com/nolan/96/login-rounded-right.png">
                </div>

                <div class="text-center mb-4">
                    <h1 class="h3 mb-3 font-weight-normal">SIGN IN</h1>
                </div>

                <div class="col-md-4 offset-md-4">
                    <hr>
                </div>

                <div class="form-group row">
                    <div class="col-md-4">
                    </div>
                    <div class="col-md-4">
                        <input id="email" type="email" class="form-control @error('email') is-invalid @enderror"
                            name="email" value="{{ old('email') }}" placeholder="Email" required autocomplete="email"
                            autofocus>

                        @error('email')
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                        @enderror
                    </div>
                </div>

                <div class="form-group row">
                    <div class="col-md-4">
                    </div>

                    <div class="col-md-4">
                        <input id="password" type="password"
                            class="form-control @error('password') is-invalid @enderror" name="password" required
                            autocomplete="current-password" placeholder="Password">

                        @error('password')
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                        @enderror
                    </div>
                </div>


                <div class="form-group row mb-0">
                    <div class="col-md-4">
                    </div>
                    <div class="col-md-4 text-center">
                        <button type="submit" class="btn btn-lg btn-dark btn-block">
                            {{ __('Login') }}
                        </button>
                        <p class="mt-3 mb-3 text-muted text-center">&copy; 2020</p>
                    </div>
                </div>


            </form>


        </div>
    </div>
</div>
@endsection
