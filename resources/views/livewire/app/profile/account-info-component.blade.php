<div>
    <section class="google_sign_up_wrapper">
        <div class="horizontal-m-w">
            <form wire:submit.prevent='updateData' class="form_area h-full-screen space-between mt-0 pt-12">
                <div class="w-100">
                    <div class="back_btn_grid">
                        <button type="button" class="page_back_btn" onclick="history.back()">
                            <img src="{{ asset('assets/app/icons/arrow-left.svg') }}" alt="arrow left" />
                        </button>
                        <h3>Account Information</h3>
                    </div>
                    <div class="user_image_area mx-auto">
                        <div class="user_img">
                            <img src="{{ asset('assets/app/images/user/user_image.png') }}" alt="user image" />
                        </div>
                        <label for="userFileUpload" class="change_icon">
                            <img src="{{ asset('assets/app/icons/image_change.svg') }}" alt="image change icon" />
                        </label>
                        <input type="file" id="userFileUpload" hidden />
                    </div>
                    <div class="status_area">
                        <div class="status_grid">
                            <img src="{{ asset('assets/app/icons/disc.svg') }}" alt="disc icon" class="disc_icon" />
                            <h4>Online Status</h4>
                            <div class="custom_switch_area custom_switch_red d-flex justify-content-end">
                                <label class="switch">
                                    <input type="checkbox" @if (user()->online_status == 1) checked @endif
                                        wire:model.live="online_status" />
                                    <span class="slider round"></span>
                                </label>
                            </div>
                        </div>
                        <p>You’ll remain Online for as long as the is open</p>
                    </div>
                    <div class="mt-24">
                        <div class="input_row">
                            <label for="first_name" class="form_label">First name</label>
                            <input type="text" wire:model.blur='first_name' placeholder="Enter your first name"
                                class="input_field" />
                            @error('first_name')
                                <div class="form_status error">{{ $message }}</div>
                            @enderror
                        </div>
                        <div class="input_row">
                            <label for="last_name" class="form_label">Last name</label>
                            <input type="text" wire:model.blur='last_name' placeholder="Enter your last name"
                                class="input_field" />
                            @error('last_name')
                                <div class="form_status error">{{ $message }}</div>
                            @enderror
                        </div>
                        <div class="input_row">
                            <label for="email" class="form_label">Email*</label>
                            <input type="email" wire:model.blur='email' placeholder="Enter email"
                                class="input_field" />
                            @error('email')
                                <div class="form_status error">{{ $message }}</div>
                            @enderror
                        </div>
                        <div class="input_row">
                            <label for="phone" class="form_label">Phone*</label>
                            <input type="text" wire:model.blur='phone' placeholder="Enter email"
                                class="input_field" />
                            @error('phone')
                                <div class="form_status error">{{ $message }}</div>
                            @enderror
                        </div>
                    </div>
                </div>
                <div class="w-100" style="margin-bottom: 90px;">
                    <button type="submit" class="login_btn">
                        {!! loadingStateWithText('updateData', 'Update') !!}
                    </button>
                </div>
            </form>
        </div>
    </section>
    @livewire('app.layouts.inc.header')
</div>
