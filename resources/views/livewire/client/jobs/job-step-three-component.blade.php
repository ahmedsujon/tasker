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
                        <input type="text" placeholder="Type cost" class="input_field" />
                        <div class="form_status error">
                            <img src="{{ asset('assets/app/icons/info-circle.svg') }}" alt="info icon"
                                class="info_circle_red" />
                            Job title is required
                        </div>
                    </div>

                    <div class="most_using_category">
                        <h3>Select cost</h3>

                        <ul class="category_list category_inner_list d-flex align-items-center flex-wrap bg-transparent p-0"
                            id="innerCategoryList">
                            <li>
                                <button type="button">
                                    <span>SAR 400</span>
                                    <img src="{{ asset('assets/app/icons/plus_black.svg') }}" alt="plus icon"
                                        class="plus_icon" />
                                    <img src="{{ asset('assets/app/icons/check.svg') }}" alt="check icon"
                                        class="check_icon" />
                                </button>
                            </li>
                            <li>
                                <button type="button">
                                    <span>SAR 600</span>
                                    <img src="{{ asset('assets/app/icons/plus_black.svg') }}" alt="plus icon"
                                        class="plus_icon" />
                                    <img src="{{ asset('assets/app/icons/check.svg') }}" alt="check icon"
                                        class="check_icon" />
                                </button>
                            </li>
                            <li>
                                <button type="button">
                                    <span>SAR 800</span>
                                    <img src="{{ asset('assets/app/icons/plus_black.svg') }}" alt="plus icon"
                                        class="plus_icon" />
                                    <img src="{{ asset('assets/app/icons/check.svg') }}" alt="check icon"
                                        class="check_icon" />
                                </button>
                            </li>
                            <li>
                                <button type="button">
                                    <span>SAR 1000</span>
                                    <img src="{{ asset('assets/app/icons/plus_black.svg') }}" alt="plus icon"
                                        class="plus_icon" />
                                    <img src="{{ asset('assets/app/icons/check.svg') }}" alt="check icon"
                                        class="check_icon" />
                                </button>
                            </li>
                            <li>
                                <button type="button">
                                    <span>SAR 1200</span>
                                    <img src="{{ asset('assets/app/icons/plus_black.svg') }}" alt="plus icon"
                                        class="plus_icon" />
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
                    {!! loadingStateWithText('nextStep', 'Submit & review job post') !!} <img src="{{ asset('assets/app/icons/arrow-right.svg') }}" alt="arrow icon" />
                </button>
            </div>
        </form>
    </section>
</div>
@push('scripts')
    <script>
        $(document).ready(function() {
            // Handle click on category buttons
            $("#innerCategoryList button").on("click", function() {
                const $button = $(this);

                if ($button.hasClass("selected_category")) {
                    // Toggle the active class
                    $button.removeClass("selected_category");
                } else {
                    // Toggle the active class
                    $button.toggleClass("selected_category");
                }
            });
        });
    </script>
@endpush
