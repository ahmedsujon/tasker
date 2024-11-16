<div>
    <section class="google_sign_up_wrapper">
        <div class="horizontal-m-w">
            <form action="" class="form_area h-full-screen space-between mt-0 pt-12">
                <div class="w-100">
                    <div class="back_btn_grid">
                        <button type="button" class="page_back_btn" onclick="history.back()">
                            <img src="{{ asset('assets/app/icons/arrow-left.svg') }}" alt="arrow left" />
                        </button>
                        <h3>Payment Card</h3>
                    </div>

                    <div class="mt-24">
                        <div class="input_row">
                            <label for="" class="form_label">Pay with</label>
                            <div class="pay_with_area">
                                <div class="form-check">
                                    <input class="form-check-input" type="radio" name="payWithRadio"
                                        id="payWithRadio1" checked hidden />
                                    <label class="form-check-label" for="payWithRadio1">
                                        <img src="{{ asset('assets/app/icons/credit-card-01.svg') }}" alt="credit card icon" />
                                    </label>
                                </div>
                                <div class="form-check">
                                    <input class="form-check-input" type="radio" name="payWithRadio"
                                        id="payWithRadio2" hidden />
                                    <label class="form-check-label" for="payWithRadio2">
                                        <img src="{{ asset('assets/app/icons/apple_pay_icon.svg') }}" alt="apple card icon" />
                                    </label>
                                </div>
                            </div>
                        </div>
                        <div class="input_row">
                            <label for="" class="form_label">Your Card Details</label>
                            <div class="input_field input_field_div">
                                <h4>Scan your card</h4>
                                <button type="button" class="camera_icon">
                                    <img src="{{ asset('assets/app/icons/camera.svg') }}" alt="camera icon" />
                                </button>
                            </div>
                        </div>
                        <div class="input_row">
                            <div class="input_left_icon_area">
                                <input type="text" placeholder="Card number" class="input_field" id="cardNumber" />
                                <img src="{{ asset('assets/app/icons/credit-card-gray.svg') }}" alt="credit card gray"
                                    class="input_icons_left" />
                            </div>
                        </div>
                        <div class="input_row">
                            <input type="text" placeholder="Name on card" class="input_field" />
                        </div>
                        <div class="two_grid">
                            <div class="input_row">
                                <input type="text" placeholder="Expiry - MM/YY" class="input_field"
                                    id="expireDate" />
                            </div>
                            <div class="input_row">
                                <div class="input_left_icon_area">
                                    <input type="text" placeholder="CVV" class="input_field" id="cardCVV" />
                                    <img src="{{ asset('assets/app/icons/credit-card-gray.svg') }}" alt="credit card gray"
                                        class="input_icons_left" />
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="w-100">
                    <button type="submit" class="login_btn">Continue</button>
                </div>
            </form>
        </div>
    </section>
</div>
