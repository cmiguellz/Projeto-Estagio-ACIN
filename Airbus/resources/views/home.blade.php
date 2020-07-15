@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-4 text-right mb-5">
            <img src="https://img.icons8.com/nolan/512/settings.png" width="160px" height="160px">
        </div>

        <div class="col-md-8 text-left mt-5">
            <div class="display-4 mt-2">Showing user details!</div>
        </div>
    </div>
    <div class="row justify-content-center">
        <div class="col-md-8">

            <div class="row">
                <div class="col-md-3 mt-4 text-center">
                    <img src="https://img.icons8.com/dotty/80/000000/user.png" width="80px" height="80px">
                    <p>USER INFO</p>
                </div>
                <div class="col-md-9 text-left mt-3">
                    <h6><b>Name: </b>{{$user->name}}</h6>
                    <h6><b>Identification (BI/CC): </b> {{$user->BI}}</h6>
                    <h6><b>NIF: </b> {{$user->NIF}}</h6>
                    <h6><b>Mobile: </b> {{$user->telefone}}</h6>
                    <h6><b>Email: </b> {{$user->email}}</h6>
                </div>
            </div>

            <div class="col-md-9 offset-md-3 text-center">
                <hr>
            </div>

            <div class="row">
                <div class="col-md-3 text-center">
                    <img src="https://img.icons8.com/wired/512/000000/ticket.png" width="70x" height="70px">
                    <p>YOUR BOOKINGS</p>
                </div>

                <div class="col-md-9 text-left mt-3">
                    @if (session('status'))
                    <div class="alert alert-success" role="alert">
                        {{ session('status') }}
                    </div>
                    @endif
                    


                {{-- @else --}}
                <div class="col-md-12 text-center mt-2">
                    <h5><b>There is no bookings. Want to search?</b></h5>
                    <a href="/flights" class="btn btn-outline-dark btn-block text-center">SEARCH FLIGHTS</a>
                </div>
                {{-- @endif --}}
            </div>


        </div>
    </div>
</div>



@endsection