<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AuthController;
use App\Http\Middleware\VerifyAuthToken;

// Auth routes
Route::group(['prefix' => 'auth'], function () {
    Route::get('/signup/{otp?}', [AuthController::class, 'showSignUpForm'])->name('signup')->where('otp', 'otp');
    
});

// Chat Routes
Route::middleware([VerifyAuthToken::class])->prefix('chat')->group( function () {
    Route::get('/dashboard', function () {
        return view('chat');
    })->name('chat.dashboard');
    
});