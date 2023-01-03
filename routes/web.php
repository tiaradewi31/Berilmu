<?php

use App\Http\Controllers\LoginController;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UserController;
use App\Http\Controllers\PostController;
use App\Http\Controllers\CategoryController;
use App\Http\Controllers\FormPostController;
use App\Http\Controllers\ProfilController;

use App\Models\Category;


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

// Route::get('/', function () {
//     return view('homepage');
// });

Route::get('/homepage', function () {
    return view('homepagesudahlogin');
});

Route::get('/register', [UserController::class, 'show'])->name('show')->middleware('guest');

Route::post('/register', [UserController::class, 'simpandata'])->name('simpandata');

Route::get('/login', [LoginController::class, 'login'])->name('login')->middleware('guest');

Route::post('/login', [LoginController::class, 'dologin'])->name('dologin');

Route::get('/logout', [LoginController::class, 'logout'])->name('logout');

Route::get('/about', function () {
    return view('about');
});

	
// Route::get('/homepage', [UserController::class, 'homepage']);

Route::get('/profil', [ProfilController::class, 'show'])->name('show')->middleware('auth');

Route::get('/searchpage', [PostController::class, 'index'])->name('index')->middleware('auth');

Route::get('/searchpage/{perangkat}', [PostController::class, 'downloadfunc'])->middleware('auth');

Route::get('/posts', [FormPostController::class, 'create'])->name('create')->middleware('auth');

Route::post('/posts', [FormPostController::class, 'store'])->middleware('auth');