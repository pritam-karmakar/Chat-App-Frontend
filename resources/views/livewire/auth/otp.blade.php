
<form wire:submit.prevent="verifyOtp" class="flex-fill">
    @csrf
    <div>
        <div class=" mx-auto mb-5 text-center">
            <img src="{{ asset('build/img/full-logo.svg') }}" class="img-fluid" alt="Logo">
        </div>
        <div class="card">
            <div class="card-body">

                <div class=" mb-4">
                    <h2 class="mb-2">OTP Verification</h2>
                    <p class="mb-0 fs-16">Please enter the OTP sent to your phone number.</p>
                </div>

                <div class="row">
                    <div class="col-md-12">
                        <div class="mb-3">
                            <label class="form-label">OTP <span class="text-danger">*<span></label>
                                
                                <div class="digit-group mb-2" data-group-name="digits" data-autosubmit="false" autocomplete="off">
                                    <input type="text" id="digit-1" wire:model.live="otp1" name="digit-1" data-next="digit-2" />
                                    <input type="text" id="digit-2" wire:model.live="otp2" name="digit-2" data-next="digit-3" data-previous="digit-1" />
                                    <input type="text" id="digit-3" wire:model.live="otp3" name="digit-3" data-next="digit-4" data-previous="digit-2" />
                                    <span class="splitter">&ndash;</span>
                                    <input type="text" id="digit-4" wire:model.live="otp4" name="digit-4" data-next="digit-5" data-previous="digit-3" />
                                    <input type="text" id="digit-5" wire:model.live="otp5" name="digit-5" data-next="digit-6" data-previous="digit-4" />
                                    <input type="text" id="digit-6" wire:model.live="otp6" name="digit-6" data-previous="digit-5" />
                                </div>
                                
                            @error('mobileNumber')
                                <div class="text-danger">
                                    {{ $message }}
                                </div>
                            @enderror
                        </div>
                    </div>
                </div>

                <div class="mb-4">
                    <button type="submit" class="btn btn-primary w-100 justify-content-center">Verify OTP</button>
                </div>

            </div>
        </div>
        <div class="mt-5 text-center">
            <p class="mb-0 text-gray-9">Already have a account? <a href="signin.html" class="link-primary">Sign In</a></p>
        </div>
    </div>
</form>