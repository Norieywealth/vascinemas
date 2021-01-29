@extends('layouts.app')
@section('content')

<div class="row">

    <div class="col-lg-4 col-md-4 mb-3">
        @include('inc.listgroup')
    </div>
    <div class="col-lg-8 col-md-8">
        <div style="background-color: white; padding:1em">
            <h3>Dashboard</h3>

            @if($movies->count())
            <div style="overflow-x:auto;">
                <table class="table table-striped">
                    <tr>
                        <th>S/N</th>
                        <th>Cinema</th>
                        <th>Movie</th>
                        <th>Show Time</th>
                    </tr>

                    @foreach($movies as $movie)
                    <tr>
                        <td>{{ $movie->id }}</td>
                        <td>{{ $movie->cinema->cinema_name }}</td>
                        <td> {{ $movie->movie_name }}</td>
                        <td> {{ $movie->start_time }}<b> - </b> {{ $movie->end_time }}</td>
                    </tr>


                    @endforeach
                </table>
            </div>
            @else
            <div class="alert alert-info text-center">No movies upload. Create a cinema to upload movies</div>
            @endif
        </div>

    </div>
</div>

@endsection