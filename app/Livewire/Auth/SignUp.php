<?php

namespace App\Livewire\Auth;

use App\Livewire\Auth\Otp;
use Livewire\Component;
use Illuminate\Http\Request;
use App\Http\Controllers\AuthController;

class SignUp extends Component
{
    public $countryCode = '+91', $mobileNumber, $termsAccepted;
    public $otp = [];

    public $render = "livewire.auth.sign-up";

    public function render(): view {
        return view($this->render);
    }

    public function userSignUp (): void {
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

            $newUserSignup = new AuthController();
            $registrationResponse = $newUserSignup->newUserSignup(new Request($validatedData));
            if (!empty($registrationResponse) && !empty($registrationResponse['success']) && $registrationResponse['success'] !== true):
                $this->dispatch('toast', type: 'error', message: $registrationResponse['message']);
            else:
                $this->render = "livewire.auth.otp"; // Render new component
                $this->dispatch('route', newTitle: 'success', newUrl: 'signup.otp'); // Changing route
                $this->dispatch('toast', type: 'success', message: $registrationResponse['message']); // Triggering toastr
            endif;
        } catch (Exception $e) {
            $this->dispatch('toast', type: 'error', message: 'Something went wrong! Try again later.');
        }
    }

    public function verifyOtp () {
        $newOtpVerfication = new Otp();
        return $newOtpVerfication->verifyOtp();
    }

}
