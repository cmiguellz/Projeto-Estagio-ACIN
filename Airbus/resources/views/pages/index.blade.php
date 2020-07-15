@extends('layouts.app')

@section('banner')
<img src="..\images\banner.jpg" width="100%">
<div class="container">
    <div class="row">
        <div class="col-md-6 mt-4 text-center">
            <div class="display-3 mt-5">
                <strong>SEARCHING FOR A FLIGHT?</strong>
            </div>
            <h3>PRESS THE SEARCH ICON!</h3>
        </div>
        <div class="col-md-3 mt-4 text-center">
            <a href="/flights"><img src="https://img.icons8.com/nolan/512/search.png" width="250px" height="250px"></a>
            <h6><div class="text-muted">All flights available</h6>

        </div>
        <div class="col-md-3 mt-4 text-center">
            <a href="/search"><img src="https://img.icons8.com/nolan/512/zoom-in.png" width="250px" height="250px"></a>
            <h6><div class="text-muted">Especific Flight Search</h6>

        </div>
    </div>

    @endsection