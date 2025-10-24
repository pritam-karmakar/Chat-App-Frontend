<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AuthController;

// Auth routes
Route::group(['prefix' => 'auth'], function () {
    Route::get('/signup/{otp?}', [AuthController::class, 'showSignUpForm'])->name('signup')->whereAlpha('otp', 'otp');
    
});