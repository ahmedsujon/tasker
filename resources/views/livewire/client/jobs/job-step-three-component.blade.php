<div>
    <section class="job_post_wrapper">
        <form wire:submit.prevent='nextStep' class="form_area job_post_form_area h-full-screen space-between">
            <div class="w-100">
                <div class="back_btn_grid back_btn_white pt-12">
                    <button type="button" class="page_back_btn" onclick="history.back()">
                        <img src="{{ asset('assets/app/icons/arrow-left.svg') }}" alt="arrow left" />
                    </button>
                    <h3>Post a job</h3>
                </div>
                <div class="horizontal-m-w mt-24">
                    <div class="input_row">
                        <label for="" class="form_label">Project cost add your won *</label>
                        <input type="number" placeholder="Type cost" wire:model.blur='cost' class="input_field" />
                        @error('cost')
                        <div class="form_status error">{{ $message }}</div>
                        @enderror
                    </div>

                    <div class="most_using_category">
                        <h3>Select cost</h3>

                        <ul class="category_list category_inner_list d-flex align-items-center flex-wrap bg-transparent p-0"
                            id="innerCategoryList">
                            <li>
                                <button type="button" wire:click.prevent='selectCost("400")' class="{{ $cost == 400 ? 'selected_category' : '' }}">
                                    <span>SAR 400</span>
                                    @if ($cost != 400)
                                        {!! loadingStateWithoutText("selectCost('400')", '<img src="'.asset('assets/app/icons/plus_black.svg').'" />') !!}
                                    @endif
                                    <img src="{{ asset('assets/app/icons/check.svg') }}" alt="check icon"
                                        class="check_icon" />
                                </button>
                            </li>
                            <li>
                                <button type="button" wire:click.prevent='selectCost("600")' class="{{ $cost == 600 ? 'selected_category' : '' }}">
                                    <span>SAR 600</span>
                                    @if ($cost != 600)
                                        {!! loadingStateWithoutText("selectCost('600')", '<img src="'.asset('assets/app/icons/plus_black.svg').'" />') !!}
                                    @endif
                                    <img src="{{ asset('assets/app/icons/check.svg') }}" alt="check icon"
                                        class="check_icon" />
                                </button>
                            </li>
                            <li>
                                <button type="button" wire:click.prevent='selectCost("800")' class="{{ $cost == 800 ? 'selected_category' : '' }}">
                                    <span>SAR 800</span>
                                    @if ($cost != 800)
                                        {!! loadingStateWithoutText("selectCost('800')", '<img src="'.asset('assets/app/icons/plus_black.svg').'" />') !!}
                                    @endif
                                    <img src="{{ asset('assets/app/icons/check.svg') }}" alt="check icon"
                                        class="check_icon" />
                                </button>
                            </li>
                            <li>
                                <button type="button" wire:click.prevent='selectCost("1000")' class="{{ $cost == 1000 ? 'selected_category' : '' }}">
                                    <span>SAR 1000</span>
                                    @if ($cost != 1000)
                                        {!! loadingStateWithoutText("selectCost('1000')", '<img src="'.asset('assets/app/icons/plus_black.svg').'" />') !!}
                                    @endif
                                    <img src="{{ asset('assets/app/icons/check.svg') }}" alt="check icon"
                                        class="check_icon" />
                                </button>
                            </li>
                            <li>
                                <button type="button" wire:click.prevent='selectCost("1200")' class="{{ $cost == 1200 ? 'selected_category' : '' }}">
                                    <span>SAR 1200</span>
                                    @if ($cost != 1200)
                                        {!! loadingStateWithoutText("selectCost('1200')", '<img src="'.asset('assets/app/icons/plus_black.svg').'" />') !!}
                                    @endif
                                    <img src="{{ asset('assets/app/icons/check.svg') }}" alt="check icon"
                                        class="check_icon" />
                                </button>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
            <div class="horizontal-m-w w-100">
                <button type="submit" class="login_btn">
                    {!! loadingStateWithText('nextStep', 'Submit & review job post') !!} <img
                        src="{{ asset('assets/app/icons/arrow-right.svg') }}" alt="arrow icon" />
                </button>
            </div>
        </form>
    </section>
</div>
@push('scripts')
<script>
    // $(document).ready(function () {
    //     // Handle click on category buttons
    //     $("#innerCategoryList button").on("click", function () {
    //       const $button = $(this);
    //       var val = $(this).data('value');

    //       @this.set('cost', val);

    //       $("#innerCategoryList button").removeClass("selected_category");
    //       $button.toggleClass("selected_category");
    //     });
    //   });
</script>
@endpush
