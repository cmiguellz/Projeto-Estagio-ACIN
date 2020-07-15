@extends('layouts.app')

@section('content')
@if(count($flights) > 0)

<div class="row">
    <div class="col-md-3 text-right mb-5">
        <img src="https://img.icons8.com/nolan/512/clock.png" width="160px" height="160px">
    </div>

    <div class="col-md-9 text-left mt-5">
        <div class="display-4 mt-2">Showing the available flights!</div>
    </div>
</div>


<div class="row">
    @foreach ($flights as $flight)
    <div class="col-md-4 mb-4">
        <div class="card">
            <div class="col-md-12 text-center mt-4">
                <img src="https://img.icons8.com/android/96/000000/airplane-take-off.png" width="96px" height="96px">
            </div>
            <div class="card-body">
                <h5 class="card-title text-center">
                    <b>TAP</b>
                    <img src="https://img.icons8.com/nolan/64/arrow.png" width="30px" height="30px" class="mb-1">
                    <a href="/flights/{{$flight->id}}">{{$flight->numero_voo}}</a>
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
                <a href="/booking/{{$flight->id}}" class="btn btn-outline-success btn-block">RESERVAR</a>
                    @endauth
                    <a href="/flights/{{$flight->id}}" class="btn btn-outline-primary btn-block">INFO</a>
                </div>
            </div>
        </div>
    </div>
    @endforeach
</div>
{{$flights->links()}}
@else
<div class="col-md-12 text-center" style="margin-top:190px;">
    <img src="https://img.icons8.com/nolan/512/error.png" width="180px" height="180px">
    <div class="display-4">Ups, there is no available flights.</div>
    <h4>Wait a few moments and try again!</h4>


</div>
@endif

@endsection