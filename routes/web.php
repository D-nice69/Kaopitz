<?php

use App\Http\Controllers\HomeController;
use App\Http\Controllers\PostController;
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
    return view('welcome');
});
Route::get('/demo', [HomeController::class, 'demo']);
Route::post('/check', [HomeController::class, 'check'])->name('home.check');
Route::get('/demodemo', [HomeController::class, 'demodemo'])->name('home.demodemo');
//Buoi 1
//BTVN
//Bai 1:
Route::get('/my-blog', [HomeController::class, 'index'])->name('home.index');
//Bai 2:
Route::get('/home',[PostController::class,'admin'])->middleware(['check_login','check_user:admin']);
Route::get('/home-page',[PostController::class,'index'])->name('post.index');
Route::get('/login', [HomeController::class, 'login'])->name('home.login');

//Buoi 2
//BTVN
Route::get('/post',[PostController::class,'post'])->name('post.post');
Route::post('/post/search',[PostController::class,'search'])->name('post.search');
Route::get('/post/edit/{id}',[PostController::class,'edit'])->name('post.edit');
Route::patch('/post/update/{id}',[PostController::class,'update'])->name('post.update');
Route::get('/post/delete/{id}',[PostController::class,'destroy'])->name('post.destroy');


