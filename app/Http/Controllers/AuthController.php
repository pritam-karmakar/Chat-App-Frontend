<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\File;

class AuthController extends Controller
{
    public function showSignUpForm()
    {
        $countryCodes = File::json(public_path('/country-codes/codes.json'));
        return view('signup', compact('countryCodes'));
    }
}
