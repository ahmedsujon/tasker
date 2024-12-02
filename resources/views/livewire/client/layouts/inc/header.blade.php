<div>
    <!-- Header Section  -->
    <header class="Header_wrapper">
        <ul class="menu_list d-flex align-items-center justify-content-evenly flex-wrap">
            <li>
                <a href="{{ route('client.home') }}" class="menu_list_item active_menu">
                    @if (request()->is('client/home'))
                        <img src="{{ asset('assets/app/icons/home_active.svg') }}" alt="home active icon" class="" />
                        <span>Home</span>
                    @else
                        <img src="{{ asset('assets/app/icons/home.svg') }}" alt="home icon" class="" />
                        <span>Home</span>
                    @endif
                </a>
            </li>
            <li>
                <a href="{{ route('client.chats') }}" class="menu_list_item">
                    @if (request()->is('client/chats'))
                        <img src="{{ asset('assets/app/icons/mail_active.svg') }}" alt="home active icon"
                            class="" />
                        <span>Message</span>
                    @else
                        <img src="{{ asset('assets/app/icons/mail.svg') }}" alt="home icon" class="inactive_icon" />
                        <span>Message</span>
                    @endif
                </a>
            </li>
            <li>
                <a href="{{ route('client.notifications') }}" class="menu_list_item">
                    @if (request()->is('client/notifications'))
                        <img src="{{ asset('assets/app/icons/notification_active.svg') }}" alt="home active icon"
                            class="" />
                        <span>Notification</span>
                    @else
                        <img src="{{ asset('assets/app/icons/notification.svg') }}" alt="home icon" class="" />
                        <span>Notification</span>
                    @endif
                </a>
            </li>
            <li>
                <a href="{{ route('client.profile') }}" class="menu_list_item">
                    @if (request()->is('client/profile'))
                        <img src="{{ asset('assets/app/icons/user_active.svg') }}" alt="home active icon"
                            class="" />
                        <span>Profile</span>
                    @else
                        <img src="{{ asset('assets/app/icons/user.svg') }}" alt="home icon" class="" />
                        <span>Profile</span>
                    @endif
                </a>
            </li>
        </ul>
    </header>
</div>
