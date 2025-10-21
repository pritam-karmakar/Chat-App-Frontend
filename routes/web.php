<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AuthController;

// Auth routes
Route::group(['prefix' => 'auth'], function () {
    Route::get('signup', [AuthController::class, 'showSignUpForm'])->name('signup');

});