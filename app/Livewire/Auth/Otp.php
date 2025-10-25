<?php

namespace App\Livewire\Auth;

use Livewire\Component;
use Illuminate\Support\Facades\Request;
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
            $otp = implode('', $this->otp);

            $validatedData = $this->validate([
                'otp', 'required|numeric|digits:5'
            ]);

            $newUserSignup = new AuthController();
            $registrationResponse = $newUserSignup->userOtpVerification(new Request($validatedData));
            
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
    
}
