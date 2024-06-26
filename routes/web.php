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
Route::post('/check', [LoginController::class, 'check'])->name('check');

// Google Login
Route::get('googleLogin', [LoginController::class, 'googleLogin'])->name('Auth.google');
Route::get('/login/google/callback', [LoginController::class, 'callback'])->name('Auth.callback');


// Login with Facebook
Route::get('login/facebook', [LoginController::class, 'redirectToFacebook']);
Route::get('login/facebook/callback', [LoginController::class, 'handleFacebookCallback']);


// Logout 
Route::get('/logout', [LoginController::class, 'logout'])->name('logout');



// //Upload Image
// Route::get('/upload-image', [UploadImageController::class, 'create'])->name('Auth.uploadimage');
// Route::post('/upload-image', [UploadImageController::class, 'store'])->name('Auth.uploadimage.store');

// Upload Image
Route::middleware(['auth'])->group(function () { // Apply 'auth' middleware to the group
    Route::get('/upload-image', [UploadImageController::class, 'create'])->name('Auth.uploadimage');
    Route::post('/upload-image', [UploadImageController::class, 'store'])->name('Auth.uploadimage.store');
});


