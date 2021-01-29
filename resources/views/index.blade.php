@extends('layouts.app')
@section('content')

<div class="row">

    <div class="col-lg-2 col-md-2"></div>
    <div class="col-lg-8 col-md-8" style="padding:1em">

        <div class="jumbotron text-center">
            <h1>Welcome to VAS Cinemas</h1>
            <p>Explore your favourite movies</p>
            <p>Stay updated on your movies showtime</p>
            <a href="{{ route('register') }}" class="btn btn-primary">Get Started</a>
        </div>
    </div>
    <div class="col-lg-2 col-md-2"></div>

</div>

@endsection