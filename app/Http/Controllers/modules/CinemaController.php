<?php

namespace App\Http\Controllers\modules;

use App\Http\Controllers\Controller;
use App\Models\Cinema;
use Illuminate\Http\Request;

class CinemaController extends Controller
{
    //

    public function __construct()
    {
        $this->middleware(['auth']);
    }

    public function index()
    {
        $cinemas = Cinema::get();
        return view('modules.cinemas', ['cinemas' => $cinemas]);
    }

    public function store(Request $request)
    {

        //validate cinema name
        $this->validate($request, [
            'cinema_name' => ['required', 'max:255']
        ]);

        //check that cinema name has been saved
        $check = $request->user()->cinemas->where('cinema_name', $request->cinema_name);
        $count = $check->count();
        if ($count > 0) {
            //display error mesage if cinema name exists
            return back()->with('error', 'Cinema already saved! Try another...');
        }

        //Save cinema name by relation with user
        $request->user()->cinemas()->create($request->only('cinema_name'));

        //display success message
        return back()->with('status', 'Cinema Saved Successfully!');
    }
}
