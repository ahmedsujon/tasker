<div>
    <section class="forget_password_wrapper">
        <form wire:submit.prevent='changePassword' class="form_area h-full-screen space-between horizontal-m-w pt-12">
            <div class="w-100">
                <button type="button" class="page_back_btn">
                    <img src="{{ asset('assets/app/icons/arrow-left.svg') }}" alt="arrow left" />
                </button>
                <h2 class="page_inner_title">Create new password</h2>
                <h4 class="page_inner_para">
                    Your new password must be different from previously used
                    passwords.
                </h4>
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
                <div class="input_row">
                    <label for="" class="form_label">Re-Password </label>
                    <div class="password_area">
                        <input type="password" wire:model.blur='confirm_password' placeholder="Enter your re-password"
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
            </div>
            <div class="w-100">
                <button type="submit" class="login_btn">{!! loadingStateWithText('changePassword', 'Create  Password') !!}</button>
            </div>
        </form>
    </section>
</div>
