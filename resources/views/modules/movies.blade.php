@extends('layouts.app')
@section('content')

<div class="row">

    <div class="col-lg-4 col-md-4 mb-3">
        @include('inc.listgroup')
    </div>
    <div class="col-lg-8 col-md-8">
        <div style="background-color: white; padding:1em">
            <h3>Movies and showtimes</h3>


            <!-- IF CINEMA NAME IS CREATED -->
            @if($cinema->count())

            @if(session('status'))
            <div class="alert alert-success">
                {{ session('status') }}
            </div>
            @elseif(session('error'))
            <div class="alert alert-danger">
                {{ session('error') }}
            </div>
            @endif
            <form action="{{ route('movies')}}" method="post">
                @csrf

                <input type="hidden" name="cinema_id" id="cinema_id" value="{{ $cinema->id }}">

                <div class="form-group">
                    <label for="movie_name">Movie Name</label>
                    <input type="text" name="movie_name" id="movie_name" class="form-control @error('movie_name') is-invalid @enderror" value="{{ old('movie_name')}}" placeholder="Enter your movie name" />
                    @error('movie_name')
                    <div class="alert alert-danger">
                        {{ $message }}
                    </div>
                    @enderror
                </div>
                <div class="form-group">
                    <label for="start_time">Start Time</label>
                    <input type="text" name="start_time" id="start_time" class="form-control @error('start_time') is-invalid @enderror" value="{{ old('start_time')}}" placeholder="Enter movie start time" />
                    @error('start_time')
                    <div class="alert alert-danger">
                        {{ $message }}
                    </div>
                    @enderror
                </div>
                <div class="form-group">
                    <label for="end_time">End Time</label>
                    <input type="text" name="end_time" id="end_time" class="form-control @error('end_time') is-invalid @enderror" value="{{ old('end_time')}}" placeholder="Enter movie end time" />
                    @error('end_time')
                    <div class="alert alert-danger">
                        {{ $message }}
                    </div>
                    @enderror
                </div>

                <div class="form-group">
                    <button type="submit" class="btn btn-primary">Save Movie Details</button>
                </div>
            </form>

            <hr>
            <!-- IF CINEMA NAME IS NOT CREATED -->
            @else
            <div class="alert alert-info text-center">You have to first create a cinema name...</div>
            @endif


        </div>

    </div>
</div>

@endsection