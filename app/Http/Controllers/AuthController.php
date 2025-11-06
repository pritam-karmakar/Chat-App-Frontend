<?php

namespace App\Http\Controllers;

use Illuminate\View\View;
use Illuminate\Http\Request;
use Illuminate\Http\JsonResponse;
use Illuminate\Support\Facades\File;
use Illuminate\Support\Facades\Http;

class AuthController extends Controller
{
    public function showSignUpForm(): View {
        return view('signup');
    }

    public function newUserSignup(Request $request): array {
        $response = Http::post('http://localhost:3000/api/auth/sign-up', [
            'country_code' => $request->input('countryCode'),
            'mobile_number' => $request->input('mobileNumber'),
        ]);

        // Get HTTP status code
        $statusCode = $response->getStatusCode();

        // Get body and decode JSON
        $body = (string) $response->getBody();
        $responseData = json_decode($body, true); // associative array

        if ($response->successful() && $statusCode === 201):
            session(['otpVerificationToken' => $responseData['data']['otpToken']]);
            $responseData['message'] = 'OTP has been sent to your mobile number.';
        endif;

        return $responseData;
    }

    public function userOtpVerification (Request $request) {
        $userEnteredOtp = $request->input('otp');
        $verificationToken = session('otpVerificationToken');

        $response = Http::post('http://localhost:3000/api/auth/verify-otp', [
            'submitted_otp' => $userEnteredOtp,
            'token' => $verificationToken,
        ]);
        
        // Get HTTP status code
        $statusCode = $response->getStatusCode();

        // Get body and decode JSON
        $body = (string) $response->getBody();
        $responseData = json_decode($body, true); // associative array

        if ($response->successful() && $statusCode === 200):
            session([
                'auth_token' => $responseData['data']['token']
            ]);
            $responseData['message'] = 'User logged in successfully.';
        elseif(!$response->successful() && $statusCode === 500):
            // session()->forget('otpVerificationToken');
        endif;

        return $responseData;
    }

    public function showSignInForm () {
        return view('signin');
    }

}
