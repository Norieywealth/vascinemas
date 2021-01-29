<?php

namespace App\Http\Controllers\modules;

use App\Models\Movie;
use App\Models\Cinema;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class MoviesController extends Controller
{
    //


    public function __construct()
    {
        $this->middleware(['auth']);
    }

    // public function index()
    // {
    //     $cinemas = Cinema::get();
    //     return view('modules.movies', ['cinemas' => $cinemas]);
    // }


    public function show(Cinema $cinema, Request $request)
    {


        return view('modules.movies', ['cinema' => $cinema]);
    }

    public function store(Request $request)
    {


        Movie::create(
            [
                'movie_name' => $request->movie_name,
                'start_time' => $request->start_time,
                'end_time' => $request->end_time,
                'user_id' => $request->user()->id,
                'cinema_id' => $request->cinema_id,
            ]
        );

        //display success message
        return back()->with('status', 'Movie Saved Successfully!');
    }
}
