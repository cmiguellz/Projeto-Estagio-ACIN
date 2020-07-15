@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-12">
            <form class="form-signin" method="POST" action="{{ route('register') }}">
                @csrf

                <div class="text-center mb-2">
                    <img src="https://img.icons8.com/nolan/96/sign-up.png">
                </div>

                <div class="text-center mb-4">
                    <h1 class="h3 mb-3 font-weight-normal">SIGN UP</h1>
                </div>

                <div class="col-md-4 offset-md-4">
                    <hr>
                </div>

                <div class="form-group row">
                    <div class="col-md-4">
                    </div>
                    <div class="col-md-4">
                        <input id="name" type="name" class="form-control @error('name') is-invalid @enderror"
                            name="name" placeholder="Name">

                        @error('name')
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
                        <input id="BI" type="BI" class="form-control @error('BI') is-invalid @enderror" name="BI"
                            placeholder="Identification (BI/CC)">

                        @error('BI')
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
                        <input id="NIF" type="NIF" class="form-control @error('NIF') is-invalid @enderror" name="NIF"
                            placeholder="NIF">

                        @error('NIF')
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
                        <input id="telefone" type="telefone"
                            class="form-control @error('telefone') is-invalid @enderror" name="telefone"
                            placeholder="Mobile">

                        @error('telefone')
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
                        <input id="email" type="email" class="form-control @error('email') is-invalid @enderror"
                            name="email" value="{{ old('email') }}" required autocomplete="email" placeholder="Email">

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
                            autocomplete="new-password" placeholder="Password">

                        @error('password')
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
                        <input id="password-confirm" type="password" class="form-control" name="password_confirmation"
                            required autocomplete="new-password" placeholder="Confirm Password">
                    </div>
                </div>

                <div class="form-group row mb-0">
                    <div class="col-md-4">
                    </div>
                    <div class="col-md-4 text-center">
                        <button type="submit" class="btn btn-lg btn-dark btn-block">
                            {{ __('Register') }}
                        </button>
                        <p class="mt-3 mb-3 text-muted text-center">&copy; 2020</p>

                    </div>
                </div>
            </form>
        </div>
    </div>

    @endsection
