<div>
    <section class="login_form_wrapper horizontal-m-w">
        <h1 class="page_title">Tasker</h1>
        <h2 class="page_inner_title">Log In</h2>
        <h4>Don’t have an account? <a href="{{ route('onboarding') }}">Sign Up</a></h4>
        <form class="form_area" wire:submit.prevent='userLogin'>
            <div class="input_row">
                <label for="" class="form_label">Email </label>
                <input type="text" wire:model.blur='email' placeholder="Enter your email" class="input_field" />
                @error('email')
                    <div class="form_status error">{{ $message }}</div>
                @enderror
            </div>
            <div class="input_row">
                <label for="" class="form_label">Password </label>
                <div class="password_area">
                    <input type="password" wire:model.blur='password' placeholder="Enter your password"
                        class="input_field" />
                    <div class="password_btn_area">
                        <button type="button" class="eye_open passwordVisibilityBtn">
                            <img src="{{ asset('assets/app/icons/eye.svg') }}" alt="eye icon" />
                        </button>
                        <button type="button" class="eye_close passwordVisibilityBtn">
                            <img src="{{ asset('assets/app/icons/eye-off.svg') }}" alt="eye slash icon" />
                        </button>
                    </div>
                    @error('password')
                        <div class="form_status error">{{ $message }}</div>
                    @enderror
                </div>
            </div>
            <div class="remember_area d-flex-between">
                <div class="form-check d-flex align-items-center flex-wrap gap-2 ps-2">
                    <input class="form-check-input" type="checkbox" value="" id="rememberCheckbox" />
                    <label class="form-check-label" for="rememberCheckbox">
                        Remember Password
                    </label>
                </div>
                <a href="{{ route('client.reset.password') }}" class="forget_password">Forgot Password</a>
                <button type="submit" class="login_btn" {!! disabledOn('userLogin') !!}>
                    {!! loadingStateWithText('userLogin', 'Log In') !!} <img src="{{ asset('assets/app/icons/arrow-right.svg') }}"
                        alt="arrow icon" />
                </button>
            </div>
        </form>
        <div class="or">Or</div>
        <button type="button" class="others_option_item">
            <img src="{{ asset('assets/app/icons/gmail.svg') }}" alt="gmail icon" />
            <span>Continue with google</span>
        </button>
        <button type="button" class="others_option_item">
            <img src="{{ asset('assets/app/icons/apple.svg') }}" alt="apple icon" />
            <span>Continue with apple</span>
        </button>
        {{-- <div class="as_guest">
            Continue as a <button type="button">Guest</button>
        </div> --}}
    </section>
</div>
@push('scripts')
    {{-- <script>
        window.addEventListener('login_success', event => {
            setTimeout(() => {
                window.location.href = "{{ route('client.home') }}";
            }, 500);
        });
    </script> --}}
@endpush
