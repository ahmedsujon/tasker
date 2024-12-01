<div>
    <!-- Freelancer Header  Section  -->
    <section class="freelancer_header_wrapper">
        <div class="header_grid">
            <a href="#" class="logo">
                <img src="{{ asset('assets/app/images/header/logo-whtie.svg') }}" alt="logo white" />
            </a>
            <ul class="notification_list d-flex align-items-center justify-content-end flex-wrap">
                <li>
                    <a href="#">
                        <img src="{{ asset('assets/app/icons/heart-white.svg') }}" alt="heart icon" />
                    </a>
                </li>
                <li>
                    <a href="#">
                        <img src="{{ asset('assets/app/icons/bell-white.svg') }}" alt="bell icon" />
                    </a>
                </li>
            </ul>
        </div>
        <div class="user_info_area">
            <h3>Welcome to tasker</h3>
            <h1>{{ user()->first_name }} {{ user()->last_name }}</h1>
        </div>
    </section>
    <!-- Earning Overview Section  -->
    <section class="earning_overview_wrapper">
        <h1>Earnings</h1>
        <div class="overview_card">
            <div class="avaiable_balance_area">
                <h4>Available balance</h4>
                <h2>SAR 2,543.00</h2>
                <a href="{{ route('seller.sellerBanks') }}" class="widthraw_earning_btn">Withdraw earning</a>
            </div>
            <div class="earning_grid_area">
                <div class="earning_grid">
                    <div>
                        <h5>Total earnings</h5>
                        <h3>SAR 2,543.00</h3>
                    </div>
                    <div>
                        <h5>Earning in April</h5>
                        <h3>SAR 1,342.00</h3>
                    </div>
                </div>
                <div class="earning_grid">
                    <div>
                        <h5>Upcoming earning</h5>
                        <h3 class="text-f60">SAR 700.00</h3>
                    </div>
                    <div>
                        <h5>Active orders</h5>
                        <h3>3</h3>
                    </div>
                </div>
            </div>
        </div>
        <div class="job_seats_area">
            <h1>Jobs Stats</h1>
            <div class="job_seat_grid earning_grid">
                <div>
                    <h5>Job applied</h5>
                    <h3>50</h3>
                </div>
                <div>
                    <h5>Job done</h5>
                    <h3>10</h3>
                </div>
                <div>
                    <h5>Job rejected</h5>
                    <h3>15</h3>
                </div>
            </div>
        </div>
        <div class="proposal_area d-flex-between" style="margin-bottom: 100px;">
            <h3>Proposal</h3>
            <a href="#">
                <img src="{{ asset('assets/app/icons/arrow-up-right.svg') }}" alt="arrow icon" />
            </a>
        </div>
    </section>
    @livewire('seller.layouts.inc.header')
</div>
