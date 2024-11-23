<div>
    <!-- Header Section  -->
    <header class="Header_wrapper">
        <ul class="menu_list d-flex align-items-center justify-content-evenly flex-wrap">
            <li>
                <a href="{{ route('client.home') }}" class="menu_list_item active_menu">
                    <img src="{{ asset('assets/app/icons/home.svg') }}" alt="home icon" class="inactive_icon" />
                    <img src="{{ asset('assets/app/icons/home_active.svg') }}" alt="home active icon"
                        class="active_icon" />
                    <span>Home</span>
                </a>
            </li>
            <li>
                <a href="{{ route('client.chats') }}" class="menu_list_item">
                    <img src="{{ asset('assets/app/icons/mail.svg') }}" alt="home icon" class="inactive_icon" />
                    <img src="{{ asset('assets/app/icons/mail_active.svg') }}" alt="home active icon"
                        class="active_icon" />
                    <span>Message</span>
                </a>
            </li>
            <li>
                <a href="{{ route('client.notifications') }}" class="menu_list_item">
                    <img src="{{ asset('assets/app/icons/notification.svg') }}" alt="home icon" class="inactive_icon" />
                    <img src="{{ asset('assets/app/icons/notification_active.svg') }}" alt="home active icon"
                        class="active_icon" />
                    <span>Notification</span>
                </a>
            </li>
            <li>
                <a href="{{ route('client.profile') }}" class="menu_list_item">
                    <img src="{{ asset('assets/app/icons/user.svg') }}" alt="home icon" class="inactive_icon" />
                    <img src="{{ asset('assets/app/icons/user_active.svg') }}" alt="home active icon"
                        class="active_icon" />
                    <span>Profile</span>
                </a>
            </li>
        </ul>
    </header>
</div>
