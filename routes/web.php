<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Auth\LoginController;
use App\Http\Controllers\Auth\RegisterController;
use App\Http\Controllers\Auth\UploadImageController;

// Route::get('/', function () {
//     return view('welcome');
// });



// Register Controller

Route::get('/register', [RegisterController::class, 'registration']);
Route::post('/register', [RegisterController::class, 'store'])->name('register');
//Login Controller

Route::get('/login', [LoginController::class, 'index'])->name('Auth.login');
Route::get('googleLogin', [LoginController::class, 'googleLogin'])->name('Auth.google');
Route::get('/login/google/callback', [LoginController::class, 'callback'])->name('Auth.callback');
Route::post('/check', [LoginController::class, 'check'])->name('check');


//Upload Image
Route::get('/upload-image', [UploadImageController::class, 'create'])->name('Auth.uploadimage');
Route::post('/upload-image', [UploadImageController::class, 'store'])->name('Auth.uploadimage.store');


