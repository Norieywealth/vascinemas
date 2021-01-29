<?php

namespace App\Http\Controllers\Auth;

use App\Models\User;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;

class RegisterController extends Controller
{
    // authenticate to be accessible to only guest users
    public function __construct()
    {
        $this->middleware(['guest']);
    }

    //render registration form page
    public function index()
    {
        return view('auth.register');
    }

    //interface with model to store data
    public function store(Request $request)
    {
        //validation
        $this->validate($request, [
            'username' => ['required', 'max:255'],
            'email' => 'email|required|max:255',
            'password' => 'required|max:255|confirmed'
        ]);

        //store user
        User::create([
            'username' => $request->username,
            'email' => $request->email,
            'password' => Hash::make($request->password),
        ]);

        //sign in user

        Auth::attempt($request->only('email', 'password'));

        //redirect user
        return redirect()->route('dashboard');
    }
}
