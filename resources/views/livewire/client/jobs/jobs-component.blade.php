<div>
    <section class="job_post_wrapper">
        <form wire:submit.prevent='nextStep' class="form_area job_post_form_area h-full-screen space-between">
            <div class="w-100">
                <div class="back_btn_grid back_btn_white pt-12">
                    <a href="{{ route('client.home') }}" type="button" class="page_back_btn">
                        <img src="{{ asset('assets/app/icons/arrow-left.svg') }}" alt="arrow left" />
                    </a>
                    <h3>Post a job</h3>
                </div>
                <div class="horizontal-m-w mt-24">
                    <div class="input_row">
                        <label for="" class="form_label">Job title *</label>
                        <input type="text" placeholder="Write a title" wire:model.blur='title' class="input_field" />
                        @error('title')
                            <div class="form_status error">{{ $message }}</div>
                        @enderror
                    </div>
                    <div class="input_row seachable_input_row pt-10">
                        <label for="" class="form_label">Search skills or add your own *</label>
                        <div class="position-relative">
                            <input type="text" placeholder="Search category / type" wire:focus='showSuggestion' wire:model.live='skill_search' class="input_field" />
                            {{-- <button type="button" class="search_btn">
                                <img src="{{ asset('assets/app/icons/search-md.svg') }}" alt="search icon" />
                            </button> --}}
                            @if ($list_status)
                                <button type="button" wire:click.prevent='closeSuggestion' class="search_btn">
                                    <img src="{{ asset('assets/custom/icons/x.svg') }}" alt="search icon" />
                                </button>
                                <ul class="suggestion_list">
                                    @if ($categories->count() > 0)
                                        @foreach ($categories as $category)
                                            <li>
                                                <h4>{{ $category->parent_id ? '-':'' }}{{ $category->name }}</h4>
                                                <div class="text-end">
                                                    @if (in_array($category->id, $skills))
                                                        <button type="button" class="added" wire:click.prevent='addSkills({{ $category->id }}, "{{ $category->name }}")'>Added</button>
                                                    @else
                                                        <button type="button" wire:click.prevent='addSkills({{ $category->id }}, "{{ $category->name }}")'>Add</button>
                                                    @endif
                                                </div>
                                            </li>
                                        @endforeach
                                    @else
                                        <p class="text-center pt-3">
                                            <small class="text-muted">No data found!</small>
                                        </p>
                                    @endif
                                </ul>
                            @else
                                <button type="button" class="search_btn">
                                    <img src="{{ asset('assets/app/icons/search-md.svg') }}" alt="search icon" />
                                </button>
                            @endif
                        </div>
                        @error('skills')
                            <div class="form_status error">{{ $message }}</div>
                        @enderror

                        <style>
                            .selected_item {
                                gap: 4px;
                                padding: 4px 12px;
                                border-radius: 16px;
                                background: #000;
                                font-size: 14px;
                                color: #fff;
                                margin-top: 7px;
                            }
                        </style>
                        @if ($selectedItems)
                            @foreach ($selectedItems as $item)
                                <span class="selected_item">
                                    <span>{{ $item }}</span>
                                </span>
                            @endforeach
                        @endif
                    </div>


                    {{-- <div class="most_using_category">
                        <h3>Most using categories</h3>
                        <div class="first_category_area">
                            <ul class="category_list d-flex align-items-center flex-wrap" id="usingCategoryList">
                                <li>
                                    <button type="button">
                                        <span>Assembly</span>
                                        <img src="{{ asset('assets/app/icons/plus_black.svg') }}" alt="plus icon"
                                            class="plus_icon" />
                                        <img src="{{ asset('assets/app/icons/x.svg') }}" alt="x icon"
                                            class="remove_icon" />
                                    </button>
                                </li>
                                <li>
                                    <button type="button">
                                        <span>Mounting</span>
                                        <img src="{{ asset('assets/app/icons/plus_black.svg') }}" alt="plus icon"
                                            class="plus_icon" />
                                        <img src="{{ asset('assets/app/icons/x.svg') }}" alt="x icon"
                                            class="remove_icon" />
                                    </button>
                                </li>
                                <li>
                                    <button type="button">
                                        <span>Mounting</span>
                                        <img src="{{ asset('assets/app/icons/plus_black.svg') }}" alt="plus icon"
                                            class="plus_icon" />
                                        <img src="{{ asset('assets/app/icons/x.svg') }}" alt="x icon"
                                            class="remove_icon" />
                                    </button>
                                </li>
                                <li>
                                    <button type="button">
                                        <span>Moving</span>
                                        <img src="{{ asset('assets/app/icons/plus_black.svg') }}" alt="plus icon"
                                            class="plus_icon" />
                                        <img src="{{ asset('assets/app/icons/x.svg') }}" alt="x icon"
                                            class="remove_icon" />
                                    </button>
                                </li>
                                <li>
                                    <button type="button">
                                        <span>Cleaning</span>
                                        <img src="{{ asset('assets/app/icons/plus_black.svg') }}" alt="plus icon"
                                            class="plus_icon" />
                                        <img src="{{ asset('assets/app/icons/x.svg') }}" alt="x icon"
                                            class="remove_icon" />
                                    </button>
                                </li>
                                <li>
                                    <button type="button">
                                        <span>Outdoor Help</span>
                                        <img src="{{ asset('assets/app/icons/plus_black.svg') }}" alt="plus icon"
                                            class="plus_icon" />
                                        <img src="{{ asset('assets/app/icons/x.svg') }}" alt="x icon"
                                            class="remove_icon" />
                                    </button>
                                </li>
                                <li>
                                    <button type="button">
                                        <span>Home Repairs</span>
                                        <img src="{{ asset('assets/app/icons/plus_black.svg') }}" alt="plus icon"
                                            class="plus_icon" />
                                        <img src="{{ asset('assets/app/icons/x.svg') }}" alt="x icon"
                                            class="remove_icon" />
                                    </button>
                                </li>
                                <li>
                                    <button type="button">
                                        <span>Painting</span>
                                        <img src="{{ asset('assets/app/icons/plus_black.svg') }}" alt="plus icon"
                                            class="plus_icon" />
                                        <img src="{{ asset('assets/app/icons/x.svg') }}" alt="x icon"
                                            class="remove_icon" />
                                    </button>
                                </li>
                                <li>
                                    <button type="button">
                                        <span>Trending</span>
                                        <img src="{{ asset('assets/app/icons/plus_black.svg') }}" alt="plus icon"
                                            class="plus_icon" />
                                        <img src="{{ asset('assets/app/icons/x.svg') }}" alt="x icon"
                                            class="remove_icon" />
                                    </button>
                                </li>
                            </ul>
                        </div>
                        <ul class="category_list category_inner_list d-flex align-items-center flex-wrap"
                            id="innerCategoryList">
                            <li>
                                <button type="button">
                                    <span>General Furniture Assembly</span>
                                    <img src="{{ asset('assets/app/icons/plus_black.svg') }}" alt="plus icon"
                                        class="plus_icon" />
                                    <img src="{{ asset('assets/app/icons/check.svg') }}" alt="check icon"
                                        class="check_icon" />
                                </button>
                            </li>
                            <li>
                                <button type="button">
                                    <span>IKEA Assembly</span>
                                    <img src="{{ asset('assets/app/icons/plus_black.svg') }}" alt="plus icon"
                                        class="plus_icon" />
                                    <img src="{{ asset('assets/app/icons/check.svg') }}" alt="check icon"
                                        class="check_icon" />
                                </button>
                            </li>
                            <li>
                                <button type="button">
                                    <span>Crib Assembly</span>
                                    <img src="{{ asset('assets/app/icons/plus_black.svg') }}" alt="plus icon"
                                        class="plus_icon" />
                                    <img src="{{ asset('assets/app/icons/check.svg') }}" alt="check icon"
                                        class="check_icon" />
                                </button>
                            </li>
                            <li>
                                <button type="button">
                                    <span>PAX Assembly</span>
                                    <img src="{{ asset('assets/app/icons/plus_black.svg') }}" alt="plus icon"
                                        class="plus_icon" />
                                    <img src="{{ asset('assets/app/icons/check.svg') }}" alt="check icon"
                                        class="check_icon" />
                                </button>
                            </li>
                            <li>
                                <button type="button">
                                    <span>Desk Assembly</span>
                                    <img src="{{ asset('assets/app/icons/plus_black.svg') }}" alt="plus icon"
                                        class="plus_icon" />
                                    <img src="{{ asset('assets/app/icons/check.svg') }}" alt="check icon"
                                        class="check_icon" />
                                </button>
                            </li>
                            <li>
                                <button type="button">
                                    <span>Bookshelf Assembly</span>
                                    <img src="{{ asset('assets/app/icons/plus_black.svg') }}" alt="plus icon"
                                        class="plus_icon" />
                                    <img src="{{ asset('assets/app/icons/check.svg') }}" alt="check icon"
                                        class="check_icon" />
                                </button>
                            </li>
                        </ul>
                    </div> --}}
                </div>
            </div>
            <div class="horizontal-m-w w-100">
                <button type="submit" class="login_btn">
                    {!! loadingStateWithText('nextStep', 'Next Step') !!} <img src="{{ asset('assets/app/icons/arrow-right.svg') }}" alt="arrow icon" />
                </button>
            </div>
        </form>
    </section>
</div>
@push('scripts')
    <script>
        $(document).ready(function() {
            // Handle click on category buttons
            $("#usingCategoryList button").on("click", function() {
                const $button = $(this);

                if ($button.hasClass("active_category")) {
                    // Toggle the active class
                    $button.removeClass("active_category");
                } else {
                    // Remove active class
                    $("#usingCategoryList button").removeClass("active_category");
                    // Toggle the active class
                    $button.toggleClass("active_category");
                }
            });
        });
    </script>
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
