<div>
    <section class="job_post_wrapper">
        <form action="" class="form_area job_post_form_area h-full-screen space-between">
            <div class="w-100">
                <div class="back_btn_grid back_btn_white pt-12">
                    <button type="button" class="page_back_btn">
                        <img src="{{ asset('assets/app/icons/arrow-left.svg') }}') }}" alt="arrow left" />
                    </button>
                    <h3>Post a job</h3>
                </div>
                <div class="horizontal-m-w mt-24">
                    <div class="input_row">
                        <label for="" class="form_label">Job title *</label>
                        <input type="text" placeholder="Write a title" class="input_field" />
                        <div class="form_status error">Job title is required</div>
                    </div>
                    <div class="input_row seachable_input_row pt-10">
                        <label for="" class="form_label">Search skills or add your won *</label>
                        <div class="position-relative">
                            <input type="text" placeholder="Search category / type" class="input_field" />
                            <button type="button" class="search_btn">
                                <img src="{{ asset('assets/app/icons/search-md.svg') }}" alt="search icon" />
                            </button>
                            <ul class="suggestion_list">
                                <li>
                                    <h4>General Furniture Assembly</h4>
                                    <div class="text-end">
                                        <button type="button" class="added">Added</button>
                                    </div>
                                </li>
                                <li>
                                    <h4>IKEA Assembly</h4>
                                    <div class="text-end">
                                        <button type="button">Add</button>
                                    </div>
                                </li>
                            </ul>
                        </div>
                    </div>
                    <div class="most_using_category">
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
                    </div>
                </div>
            </div>
            <div class="horizontal-m-w w-100">
                <button type="submit" class="login_btn">
                    Next Step
                    <img src="{{ asset('assets/app/icons/arrow-right.svg') }}" alt="arrow icon" />
                </button>
            </div>
        </form>
    </section>
</div>
