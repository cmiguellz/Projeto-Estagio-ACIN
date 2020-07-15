@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-3 text-right mb-5">
            <img src="https://img.icons8.com/nolan/512/administrative-tools.png" width="160px" height="160px">
        </div>

        <div class="col-md-9 text-left mt-5">
            <div class="display-4 mt-2">Showing admin dashboard!</div>
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
                    <img src="https://img.icons8.com/carbon-copy/100/000000/airplane-take-off.png" width="80px"
                        height="80px">
                    <p>FLIGHTS</p>
                </div>

                <div class="col-md-9 text-left mt-3">
                    @if (session('status'))
                    <div class="alert alert-success" role="alert">
                        {{ session('status') }}
                    </div>
                    @endif
                    @if(count($flights) > 0)
                    <table class="table table-striped">
                        @foreach ($flights as $flight)
                        <tr>
                            <td>
                                <h5 class="mt-2"><b>{{$flight->numero_voo}}</b></h5>
                            </td>
                            <td><a href="/flights/{{$flight->id}}/edit" class="btn btn-outline-dark btn-block">EDIT</a>
                            </td>
                            <td>
                                {!!Form::open(['action' => ['FlightsController@destroy', $flight->id], 'method' =>
                                'POST'])!!}
                                {{Form::hidden('_method', 'DELETE')}}
                                {{Form::submit('DELETE', ['class' => 'btn btn-outline-danger btn-block'])}}
                                {!!Form::close()!!}
                            </td>
                        </tr>
                        @endforeach
                    </table>
                </div>

                <div class="col-md-9 offset-md-3 text-center">
                    <hr>
                </div>

                <div class="col-md-3 text-center mt-1">
                    <img src="https://img.icons8.com/plasticine/100/000000/airplane-take-off.png" width="80px"
                        height="80px">
                    <p>NEW FLIGHT</p>
                </div>
                <div class="col-md-9 mt-4 text-center">
                    <h5><b>Click it. Create it.</b></h5>

                    <a href="/flights/create" class="btn btn-dark btn-block text-center">BOOK FLIGHT</a>
                </div>

                @else
                <div class="col-md-12 text-center mt-2">
                    <h5><b>There is no flights. Want to Create?</b></h5>
                    <a href="/flights/create" class="btn btn-outline-dark btn-block text-center">CREATE FLIGHT</a>
                </div>
                @endif
            </div>


        </div>
    </div>
</div>

@endsection