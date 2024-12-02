<div>
    <section class="get_paid_now_wrapper horizontal-m-w pt-12">
        <div class="back_btn_grid">
            <button type="button" class="page_back_btn" onclick="history.back()">
                <img src="{{ asset('assets/app/icons/arrow-left.svg') }}" alt="arrow left" />
            </button>
            <h3>Get paid now</h3>
        </div>
        <div class="sar_headers mt-32">
            <div class="icon">
                <h4>SAR</h4>
            </div>
            <h5>The payment will get paid into your account weekly basis.</h5>
        </div>
        @foreach ($bank_accounts as $bank_account)
            <div class="get_payment_card">
                {{-- <div class="default">Default</div> --}}
                <h4>Withdrawal method</h4>
                <h2>{{ $bank_account->bank_name }}</h2>
                <div class="d-flex align-items-center justify-content-center gap-2 mt-2">
                    <h3>Account no:
                        {{ str_repeat('*', strlen($bank_account->account_number) - 4) . substr($bank_account->account_number, -4) }}
                    </h3>
                    <a href="#" class="edit_btn"> Edit </a>
                </div>
                <button type="button" class="get_sar_btn modalOpenBtn">
                    Get paid (SAR 635)
                </button>
                <p>You would receive SAR 635.75 each week for 4 weeks.</p>
                <a href="{{ route('seller.sellerBankCreate') }}" type="button" class="add_payment_btn">
                    + Add new payment method
                </a>
            </div>
        @endforeach
    </section>
    </main>

    <!-- Modal Form   -->
    <div class="modal_area payout_process_modal" id="modalArea">
        <img src="{{ asset('assets/app/icons/check-success.svg') }}" alt="check circle" />
        <h3 class="mt-32">Payout in process</h3>
        <h4>You will get paid from today next 7 days later</h4>
        <h5 class="mt-32">Today: 20 April 2024</h5>
        <h5>Paid date : 27 April 2024</h5>
        <h6 class="mt-24">
            Amount : <span class="amount">SAR 635</span>
            <span class="currency">(SAR 2,543)</span>
        </h6>
    </div>
    <div class="overlay modalFormCloseBtn" id="modalOverlay"></div>
</div>
