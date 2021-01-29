<?php

use App\Http\Controllers\Auth\LoginController;
use App\Http\Controllers\Auth\LogoutController;
use App\Http\Controllers\Auth\RegisterController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\modules\CinemaController;
use App\Http\Controllers\modules\DashboardController;
use App\Http\Controllers\modules\MoviesController;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/
//home page
Route::get('/', [HomeController::class, 'index'])->name('home');

//register page
Route::get('/register', [RegisterController::class, 'index'])->name('register');
Route::post('/register', [RegisterController::class, 'store']);

//login page
Route::get('/login', [LoginController::class, 'index'])->name('login');
Route::post('/login', [LoginController::class, 'store']);

//logout
Route::post('/logout', [LogoutController::class, 'store'])->name('logout');

//dashboard page
Route::get('/dashboard', [DashboardController::class, 'index'])->name('dashboard');

//cinema page
Route::get('/cinemas', [CinemaController::class, 'index'])->name('cinemas');
Route::post('/cinemas', [CinemaController::class, 'store']);

//movies page
Route::get('/movies', [MoviesController::class, 'index'])->name('movies');
Route::get('/movies/{cinema}/add', [MoviesController::class, 'show'])->name('movies.add');
Route::post('/movies', [MoviesController::class, 'store']);
