<div>
    <section class="client_profile_wrapper mt-12">
        <div class="d-flex-between">
            <h2 class="page_title text-black">Profile</h2>
            <a href="{{ route('user.logout') }}" type="button" id="alertModalOpen"
                onclick="event.preventDefault(); document.getElementById('logout-form').submit();">
                <img src="{{ asset('assets/app/icons/log-out-02.svg') }}" alt="log out icon" />
            </a>
            <form id="logout-form" style="display: none;" method="POST" action="{{ route('user.logout') }}">
                @csrf
            </form>

        </div>
        <div class="horizontal-m-w">
            <div class="client_user_info_grid">
                <div class="img">
                    <img src="{{ asset('assets/app/images/user/client_user2.png') }}" alt="client image" />
                </div>
                <div>
                    <h3>Ramjan Ahmed</h3>
                    <h4>Tasker Client</h4>
                </div>
            </div>
            <div class="account_area">
                <h4 class="item_short_title">Account</h4>
                <a href="{{ route('user.accountInformation', ['id' => user()->id]) }}" class="account_item_grid">
                    <img src="{{ asset('assets/app/icons/user-03.svg') }}" alt="user icon" class="user_icon" />
                    <span class="title"> Account Information </span>
                    <img src="{{ asset('assets/app/icons/chevron-down.svg') }}" alt="right arrow" class="right_icon" />
                </a>
                <a href="{{ route('user.billingPayment') }}" class="account_item_grid">
                    <img src="{{ asset('assets/app/icons/credit-card-01.svg') }}" alt="user icon" class="user_icon" />
                    <span class="title">Billing Payment </span>
                    <img src="{{ asset('assets/app/icons/chevron-down.svg') }}" alt="right arrow" class="right_icon" />
                </a>
                <a href="#" class="account_item_grid">
                    <img src="{{ asset('assets/app/icons/shopping-bag-03.svg') }}" alt="user icon" class="user_icon" />
                    <span class="title">Order Management </span>
                    <img src="{{ asset('assets/app/icons/chevron-down.svg') }}" alt="right arrow" class="right_icon" />
                </a>
            </div>
            <div class="account_area">
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
            </div>
            <div class="account_area">
                <h4 class="item_short_title">Settings</h4>
                <a href="#" class="account_item_grid">
                    <img src="{{ asset('assets/app/icons/settings-02.svg') }}" alt="user icon" class="user_icon" />
                    <span class="title">Settings</span>
                    <img src="{{ asset('assets/app/icons/chevron-down.svg') }}" alt="right arrow" class="right_icon" />
                </a>
            </div>
            <div class="terms_area d-flex justify-content-center align-items-center flex-wrap g-smm">
                <a href="#">Terms & Condition </a> <span>&</span>
                <a href="#">Privacy Policy</a>
            </div>
        </div>
    </section>
    @livewire('app.layouts.inc.header')
    <!-- Alert Area  -->
    <div class="modal_alert_area" id="alertModalArea">
        <ul class="list_alert">
            <li>
                <button type="button" class="sign_out_btn">Sign out</button>
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
