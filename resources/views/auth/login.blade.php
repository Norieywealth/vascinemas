@extends('layouts.app')
@section('content')

<div class="row">

    <div class="col-lg-4 col-md-4"></div>
    <div class="col-lg-4 col-md-4" style="background-color: whitesmoke; padding:1em">
        <h3 class="text-center">Login</h3>
        @if(session()->has('status'))
        <div class="alert alert-danger">
            {{ session('status') }}
        </div>
        @endif
        <form action="{{ route('login') }}" method="post">
            @csrf


            <div class="form-group">
                <label for="email">Email</label>
                <input type="text" name="email" id="email" class="form-control @error('email') is-invalid @enderror" value="{{ old('email')}}" placeholder="Enter your email" />
                @error('email')
                <div class="alert alert-danger">
                    {{ $message }}
                </div>
                @enderror
            </div>

            <div class="form-group">
                <label for="password">Password</label>
                <input type="password" name="password" id="password" class="form-control @error('password') is-invalid @enderror" placeholder="Enter your password" />
                @error('password')
                <div class="alert alert-danger">
                    {{ $message }}
                </div>
                @enderror
            </div>

            <div class="form-group">

                <input type="checkbox" name="remember" id="remember">
                <label for="remember">Remember me</label>
            </div>

            <div class="form-group">
                <button type="submit" class="btn btn-primary w-100">Login</button>
            </div>
        </form>
    </div>
    <div class="col-lg-4 col-md-4"></div>

</div>

@endsection