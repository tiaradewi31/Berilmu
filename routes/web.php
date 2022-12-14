<?php

use App\Http\Controllers\ProfilController;
use Illuminate\Support\Facades\Auth;
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

Route::get('/', function () {
    return view('homepage');
});

Route::get('/homepage')->name('homepage');

Route::get('/login', [LoginController::class, 'index'] );

Route::post('/login', [ProfilController::class, 'simpandata'])->name('simpandata');

Route::get('/register', function () {
    return view('register');
});

Route::get('/profil', function () {
    return view('profil');
});

Route::get('/detail', function () {
    return view('detail');
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

Route::get('/editprofil', function () {
    return view('editprofil');
});

