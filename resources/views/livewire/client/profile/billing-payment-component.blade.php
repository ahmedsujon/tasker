<div>
    <section class="billing_payment_wrapper">
        <div class="h-full-screen space-between horizontal-m-w pt-12">
            <div class="w-100">
                <div class="back_btn_grid">
                    <button type="button" class="page_back_btn" onclick="history.back()">
                        <img src="{{ asset('assets/app/icons/arrow-left.svg') }}" alt="arrow left" />
                    </button>
                    <h3>Billing & Payments</h3>
                </div>
                <div class="billing_area pt-12">
                    <h3>Balance</h3>
                    <div class="card_area"
                        style="background-image: url({{ asset('assets/app/images/client/billing_card_bg.png') }});">
                        <h4>Balance available</h4>
                        <h5>500.00 SAR</h5>
                        <button type="button" class="pay_now_btn">Pay Now</button>
                    </div>
                </div>
                <div class="billing_area">
                    <h3>Billing Methods</h3>
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
                                <input class="form-check-input" type="radio" name="cardListRadio"
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
            <a href="{{ route('client.billingMethod') }}" class="login_btn mt-24" style="margin-bottom: 90px;">
                + Add a billing method
            </a>
        </div>
    </section>
    @livewire('client.layouts.inc.header')
</div>
