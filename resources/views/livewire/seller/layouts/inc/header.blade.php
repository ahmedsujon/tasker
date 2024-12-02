<div>
    <!-- Header Section  -->
    <header class="Header_wrapper">
        <ul class="menu_list d-flex align-items-center justify-content-evenly flex-wrap">
            <li>
                <a href="{{ route('seller.dashboard') }}" class="menu_list_item active_menu">
                    @if (request()->is('seller/dashboard'))
                        <img src="{{ asset('assets/app/icons/header/home-active.svg') }}" alt="home active icon"
                            class="" />
                        <span>Home</span>
                    @else
                        <img src="{{ asset('assets/app/icons/header/home.svg') }}" alt="home icon" class="" />
                        <span>Home</span>
                    @endif
                </a>
            </li>
            <li>
                <a href="{{ route('seller.sellerJobs') }}" class="menu_list_item">
                    @if (request()->is('seller/seller-jobs'))
                        <img src="{{ asset('assets/app/icons/header/search-active.svg') }}" alt="search active icon"
                            class="" />
                        <span>Jobs</span>
                    @else
                        <img src="{{ asset('assets/app/icons/header/search.svg') }}" alt="search icon" class="" />
                        <span>Jobs</span>
                    @endif
                </a>
            </li>
            <li>
                <a href="{{ route('seller.sellerMessages') }}" class="menu_list_item">
                    @if (request()->is('seller/seller/messages'))
                        <img src="{{ asset('assets/app/icons/header/message-active.svg') }}" alt="message active icon"
                            class="" />
                        <span>Message</span>
                    @else
                        <img src="{{ asset('assets/app/icons/header/message.svg') }}" alt="message icon"
                            class="" />
                        <span>Message</span>
                    @endif
                </a>
            </li>
            <li>
                <a href="{{ route('seller.sellerProfile') }}" class="menu_list_item">
                    @if (request()->is('seller/seller-profile'))
                        <img src="{{ asset('assets/app/icons/header/user-active.svg') }}" alt="user active icon"
                            class="" />
                        <span>Profile</span>
                    @else
                        <img src="{{ asset('assets/app/icons/header/user.svg') }}" alt="user icon" class="" />
                        <span>Profile</span>
                    @endif
                </a>
            </li>
        </ul>
    </header>
</div>
