@extends('layouts.app')

@section('content')

<div class="row">
    <div class="col-md-3 text-right mb-5">
        <img src="https://img.icons8.com/nolan/160/information.png">
    </div>

    <div class="col-md-9 text-left mt-5">
        <div class="display-4 mt-2">Showing flights details!</div>
    </div>
</div>

<div class="text-center">
    <hr style="width:35%;">
    <div class="display-5">
        <b>FLIGHT CODE</b>
    </div>
    <h3>{{$flight->numero_voo}}</h3>

    <div class="display-5">
        <b>FLIGHT DATE</b>
    </div>
    <h3>{{$flight->data}}</h3>

    <div class="display-5">
        <b>FLIGHT ORIGIN</b>
    </div>
    <h3>{{$flight->origem}}</h3>

    <div class="display-5">
        <b>FLIGHT DESTINATION</b>
    </div>
    <h3>{{$flight->destino}}</h3>
    <hr style="width:35%;">
</div>



<div class="col-md-12 text-center">
    <h6>Flight created at <b>{{$flight->created_at}} </b> by <b>{{$flight->user->name}}</b></h6>
</div>

@if(!Auth::guest())
@if(Auth::user()->id == $flight->user_id)
<div class="row">
    <div class="col-md-6 text-right mt-3">
        <a href="/flights/{{$flight->id}}/edit" class="btn btn-outline-dark">Edit Flight</a>
    </div>
    <div class="col-md-6 text-left mt-3">
        {!!Form::open(['action' => ['FlightsController@destroy', $flight->id], 'method' => 'POST'])!!}
        {{Form::hidden('_method', 'DELETE')}}
        {{Form::submit('Delete Flight', ['class' => 'btn btn-outline-danger'])}}
        {!!Form::close()!!}
    </div>
</div>
@endif
@endif


@endsection