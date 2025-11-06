
<form wire:submit.prevent="userSignUp" class="flex-fill">
    @csrf
    <div>
        <div class=" mx-auto mb-5 text-center">
            <img src="{{ asset('build/img/full-logo.svg') }}" class="img-fluid" alt="Logo">
        </div>
        <div class="card">
            <div class="card-body">

                <div class=" mb-4">
                    <h2 class="mb-2">Login</h2>
                    <p class="mb-0 fs-16">Sign in to share moments with your friends!</p>
                </div>

                <div class="row">
                    <div class="col-md-12">
                        <div class="mb-3">
                            <label class="form-label">Mobile Number <span class="text-danger">*<span></label>
                            <div class="input-group mb-2 position-relative">
                                <span class="input-group-addon">
                                    <select class="form-select form-select-sm" wire:model.live="countryCode">
                                        @foreach (File::json(public_path('/country-codes/codes.json')) as $countryCode)
                                                <option value="{{ $countryCode }}" >{{ $countryCode }}</option>
                                        @endforeach
                                    </select>
                                </span>
                                <input type="tel" id="mobile_number" wire:model.live="mobileNumber" placeholder="e.g. 97845 63218" class="form-control">
                            </div>
                            @error('mobileNumber')
                                <div class="text-danger">
                                    {{ $message }}
                                </div>
                            @enderror
                            @if(session()->has('mobileNumberError'))
                                <div class="text-danger">
                                    {{ session('mobileNumberError') }}
                                </div>
                            @endif
                        </div>
                    </div>
                </div>

                <div class="mb-3">
                    <div class="form-wrap form-wrap-checkbox">
                        <div class="d-flex align-items-center">
                            <div class="form-check form-check-md mb-0">
                                <input class="form-check-input mt-0" type="checkbox" value="accepted" wire:model.live="termsAccepted">
                            </div>
                            <p class=" mb-0 ">I agree to
                                <a href="javascript:void(0)" class="link-primary">Terms of use </a>&
                                <a href="javascript:void(0)" class="link-primary">Privacy policy </a>
                            </p>
                        </div>
                    </div>
                    @error('termsAccepted')
                        <div class="text-danger">
                            {{ $message }}
                        </div>
                    @enderror
                </div>

                <div class="mb-4">
                    <button type="submit" class="btn btn-primary w-100 justify-content-center">Sign Up</button>
                </div>

                {{-- <div class="login-or mb-3">
                    <span class="span-or">Or sign up with </span>
                </div>

                <div class="d-flex align-items-center justify-content-center flex-wrap">
                    <div class="text-center me-2 flex-fill">
                        <a href="javascript:void(0);" class="fs-16 btn btn-white btn-shadow d-flex align-items-center justify-content-center">
                            <img class="img-fluid me-3" src="{{ asset('build/img/icons/google.svg') }}" alt="Google">
                            Google
                        </a>
                    </div>
                    <div class="text-center flex-fill">
                        <a href="javascript:void(0);" class="fs-16 btn btn-white btn-shadow d-flex align-items-center justify-content-center">
                            <img class="img-fluid me-3" src="{{ asset('build/img/icons/facebook.svg') }}" alt="Facebook">
                            Facebook
                        </a>
                    </div>
                </div> --}}

            </div>
        </div>
        <div class="mt-5 text-center">
            <p class="mb-0 text-gray-9">Already have a account? <a href="javascript:void(0)" class="link-primary">Sign In</a></p>
        </div>
    </div>
</form>