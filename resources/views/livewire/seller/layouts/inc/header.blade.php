<div>
    <!-- Header Section  -->
    <header class="Header_wrapper">
        <ul class="menu_list d-flex align-items-center justify-content-evenly flex-wrap">
            <li>
                <a href="{{ route('seller.dashboard') }}" class="menu_list_item active_menu">
                    <img src="{{ asset('assets/app/icons/header/home.svg') }}" alt="home icon" class="inactive_icon" />
                    <img src="{{ asset('assets/app/icons//header/home-active.svg') }}" alt="home active icon"
                        class="active_icon" />
                    <span>Home</span>
                </a>
            </li>
            <li>
                <a href="{{ route('seller.sellerJobs') }}" class="menu_list_item">
                    <img src="{{ asset('assets/app/icons/header/search.svg') }}" alt="search icon"
                        class="inactive_icon" />
                    <img src="{{ asset('assets/app/icons/header/search-active.svg') }}" alt="search active icon"
                        class="active_icon" />
                    <span>Jobs</span>
                </a>
            </li>
            <li>
                <a href="{{ route('seller.sellerMessages') }}" class="menu_list_item">
                    <img src="{{ asset('assets/app/icons/header/message.svg') }}" alt="message icon"
                        class="inactive_icon" />
                    <img src="{{ asset('assets/app/icons/header/message-active.svg') }}" alt="message active icon"
                        class="active_icon" />
                    <span>Message</span>
                </a>
            </li>
            <li>
                <a href="{{ route('seller.sellerProfile') }}" class="menu_list_item">
                    <img src="{{ asset('assets/app/icons/header/user.svg') }}" alt="user icon" class="inactive_icon" />
                    <img src="{{ asset('assets/app/icons/header/user-active.svg') }}" alt="user active icon"
                        class="active_icon" />
                    <!--display user image  if user logined  -->
                    <!-- <img
                src="assets/images/user/user_image.png"
                alt="user image"
                class="user_image"
              /> -->
                    <span>Profile</span>
                </a>
            </li>
        </ul>
    </header>
</div>
