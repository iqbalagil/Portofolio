<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PortoController;
use App\Http\Requests\PostRequest;
use App\Http\Controllers\PostController;
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

Route::get('/',[PortoController::class,'index'])->name('main');
Route::get('/work',[PortoController::class,'work'])->name('work');
Route::get('/forms',[PortoController::class,'forms'])->name('forms');
Route::post('/submit',[PortoController::class,'submit'])->name('submit');
Route::get('/message',[PortoController::class,'message'])->name('message');
Route::resource('posts',PostController::class);

Route::get("login", [UserController::class, 'login'])->name('login');
Route::post("/do-login", [UserController::class, 'doLogin'])->name('doLogin');
Route::post("/do-logout", [UserController::class, 'doLogut'])->name('doLogout');

Route::get("register", [UserController::class, 'register'])->name('register');
Route::post("register", [UserController::class, 'store'])->name('store');
Route::get("/sample", [UserController::class, 'createSample'])->name('sample');


// Route::get('/posts/dashboard',[PortoController::class,'dashboard'])->name('dashboard');
// Route::get('/posts',[PostController::class,'store'])->name('posts.store');
// Route::get('/posts',[PostController::class,'show'])->name('posts.show');
// Route::get('/posts',[PostController::class,'update'])->name('posts.update');
// Route::get('/posts',[PostController::class,'destroy'])->name('posts.destroy');
// Route::get('/posts',[PostController::class,'edit'])->name('posts.edit');
