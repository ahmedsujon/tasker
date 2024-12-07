<div>
    <style>
        .client_user_info_grid .img img {
            border-radius: 50% !important;
        }
    </style>
    <section class="client_profile_wrapper mt-12">
        <div class="d-flex-between">
            <h2 class="page_title text-black">Profile</h2>
            <button type="button" id="alertModalOpen">
                <img src="{{ asset('assets/app/icons/log-out-02.svg') }}" alt="log out icon" />
            </button>
        </div>
        <div class="horizontal-m-w" style="margin-bottom: 100px;">
            <div class="client_user_info_grid">
                <div class="img">
                    <img src="{{ asset(user()->avatar ? user()->avatar : 'assets/images/placeholder.jpg') }}"
                        alt="client image" />
                </div>
                <div>
                    <h3>{{ user()->first_name }} {{ user()->last_name }}</h3>
                    <h4>Tasker Provider</h4>
                </div>
            </div>
            <div class="account_area">
                <h4 class="item_short_title">Account</h4>
                <a href="{{ route('client.accountInformation', ['id' => user()->id]) }}" class="account_item_grid">
                    <img src="{{ asset('assets/app/icons/user-03.svg') }}" alt="user icon" class="user_icon" />
                    <span class="title"> Account Information </span>
                    <img src="{{ asset('assets/app/icons/chevron-down.svg') }}" alt="right arrow" class="right_icon" />
                </a>
                <a href="{{ route('client.billingPayment') }}" class="account_item_grid">
                    <img src="{{ asset('assets/app/icons/credit-card-01.svg') }}" alt="user icon" class="user_icon" />
                    <span class="title">Billing Payment </span>
                    <img src="{{ asset('assets/app/icons/chevron-down.svg') }}" alt="right arrow" class="right_icon" />
                </a>
                <a href="{{ route('client.orderHistory') }}" class="account_item_grid">
                    <img src="{{ asset('assets/app/icons/shopping-bag-03.svg') }}" alt="user icon" class="user_icon" />
                    <span class="title">Order Management </span>
                    <img src="{{ asset('assets/app/icons/chevron-down.svg') }}" alt="right arrow" class="right_icon" />
                </a>
            </div>
            {{-- <div class="account_area">
                <h4 class="item_short_title">Change Language</h4>
                <div class="dropdown">
                    <a id="dropdownMenuButton" class="account_item_grid dropdown-toggle" href="#" role="button"
                        data-bs-toggle="dropdown" aria-expanded="false">
                        <img src="{{ asset('assets/app/icons/check-circle.svg') }}" alt="check circle icon"
                            class="user_icon" />
                        <span class="title" id="selectedLanguage"> English </span>
                        <img src="{{ asset('assets/app/icons/chevron-down.svg') }}" alt="right arrow"
                            class="right_icon" />
                    </a>

                    <ul class="dropdown-menu" id="dropdownMenuButtonList">
                        <li>
                            <button type="button" class="dropdown-item selected" data-value="English">
                                English
                            </button>
                        </li>
                        <li>
                            <button type="button" class="dropdown-item" data-value="Arabic">
                                Arabic
                            </button>
                        </li>
                        <li>
                            <button type="button" class="dropdown-item" data-value="Bangla">
                                Bangla
                            </button>
                        </li>
                        <li>
                            <button type="button" class="dropdown-item" data-value="Hindi">
                                Hindi
                            </button>
                        </li>
                    </ul>
                </div>
            </div> --}}
            <div class="account_area">
                <h4 class="item_short_title">Settings</h4>
                <a href="{{ route('client.profileSettings') }}" class="account_item_grid">
                    <img src="{{ asset('assets/app/icons/settings-02.svg') }}" alt="user icon" class="user_icon" />
                    <span class="title">Settings</span>
                    <img src="{{ asset('assets/app/icons/chevron-down.svg') }}" alt="right arrow" class="right_icon" />
                </a>
            </div>
            <div class="terms_area d-flex justify-content-center align-items-center flex-wrap g-smm">
                <a href="{{ route('client.termsCondition') }}">Terms & Condition </a> <span>&</span>
                <a href="{{ route('client.privacyPolicy') }}">Privacy Policy</a>
            </div>
        </div>
    </section>
    @livewire('client.layouts.inc.header')
    <!-- Alert Area  -->
    <div class="modal_alert_area" id="alertModalArea">
        <ul class="list_alert">
            <li>
                <a href="{{ route('client.logout') }}" type="button" class="sign_out_btn"
                    onclick="event.preventDefault(); document.getElementById('logout-form').submit();">Sign out</a>
                <form id="logout-form" style="display: none;" method="POST" action="{{ route('client.logout') }}">
                    @csrf
                </form>
            </li>
            <li>
                <button type="button" class="list_close_btn alertModalCloseBtn">
                    Cancel
                </button>
            </li>
        </ul>
    </div>
    <div class="overlay alertModalCloseBtn" id="alertOverlay"></div>
</div>
@push('scripts')
    <script>
        const dropdownItems = document.querySelectorAll(
            "#dropdownMenuButtonList .dropdown-item"
        );
        const dropdownButton = document.getElementById("dropdownMenuButton");
        const titleSpan = dropdownButton.querySelector("#selectedLanguage");

        dropdownItems.forEach((item) => {
            item.addEventListener("click", function() {
                // Update the button text
                titleSpan.textContent = item.dataset.value;

                // Remove the selected all class
                dropdownItems.forEach((el) => el.classList.remove("selected"));

                // Add 'selected' class
                this.classList.add("selected");
            });
        });
    </script>
@endpush
