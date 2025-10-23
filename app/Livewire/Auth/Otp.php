<?php

namespace App\Livewire\Auth;

use Livewire\Component;

class Otp extends Component
{
    public $otp1, $otp2, $otp3, $otp4, $otp5, $otp6;

    public function render()
    {
        return view('livewire.auth.otp');
    }

    public function verifyOtp() {
        
        return;
        $otp = implode('', $this->otp);
        // Call the API to verify the OTP
        $response = Http::post('https://your-api-url.com/verify-otp', [
            'otp' => $otp,
        ]);

        if ($response->successful()) {
            // Handle successful OTP verification
        } else {
            // Handle failed OTP verification
        }
    }
}
