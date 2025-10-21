<?php

namespace App\Livewire;

use Livewire\Component;
use App\Http\Controllers\AuthController;

class SignUp extends Component
{
    public $countryCode, $mobileNumber, $termsAccepted;

    public function render() {
        return view('livewire.sign-up');
    }

    public function signUp () {
        return $this->validate([
            'countryCode'  => 'required',
            'mobileNumber' => 'required|regex:/^\+\d{1,3}\s\d{4,14}(?:x.+)?$/',
            'termsAccepted' => 'accepted',
        ],[
            'countryCode.required' => 'The country code field is required.',
            'mobileNumber.required' => 'The phone number field is required.',
            'mobileNumber.regex' => 'The phone number format is invalid. Please use the format +<country code> <number>.',
            'termsAccepted.accepted' => 'You must accept the terms and conditions.',
        ]);

        // $newAuth = new AuthController();
        // return $newAuth->showLoginForm();
    }
}
