@extends('layouts.app')

@section('content')

<div class="row">
    <div class="col-md-3 text-right mb-5">
        <img src="https://img.icons8.com/nolan/512/edit--v1.png" width="160px" height="160px">
    </div>

    <div class="col-md-9 text-left mt-5">
        <div class="display-4 mt-2">Editing flight information!</div>
    </div>
</div>
<div class="row">
    <div class="col-md-3">
    </div>
    <div class="col-md-6">
        {!! Form::open(['action' => ['FlightsController@update', $flight->id], 'method' => 'POST']) !!}
        <div class="form-group">
            {{Form::label('numero_voo', 'Flight Code')}}
            {{Form::text('numero_voo', $flight->numero_voo, ['class' => 'form-control', 'placeholder' => 'Flight Code'])}}
        </div>
        <div class="form-group">
            {{Form::label('data', 'Data')}}
            {{Form::date('data', $flight->data, ['class' => 'form-control', 'placeholder' => 'Flight Data'])}}
        </div>
        <div class="form-group">
            {{Form::label('origem', 'Origin')}}
            {{Form::text('origem', $flight->origem, ['class' => 'form-control', 'placeholder' => 'Flight Departs'])}}
        </div>
        <div class="form-group">
            {{Form::label('destino', 'Destination')}}
            {{Form::text('destino', $flight->destino, ['class' => 'form-control', 'placeholder' => 'Flight Destination'])}}
        </div>
        {{Form::hidden('_method','PUT')}}
        {{Form::submit('EDIT', ['class' => 'btn btn-dark btn-block'])}}
        {!! Form::close() !!}
    </div>
    <div class="col-md-3">
    </div>
</div>


@endsection