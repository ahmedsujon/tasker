<div>
    <section class="forget_password_wrapper">
        <form wire:submit.prevent='sendEmail' class="form_area h-full-screen space-between horizontal-m-w pt-12">
            <div class="w-100">
                <button type="button" class="page_back_btn" onclick="history.back()">
                    <img src="{{ asset('assets/app/icons/arrow-left.svg') }}" alt="arrow left" />
                </button>
                <h2 class="page_inner_title">Forgot Password</h2>
                <h4 class="page_inner_para">
                    Don’t worry! we will send an OTP to your registered email address.
                </h4>
                @if (session()->has('error'))
                    <div class="alert alert-danger text-center">{{ session('error') }}</div>
                @endif
                @if (session()->has('success'))
                    <div class="alert alert-success text-center">{{ session('success') }}</div>
                @endif
                <div class="input_row telephone_int_area">
                    <label for="" class="form_label">Email</label>
                    <input type="email" wire:model.blur='email' placeholder="Enter you email" class="input_field"
                        id="telephone" />
                    @error('email')
                        <div class="form_status error">{{ $message }}</div>
                    @enderror
                </div>
            </div>
            <div class="w-100">
                <button type="submit" class="login_btn">
                    {!! loadingStateWithText('sendEmail', 'Continue') !!}
                    <img src="{{ asset('assets/app/icons/arrow-right.svg') }}" alt="arrow icon" />
                </button>
            </div>
        </form>
    </section>
</div>
