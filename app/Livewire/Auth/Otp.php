<?php

namespace App\Livewire\Auth;

use Livewire\Component;
use Illuminate\Http\Request;
use App\Http\Controllers\AuthController;
use Illuminate\Support\Facades\Validator;

class Otp extends Component
{
    public $otp = ['', '', '', '', '', ''];

    public function render()
    {
        return view('livewire.auth.otp');
    }

    public function verifyOtp() {
        try {
            $otp =  implode('', $this->otp);
            $request = ['otp' => $otp];

            $validatedData = Validator::make($request, [
                'otp' => 'required|numeric|digits:6'
            ])->validate();

            $newVerifyOtp = new AuthController();
            $otpVerificationResponse = $newVerifyOtp->userOtpVerification(new Request($request));

            if (!empty($otpVerificationResponse) && !empty($otpVerificationResponse['success']) && $otpVerificationResponse['success'] !== true):
                $this->dispatch('toast', type: 'error', message: $otpVerificationResponse['message']);
            else:
                $this->dispatch('toast', type: 'success', message: $otpVerificationResponse['message']); // Triggering toastr
                // exit;
                // $this->render = "livewire.auth.otp"; // Render new component
                // $this->dispatch('route', newTitle: 'success', newUrl: 'chat.dashboard'); // Changing route
                // $this->dispatch('toast', type: 'success', message: $otpVerificationResponse['message']); // Triggering toastr
            endif;
        } catch (Exception $e) {
            $this->dispatch('toast', type: 'error', message: 'Something went wrong! Try again later.');
        }
    }

}
