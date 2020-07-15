@extends('layouts.app')

@section('content')

<div class="row">
    <div class="col-md-4 text-right mb-5">
        <img src="https://img.icons8.com/nolan/512/search.png" width="160px" height="160px">
    </div>

    <div class="col-md-8 text-left mt-5">
        <div class="display-4 mt-2">Searching for a flight?</div>
    </div>
</div>

<div class="row">
    <div class="col-md-2">
    </div>
    <div class="col-md-8 text-center">
        <form action="/search" id="form" method="POST">
            @csrf
        <div class="form-group">
            <input type="text" class="form-control" name="pesquisa" id="id" placeholder="Type the flight number, destination, origin here..." >
        </div>
    </form>
    </div>
    <div class="col-md-2">
    </div>
</div>

<div class="row">
        @if (!empty($resultados))
        @foreach ($resultados as $flight)
        <div class="col-md-4 mb-4">
            <div class="card">
                <div class="col-md-12 text-center mt-4">
                    <img src="https://img.icons8.com/android/96/000000/airplane-take-off.png" width="96px" height="96px">
                </div>
                <div class="card-body">
                    <h5 class="card-title text-center">
                        <b>TAP</b>
                        <img src="https://img.icons8.com/nolan/64/arrow.png" width="30px" height="30px" class="mb-1">
                        {{$flight->numero_voo}}
                    </h5>
                    <hr>
                    <div class="col-md-12 text-center">
                        <h5><b>DATE</b></h5>
                        <p>{{$flight->data}}</p>
                        <h5><b>ORIGIN</b></h5>
                        <p>{{$flight->origem}}</p>
                        <h5><b>DESTINATION</b></h5>
                        <p>{{$flight->destino}}</p>
                        @auth
                        <a href="#" class="btn btn-outline-success btn-block">RESERVAR</a>
                        @endauth
                        <a href="/flights/{{$flight->id}}" class="btn btn-outline-primary btn-block">INFO</a>
                    </div>
                </div>
            </div>
        </div>
        @endforeach
        @endif
</div>




@endsection