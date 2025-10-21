<?php

namespace App\Livewire;

use Livewire\Component;

class SignUp extends Component
{
    public $countryCode, $mobileNumber, $termsAccepted, $signUp;

    // public function mount($countryCodes) {
    //     $this->countryCodes = $countryCodes;
    // }

    public function render() {
        return view('livewire.sign-up');
    }

    public function signupWithMobileNumber () {
        $this->validate([
            'mobile_number' => 'required|regex:/^\+\d{1,3}\s\d{4,14}(?:x.+)?$/',
        ],[
            'mobile_number.required' => 'The phone number field is required.',
            'mobile_number.regex' => 'The phone number format is invalid. Please use the format +<country code> <number>.', 
        ]);
    }
}
