<div>
    <section class="sing_up_form_wrapper login_form_wrapper horizontal-m-w">
        <h1 class="page_title">Tasker</h1>
        <h2 class="page_inner_title">Create account</h2>
        <h4>Already have an account? <a href="{{ route('login') }}">Log In</a></h4>
        <form class="form_area" wire:submit.prevent='userRegistration'>
            <div class="input_row">
                <label for="" class="form_label">First name</label>
                <input type="text" wire:model.blur='first_name' placeholder="Enter your first name"
                    class="input_field" />
                @error('first_name')
                    <div class="form_status error">{{ $message }}</div>
                @enderror
            </div>
            <div class="input_row">
                <label for="" class="form_label">Last name</label>
                <input type="text" wire:model.blur='last_name' placeholder="Enter your last name"
                    class="input_field" />
                @error('last_name')
                    <div class="form_status error">{{ $message }}</div>
                @enderror
            </div>
            <div class="input_row">
                <label for="" class="form_label">Email*</label>
                <input type="email" wire:model.blur='email' placeholder="Enter email" class="input_field" />
                @error('email')
                    <div class="form_status error">{{ $message }}</div>
                @enderror
            </div>
            <div class="input_row">
                <label for="" class="form_label">Create a password* </label>
                <div class="password_area">
                    <input type="password" wire:model.blur='password' placeholder="Enter your password"
                        class="input_field" />
                    <div class="password_btn_area">
                        <button type="button" class="eye_open passwordVisib0ilityBtn">
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
            <div class="input_row">
                <label for="" class="form_label">Confirm password* </label>
                <div class="password_area">
                    <input type="password" wire:model.blur='confirm_password' placeholder="Enter your password"
                        class="input_field" />
                    <div class="password_btn_area">
                        <button type="button" class="eye_open passwordVisibilityBtn">
                            <img src="{{ asset('assets/app/icons/eye.svg') }}" alt="eye icon" />
                        </button>
                        <button type="button" class="eye_close passwordVisibilityBtn">
                            <img src="{{ asset('assets/app/icons/eye-off.svg') }}" alt="eye slash icon" />
                        </button>
                    </div>
                    @error('confirm_password')
                        <div class="form_status error">{{ $message }}</div>
                    @enderror
                </div>
            </div>
            <div class="remember_area terms_checkbox_area">
                <div class="form-check ps-0">
                    <input class="form-check-input" type="checkbox" value="" id="rememberCheckbox" />
                    <label class="form-check-label" for="rememberCheckbox">
                        <span>By creating an account. I agree to Salesman </span>
                        <a href="#">Terms of Service</a>
                        <span> and</span>
                        <a href="#">Privacy Policy</a>
                    </label>
                </div>
            </div>
            <button type="submit" class="login_btn">{!! loadingStateWithText('userRegistration', 'Create Account') !!}</button>
        </form>
    </section>
</div>
@push('scripts')
    <script>
        window.addEventListener('login_success', event => {
            setTimeout(() => {
                window.location.href = "{{ route('user.home') }}";
            }, 500);
        });
    </script>
@endpush
