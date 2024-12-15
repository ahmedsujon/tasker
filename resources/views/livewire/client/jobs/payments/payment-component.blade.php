<div>
    <section class="account_success_wrapper add_card_wrapper">
        <div class="h-full-screen space-between horizontal-m-w pt-12">
            <div class="text-center w-100">
                <div class="back_btn_grid">
                    <a href="{{ route('client.jobDetails', ['id' => $job_id]) }}" type="button" class="page_back_btn">
                        <img src="{{ asset('assets/app/icons/arrow-left.svg') }}" />
                    </a>
                    <h3>Billing & Payment</h3>
                </div>
                @if ($card_infos->count() > 0)
                <section class="billing_payment_wrapper">
                    <style>
                        .h-full-screen {
                            min-height: 70vh !important;
                        }
                    </style>
                    <div class="h-full-screen space-between horizontal-m-w pt-12">
                        <div class="w-100">
                            <div class="billing_area pt-12">
                                <div class="card_area"
                                    style="background-image: url({{ asset('assets/app/images/client/billing_card_bg.png') }});">
                                    <h4>Payable Amount</h4>
                                    <h5 class="mt-4 mb-3">500.00 SAR</h5>
                                </div>
                            </div>
                            <div class="billing_area">
                                <h3>Payment Method</h3>
                            </div>
                            <div class="card_list_area color_radio_btn mt-24">
                                @if ($card_infos->count() > 0)
                                    @foreach ($card_infos as $item)
                                        <div class="form-check">
                                            <label class="form-check-label" for="cardListRadio{{ $loop->index }}">
                                                @if (Str::startsWith($item->card_number, '4'))
                                                    {{-- Visa Card Logo --}}
                                                    <img src="{{ asset('assets/app/icons/master_card_logo.svg') }}" alt="Visa card"
                                                        class="card_logo" />
                                                    <span>Visa Card **********{{ substr($item->card_number, -4) }}</span>
                                                @elseif (Str::startsWith($item->card_number, ['51', '52', '53', '54', '55']) ||
                                                        ($item->card_number >= 222100 && $item->card_number <= 272099))
                                                    {{-- MasterCard Logo --}}
                                                    <img src="{{ asset('assets/app/icons//logos_visa.svg') }}" alt="MasterCard"
                                                        class="card_logo" />
                                                    <span>MasterCard **********{{ substr($item->card_number, -4) }}</span>
                                                @else
                                                    {{-- Default Logo or Message for Unknown Card Type --}}
                                                    <span>Unknown **********{{ substr($item->card_number, -4) }}</span>
                                                @endif
                                            </label>
                                            <input class="form-check-input" type="radio" name="cardListRadio" wire:model.live='payment_method_id' value="{{ $item->id }}"
                                                id="cardListRadio{{ $loop->index }}" />
                                        </div>
                                    @endforeach
                                @else
                                    <div class="billing_area">
                                        <p>
                                            You haven’t set up any billing methods yet. Add a method so you
                                            can hire when you’re reday
                                        </p>
                                    </div>
                                @endif
                            </div>
                        </div>
                    </div>
                </section>
                @else
                    <div class="success_img mt-5">
                        <img src="{{ asset('assets/app/images/others/add_card_shape.png') }}" />
                    </div>
                    <h4 class="page_inner_title">Add Account</h4>
                    <p>
                        Now that you estimated some expenses, let’s see how much money you
                        have right now
                    </p>
                @endif
            </div>
            <div class="w-100 mt-24">
                <button type="button" class="login_btn mb-2" wire:click.prevent='payNow' wire:loading.attr='disabled'>
                    {!! loadingStateWithTextPayment('payNow', 'Pay Now') !!}
                </button>
                <a href="" type="button" style="text-decoration: none !important; color: white !important;" wire:loading.attr='disabled' class="login_btn">+ Add {{ $card_infos->count() > 0 ? 'Another' : '' }} Account</a>
            </div>
        </div>
    </section>

    {{-- @livewire('client.layouts.inc.header') --}}
</div>

@push('scripts')
    <script>
        window.addEventListener('showPaymentConfirmationModal', event => {
            $('#paymentModal').modal('show');
        });
        window.addEventListener('closeModal', event => {
            $('#paymentModal').modal('hide');
        });
    </script>
@endpush
