<?php

namespace App\Livewire;

use Livewire\Component;
use App\Http\Controllers\AuthController;

class SignUp extends Component
{
    public $countryCode, $mobileNumber, $termsAccepted, $signUp;

    // public function mount($countryCodes) {
    //     $this->countryCodes = $countryCodes;
    // }

    public function render() {
        return view('livewire.sign-up');
    }

    public function signUp () {
        $this->validate([
            'mobileNumber' => 'required|regex:/^\+\d{1,3}\s\d{4,14}(?:x.+)?$/',
        ],[
            'mobileNumber.required' => 'The phone number field is required.',
            'mobileNumber.regex' => 'The phone number format is invalid. Please use the format +<country code> <number>.', 
        ]);

        // $newAuth = new AuthController();
        // return $newAuth->showLoginForm();
    }
}
