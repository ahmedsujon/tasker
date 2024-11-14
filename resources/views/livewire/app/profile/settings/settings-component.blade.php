<div>
    <div class="back_btn_grid mt-12">
        <button type="button" class="page_back_btn" onclick="history.back()">
            <img src="{{ asset('assets/app/icons/arrow-left.svg') }}" alt="arrow left" />
        </button>
        <h3>Settings</h3>
    </div>
    <!-- Client Profile Section  -->
    <section class="client_profile_wrapper client_settings_wrapper mt-12">
        <div class="horizontal-m-w">
            <div class="account_area">
                <h4 class="item_short_title">Settings</h4>
                <a href="{{ route('user.settingsNotification') }}" class="account_item_grid">
                    <img src="{{ asset('assets/app/icons/bell-01.svg') }}" alt="notification icon" class="user_icon" />
                    <span class="title"> Notification Settings </span>
                    <img src="{{ asset('assets/app/icons/chevron-down.svg') }}" alt="right arrow" class="right_icon" />
                </a>
                <a href="{{ route('user.settingsSupport') }}" class="account_item_grid">
                    <img src="{{ asset('assets/app/icons/help-circle.svg') }}" alt="support icon" class="user_icon" />
                    <span class="title">Tasker Support</span>
                    <img src="{{ asset('assets/app/icons/chevron-down.svg') }}" alt="right arrow" class="right_icon" />
                </a>
                {{-- <a href="#" class="account_item_grid">
                    <img src="{{ asset('assets/app/icons/check-verified-02.svg') }}" alt="user icon"
                        class="user_icon" />
                    <span class="title">2-step verification </span>
                    <img src="{{ asset('assets/app/icons/chevron-down.svg') }}" alt="right arrow" class="right_icon" />
                </a> --}}
                <a href="{{ route('user.settingsPassword') }}" class="account_item_grid">
                    <img src="{{ asset('assets/app/icons/lock-unlocked-01.svg') }}" alt="user icon" class="user_icon" />
                    <span class="title">Change Password </span>
                    <img src="{{ asset('assets/app/icons/chevron-down.svg') }}" alt="right arrow" class="right_icon" />
                </a>
                <button type="button" class="account_item_grid" id="alertModalOpen">
                    <img src="{{ asset('assets/app/icons/user-x-01.svg') }}" alt="user icon" class="user_icon" />
                    <span class="title">Delete Account </span>
                    <img src="{{ asset('assets/app/icons/chevron-down.svg') }}" alt="right arrow" class="right_icon" />
                </button>
            </div>
        </div>
    </section>
    <!-- Alert Area  -->
    <div class="modal_alert_area" id="alertModalArea">
        <h3>Are your sure?</h3>
        <p>
            If you delete your account you will lose all your saved date and
            preferecnes
        </p>
        <div class="alert_btn_grid">
            <button type="button" class="alert_close_btn alertModalCloseBtn">
                Cancel
            </button>
            <button type="button" class="alert_action_btn">Delete</button>
        </div>
    </div>
</div>
