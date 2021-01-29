@extends('layouts.app')
@section('content')

<div class="row">

    <div class="col-lg-4 col-md-4 mb-3">
        @include('inc.listgroup')
    </div>
    <div class="col-lg-8 col-md-8">
        <div style="background-color: white; padding:1em">
            <h3>Cinemas</h3>

            @if(session('status'))
            <div class="alert alert-success">
                {{ session('status') }}
            </div>
            @elseif(session('error'))
            <div class="alert alert-danger">
                {{ session('error') }}
            </div>
            @endif
            <form action="{{ route('cinemas')}}" method="post">
                @csrf
                <div class="form-group">
                    <label for="cinema_name">Cinema Name</label>
                    <input type="text" name="cinema_name" id="cinema_name" class="form-control @error('cinema_name') is-invalid @enderror" value="{{ old('cinema_name')}}" placeholder="Enter your cinema name" />
                    @error('cinema_name')
                    <div class="alert alert-danger">
                        {{ $message }}
                    </div>
                    @enderror
                </div>

                <div class="form-group">
                    <button type="submit" class="btn btn-primary">Save Cinema</button>
                </div>
            </form>

            <hr>

            @if($cinemas->count())
            <div style="overflow-x:auto;">
                <table class="table table-striped table-condensed">
                    <tr>
                        <th>S/N</th>
                        <th>User</th>
                        <th>Cinema Name</th>
                        <th>Date</th>
                        <th></th>
                    </tr>
                    @foreach($cinemas as $cinema)
                    <tr>
                        <td>{{ $cinema->id }}</td>
                        <td>{{ $cinema->user->username }}</td>
                        <td>{{ $cinema->cinema_name }}</td>
                        <td>{{ $cinema->created_at->diffForHumans() }}</td>
                        <td><a href="{{ route('movies.add', $cinema) }}" class="btn btn-primary"> Add Movies</a></td>
                    </tr>
                    @endforeach
                </table>
            </div>
            @else
            <div class="alert alert-info text-center">No Cinema records found</div>
            @endif
        </div>

    </div>
</div>

@endsection