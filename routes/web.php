<?php

use App\Http\Controllers\ProfilController;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UserController;


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

Route::get('/', function () {
    return view('homepage');
});

Route::get('/homepage')->name('homepagesudahlogin');

Route::get('/register', function () {
    return view('register');
});

Route::get('/login', function () {
    return view('login');
});

Route::post('/register/homepage', [UserController::class, 'simpandata'])->name('simpandata');


Route::post('/login/homepage', [UserController::class, 'panggildata'])->name('panggildata');

Route::get('/profil', function () {
    return view('profil');
});

Route::get('/about', function () {
    return view('about');
});

Route::get('/navbarsudahlogin', function () {
    return view('navbarsudahlogin');
});

Route::get('/searchpage', function () {
    return view('searchpage');
});

Route::get('/posts', function () {
    return view('posts');
});

