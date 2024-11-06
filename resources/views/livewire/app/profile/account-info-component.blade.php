<div>
    <section class="google_sign_up_wrapper">
        <div class="horizontal-m-w">
            <form action="" class="form_area h-full-screen space-between mt-0 pt-12">
                <div class="w-100">
                    <div class="back_btn_grid">
                        <button type="button" class="page_back_btn">
                            <img src="{{ asset('assets/app/icons/arrow-left.svg') }}" alt="arrow left" />
                        </button>
                        <h3>Account Information</h3>
                    </div>
                    <div class="user_image_area mx-auto">
                        <div class="user_img">
                            <img src="{{ asset('assets/app/images/user/user_image.png') }}" alt="user image" />
                        </div>
                        <a href="#" class="change_icon">
                            <img src="{{ asset('assets/app/icons/image_change.svg') }}" alt="image change icon" />
                        </a>
                    </div>
                    <div class="status_area">
                        <div class="status_grid">
                            <img src="{{ asset('assets/app/icons/disc.svg') }}" alt="disc icon" class="disc_icon" />
                            <h4>Online Status</h4>
                            <div class="custom_switch_area custom_switch_red d-flex justify-content-end">
                                <label class="switch">
                                    <input type="checkbox" />
                                    <span class="slider round"></span>
                                </label>
                            </div>
                        </div>
                        <p>You’ll remain Online for as long as the is open</p>
                    </div>
                    <div class="mt-24">
                        <div class="input_row">
                            <label for="" class="form_label">First name</label>
                            <input type="text" placeholder="Enter your first name" class="input_field" />
                            <div class="form_status error">Email is required</div>
                        </div>
                        <div class="input_row">
                            <label for="" class="form_label">Last name</label>
                            <input type="text" placeholder="Enter your last name" class="input_field" />
                        </div>
                        <div class="input_row">
                            <label for="" class="form_label">Email*</label>
                            <input type="text" placeholder="Enter email" class="input_field" />
                        </div>
                    </div>
                </div>
                <div class="w-100">
                    <button type="submit" class="login_btn">Save</button>
                </div>
            </form>
        </div>
    </section>
</div>
