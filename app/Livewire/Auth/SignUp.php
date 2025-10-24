<?php

namespace App\Livewire\Auth;

use App\Livewire\Auth\Otp;
use Livewire\Component;
use Illuminate\Http\Request;
use App\Http\Controllers\AuthController;

class SignUp extends Component
{
    public $countryCode = '+91', $mobileNumber, $termsAccepted;
    public $otp1, $otp2, $otp3, $otp4, $otp5, $otp6;

    private $render = "livewire.auth.sign-up";

    public function render() {
        return view($this->render);
    }

    public function signUp () {
        try {
            $validatedData = $this->validate([
                'countryCode'  => 'required|regex:/^\+\d[0-9]+?$/',
                'mobileNumber' => 'required|regex:/^\d[0-9]+?$/',
                'termsAccepted' => 'accepted',
            ],[
                'countryCode.required' => 'The country code field is required.',
                'mobileNumber.required' => 'The phone number field is required.',
                'mobileNumber.regex' => 'The phone number format is invalid. Please use the format number.',
                'termsAccepted.accepted' => 'You must accept the terms and conditions.',
            ]);

            $newAuthSignup = new AuthController();
            $registrationResponse = $newAuthSignup->newAuthSignup(new Request($validatedData));
            if (!empty($registrationResponse) && !empty($registrationResponse['success']) && $registrationResponse['success'] !== true):
                $this->dispatch('toast', type: 'error', message: $registrationResponse['message']);
            else:
                $this->render = "livewire.auth.otp";
                session('sentOtp', true);
                $this->dispatch('toast', type: 'success', message: $registrationResponse['message']);
            endif;
        } catch (Exception $e) {
            $this->dispatch('toast', type: 'error', message: 'Something went wrong! Try again later.');
        }
    }
}
