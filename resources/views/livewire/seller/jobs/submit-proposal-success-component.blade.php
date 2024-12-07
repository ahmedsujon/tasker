<div>
    <main class="main_content_area">
        <!--  Account Success Section  -->
        <section class="account_success_wrapper payment_success_wrapper">
            <div class="h-full-screen space-between horizontal-m-w pt-12">
                <div class="text-center w-100">
                    <div class="back_btn_grid">
                        <a type="button" href="{{ route('seller.dashboard') }}" class="page_back_btn">
                            <img src="{{ asset('assets/app/icons/close.svg') }}" alt="close icon" />
                        </a>
                    </div>
                </div>
                <div class="text-center w-100">
                    <div class="success_img mt-3">
                        <img src="{{ asset('assets/app/images/others/Well done--icon.png') }}" alt="well done check icon" />
                    </div>
                    <h4 class="page_inner_title">Your proposal was submitted.</h4>
                </div>
                <div class="w-100 mt-24">
                    <a type="button" href="{{ route('seller.dashboard') }}" class="login_btn login_btn_sm">Done</a>
                </div>
            </div>
        </section>
    </main>
</div>
