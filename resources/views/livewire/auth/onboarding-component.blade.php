<div>
    <section class="sing_up_onboard_wrapper">
        <h3 class="page_inner_title text-center">
            First things first,<br />
            why are you here?
        </h3>
        <div class="horizontal-m-w">
            <label for="seller" class="radio_item color_radio_btn">
                <div class="form-check">
                    <span class="form-check-label">Customer</span>
                    <input class="form-check-input" type="radio" @if ($type == 'seller') checked @endif
                        wire:model.live="type" id="seller" value="seller" />
                </div>
            </label>
            <label for="client" class="radio_item color_radio_btn">
                <div class="form-check">
                    <span class="form-check-label">Service Provider</span>
                    <input class="form-check-input" type="radio" @if ($type == 'client') checked @endif
                        wire:model.live="type" id="client" value="client" />
                </div>
            </label>
            <button wire:click="proceedToRegister" class="login_btn">Get Started</button>
        </div>
    </section>
</div>
