<div>
    <section class="account_success_wrapper payment_success_wrapper">
        <div class="h-full-screen space-between horizontal-m-w pt-12">
            <div class="text-center w-100">
                <div class="back_btn_grid">
                    <a href="{{ route('client.home') }}" type="button" class="page_back_btn">
                        <img src="{{ asset('assets/app/icons/close.svg') }}" alt="close icon" />
                    </a>

                </div>


            </div>
            <div class="text-center w-100">
                <div class="success_img mt-3">
                    <img src="{{ asset('assets/app/images/others/Well done--icon.png') }}" alt="well done check icon" />
                </div>
                <h4 class="page_inner_title">Your Payment was successful</h4>
                <p>
                    Thank you for your Payment. We will be in contact with more details shortly
                </p>
            </div>
            <div class="w-100 mt-24">
                <a href="{{ route('client.home') }}" style="color: white !important;" type="button" class="login_btn">Download the pdf invoice</a>
            </div>
        </div>
    </section>
</div>
