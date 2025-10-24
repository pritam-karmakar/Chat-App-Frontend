<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\File;
use Illuminate\Support\Facades\Http;

class AuthController extends Controller
{
    public function showSignUpForm()
    {
        $countryCodes = File::json(public_path('/country-codes/codes.json'));
        return view('signup', compact('countryCodes'));
    }

    public function newAuthSignup(Request $request) {
        $response = Http::post('http://localhost:3000/api/auth/signup', [
            'country_code' => $request->input('countryCode'),
            'mobile_number' => $request->input('mobileNumber'),
        ]);

        // Get HTTP status code
        $statusCode = $response->getStatusCode();

        // Get body and decode JSON
        $body = (string) $response->getBody();
        $responseData = json_decode($body, true); // associative array

        if ($statusCode === 201 && isset($responseData['success']) && $responseData['success'] === true):
            $responseData['message'] = 'OTP has been sent to your mobile number.';        
        else:
            $responseData['message'] = 'An error occurred! Please try again later.';
        endif;

        return $responseData;
    }
}
