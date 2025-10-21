<?php

namespace App\Livewire;

use Livewire\Component;
use Illuminate\Http\Request;
use App\Http\Controllers\AuthController;

class SignUp extends Component
{
    public $countryCode = '+91', $mobileNumber, $termsAccepted;

    public function render() {
        return view('livewire.sign-up');
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
        return $newAuthSignup->newAuthSignup(new Request($validatedData));
    }
}
