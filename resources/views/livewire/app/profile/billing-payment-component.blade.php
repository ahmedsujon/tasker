<div>
    <section class="billing_payment_wrapper">
        <div class="h-full-screen space-between horizontal-m-w pt-12">
            <div class="w-100">
                <div class="back_btn_grid">
                    <button type="button" class="page_back_btn">
                        <img src="{{ asset('assets/app/icons/arrow-left.svg') }}" alt="arrow left" />
                    </button>
                    <h3>Billing & Payments</h3>
                </div>
                <div class="billing_area pt-12">
                    <h3>Balance</h3>
                    <div class="card_area"
                        style="
                  background-image: url({{ asset('assets/app/images/client/billing_card_bg.png') }});
                ">
                        <h4>Balance available</h4>
                        <h5>500.00 SAR</h5>
                        <button type="button" class="pay_now_btn">Pay Now</button>
                    </div>
                </div>
                <div class="billing_area">
                    <h3>Billing Methods</h3>
                    <p>
                        You haven’t set up any billing methods yet. Add a method so you
                        can hire when you’re reday
                    </p>
                </div>
            </div>
            <button type="submit" class="login_btn mt-24" style="margin-bottom: 90px;">
                + Add a billing method
            </button>
        </div>
    </section>
    @livewire('app.layouts.inc.header')
</div>