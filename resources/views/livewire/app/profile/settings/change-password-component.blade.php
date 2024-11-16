<div>
    <section class="forget_password_wrapper">
        <form action="" class="form_area h-full-screen space-between horizontal-m-w pt-12">
            <div class="w-100">
                <div class="back_btn_grid">
                    <button type="button" class="page_back_btn" onclick="history.back()">
                        <img src="{{ asset('assets/app/icons/arrow-left.svg') }}" alt="arrow left" />
                    </button>
                    <h3>Change Password</h3>
                </div>

                <div class="input_row mt-24">
                    <label for="" class="form_label">Old Password </label>
                    <div class="password_area">
                        <input type="password" placeholder="Enter old password" class="input_field" />
                        <div class="password_btn_area">
                            <button type="button" class="eye_open passwordVisibilityBtn">
                                <img src="{{ asset('assets/app/icons/eye.svg') }}" alt="eye icon" />
                            </button>
                            <button type="button" class="eye_close passwordVisibilityBtn">
                                <img src="{{ asset('assets/app/icons/eye-off.svg') }}" alt="eye slash icon" />
                            </button>
                        </div>
                    </div>
                    <div class="form_status error">
                        <img src="{{ asset('assets/app/icons/info-circle.svg') }}" alt="info icon" class="info_circle_red" />
                        You can’t save the new password with the previous password
                    </div>
                </div>
                <div class="input_row">
                    <label for="" class="form_label">New Password </label>
                    <div class="password_area">
                        <input type="password" placeholder="Enter new password" class="input_field" />
                        <div class="password_btn_area">
                            <button type="button" class="eye_open passwordVisibilityBtn">
                                <img src="{{ asset('assets/app/icons/eye.svg') }}" alt="eye icon" />
                            </button>
                            <button type="button" class="eye_close passwordVisibilityBtn">
                                <img src="{{ asset('assets/app/icons/eye-off.svg') }}" alt="eye slash icon" />
                            </button>
                        </div>
                    </div>
                    <div class="form_status success">Password is strong</div>
                </div>
                <div class="input_row">
                    <label for="" class="form_label">Confirm Password </label>
                    <div class="password_area">
                        <input type="password" placeholder="Enter your confirm password" class="input_field" />
                        <div class="password_btn_area">
                            <button type="button" class="eye_open passwordVisibilityBtn">
                                <img src="{{ asset('assets/app/icons/eye.svg') }}" alt="eye icon" />
                            </button>
                            <button type="button" class="eye_close passwordVisibilityBtn">
                                <img src="{{ asset('assets/app/icons/eye-off.svg') }}" alt="eye slash icon" />
                            </button>
                        </div>
                    </div>
                    <div class="form_status error">
                        <img src="{{ asset('assets/app/icons/info-circle.svg') }}" alt="info icon" class="info_circle_red" />
                        Password is weak
                    </div>
                </div>
            </div>
            <div class="w-100">
                <button type="submit" class="login_btn">Save</button>
            </div>
        </form>
    </section>
</div>
