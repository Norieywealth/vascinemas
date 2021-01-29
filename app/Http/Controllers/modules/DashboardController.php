<?php

namespace App\Http\Controllers\modules;

use App\Http\Controllers\Controller;
use App\Models\Movie;
use Illuminate\Http\Request;

class DashboardController extends Controller
{
    //


    public function __construct()
    {
        $this->middleware(['auth']);
    }

    public function index()
    {
        $movies = Movie::get();

        return view('modules.dashboard', ['movies' => $movies]);
    }
}
