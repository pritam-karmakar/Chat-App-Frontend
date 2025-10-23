<?php

namespace App\Livewire\Auth;

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
        $validatedData = $this->validate([
            'countryCode'  => 'required',
            'mobileNumber' => 'required|regex:/^\d[0-9]+?$/',
            'termsAccepted' => 'accepted',
        ],[
            'countryCode.required' => 'The country code field is required.',
            'mobileNumber.required' => 'The phone number field is required.',
            'mobileNumber.regex' => 'The phone number format is invalid. Please use the format <number>.',
            'termsAccepted.accepted' => 'You must accept the terms and conditions.',
        ]);

        $newAuthSignup = new AuthController();
        $registrationResponse = $newAuthSignup->newAuthSignup(new Request($validatedData));
        if ($registrationResponse['success'] !== true):
            session()->flash('mobileNumberError', $registrationResponse['message']);
            $this->dispatch('toast', [
                'type' => 'error',
                'message' => $registrationResponse['message']
            ]);
        else:
            session()->flash('OtpSent', $registrationResponse['message']);
            $this->render = "livewire.auth.otp";
            $this->dispatch('toast', type: 'success', message: $registrationResponse['message']);
            // [
            //     'type' => 'success',
            //     'message' => $registrationResponse['message']
            // ]);
        endif;
    }
}
