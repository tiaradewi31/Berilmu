<?php

use App\Http\Controllers\LoginController;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UserController;
use App\Http\Controllers\PostController;
use App\Http\Controllers\CategoryController;
use App\Http\Controllers\FormPostController;

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

Route::get('/', function () {
    return view('homepage');
});

Route::get('/homepage', function () {
    return view('homepagesudahlogin');
});

// Route::get('/register', function () {
//     return view('register');
// });

// Route::get('/login', function () {
//     return view('login');
// });
Route::get('/register', [UserController::class, 'show'])->name('show');

Route::post('/register/homepage', [UserController::class, 'simpandata'])->name('simpandata');

Route::get('/login', [LoginController::class, 'login'])->name('login');

Route::post('/login/homepage', [LoginController::class, 'Authenticate'])->name('Authenticate');

Route::get('/about', function () {
    return view('about');
});

// Route::get('/navbarsudahlogin', function () {
//     return view('navbarsudahlogin');
// });

// Route::get('/categories', function(){
//     return view('category', [
//         'title' =>'Jenis Perangkat Pembelajaran',
//         'categories'=> Category::all()
//     ]);
// });

// Route::get('/categories/{category:slug}', function(Category $category){
//     return view('category', [
//         'title' =>$category->name,
//         'posts'=> $category->post,
//         'category' => $category->name
//     ]);
// });

Route::get('/searchpage', [PostController::class, 'index'])->middleware('auth');

Route::get('/posts', [FormPostController::class, 'create'])->name('create')->middleware('auth');

Route::post('/post', [FormPostController::class, 'store'])->name('store')->middleware('auth');