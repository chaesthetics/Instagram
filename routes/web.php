<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UserController;
/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});


Route::get('/signup', [UserController::class, 'signup']);
Route::post('/signUpPost', [UserController::class, 'signUpPost']);
Route::get('/signin', [UserController::class, 'signin']);
Route::post('/signInPost', [UserController::class, 'signInPost']);

Route::middleware(['auth'])->group(function () {
    // Your protected routes go here
    Route::resource('/home', UserController::class);
});


Auth::routes();

Route::get('/post', [App\Http\Controllers\HomeController::class, 'index'])->name('post');
