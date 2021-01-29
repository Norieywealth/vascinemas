@extends('layouts.app')
@section('content')

<div class="row">

    <div class="col-lg-4 col-md-4"></div>
    <div class="col-lg-4 col-md-4 shadow-lg" style="background-color: whitesmoke; padding:1em">
        <h3 class="text-center">Register</h3>

        <form action="{{ route('register') }}" method="post">
            @csrf
            <div class="form-group">
                <label for="username">Username</label>
                <input type="text" name="username" id="username" class="form-control @error('username') is-invalid @enderror" value="{{ old('username')}}" placeholder="Enter your username" />
                @error('username')
                <div class="alert alert-danger">
                    {{ $message }}
                </div>
                @enderror
            </div>

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
                <label for="password_confirmation">Repeat password</label>
                <input type="password" name="password_confirmation" id="password_confirmation" class="form-control " placeholder="Repeat your password" />
            </div>

            <div class="form-group">
                <button type="submit" class="btn btn-primary w-100">Register</button>
            </div>
        </form>
    </div>
    <div class="col-lg-4 col-md-4"></div>

</div>

@endsection