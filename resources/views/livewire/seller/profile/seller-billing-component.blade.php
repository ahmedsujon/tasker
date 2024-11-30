<div>
    <div class="back_btn_grid mt-12">
        <button type="button" class="page_back_btn" onclick="history.back()">
            <img src="{{ asset('assets/app/icons/arrow-left.svg') }}" alt="arrow left" />
        </button>
        <h3>Payout list</h3>
    </div>
    <!-- Order History Section  -->
    <section class="client_order_history_wrapper payroll_list_wrapper horizontal-m-w">
        <div class="transaction_area">
            <div class="transaction_table_area mt-12">
                <div class="transaction_grid">
                    <h3>Date</h3>
                    <h4>Amount</h4>
                </div>
                <div class="inner_transaction_area mrn-24">
                    @foreach ($transections as $transection)
                        <div class="transaction_grid">
                            <h5>{{ $transection->created_at->format('M d, Y') }}</h5>
                            <h6>{{ $transection->amount }} SAR</h6>
                        </div>
                    @endforeach
                </div>
            </div>
        </div>
    </section>
</div>
