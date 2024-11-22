<div>
    <section class="job_post_wrapper">
        <form action="" class="form_area job_post_form_area h-full-screen space-between">
            <div class="w-100">
                <div class="back_btn_grid back_more_btn_grid back_btn_white pt-12">
                    <button type="button" class="page_back_btn" onclick="history.back()">
                        <img src="{{ asset('assets/app/icons/arrow-left.svg') }}" alt="arrow left" />
                    </button>
                    <h3>Post a job</h3>
                    <div class="text-end">
                        <button type="button" class="page_back_btn postMoreBtn">
                            <img src="{{ asset('assets/app/icons/more-vertical.svg') }}" alt="more icon" />
                        </button>
                    </div>
                </div>
                <div class="horizontal-m-w mt-24">
                    <div class="post_overview_item">
                        <h2>Job title</h2>
                        <h4>
                            I’m looking for a service provider for furniture assembly in
                            my shop
                        </h4>
                    </div>
                    <div class="post_overview_item most_using_category">
                        <h2>Added categories</h2>
                        <ul class="category_list category_inner_list d-flex align-items-center flex-wrap bg-transparent p-0"
                            id="innerCategoryList">
                            <li>
                                <button type="button" class="selected_category">
                                    <span>General Furniture Assembly</span>
                                </button>
                            </li>
                            <li>
                                <button type="button" class="selected_category">
                                    <span>IKEA Assembly</span>
                                </button>
                            </li>
                            <li>
                                <button type="button" class="selected_category">
                                    <span>Bookshelf Assembly</span>
                                </button>
                            </li>
                        </ul>
                    </div>
                    <div class="post_overview_item">
                        <h2>Project size</h2>
                        <h4>Small</h4>
                        <h6>
                            Simple and efficient tasks <b>[estimate : 4 - 6 hours]</b>
                        </h6>
                    </div>
                    <div class="post_overview_item">
                        <h2>Description</h2>
                        <p>
                            I am seeking a skilled and reliable service provider to handle
                            the assembly of furniture in my shop. The ideal candidate will
                            have experience with assembling various types of furniture,
                            including shelving units, display cases, and seating.
                            Attention to detail and the ability to work efficiently are
                            essential.
                        </p>
                    </div>
                    <div class="post_overview_item file_uploaded_area mt-0">
                        <h2>Attached files</h2>
                        <div class="upload_grid remove_delete_btn_grid">
                            <img src="{{ asset('assets/app/images/client/file_upload_image1.png') }}" alt="upload image"
                                class="upload_img" />
                            <div>
                                <h4>Attachment file 2024.jpeg</h4>
                                <h6>1.2 MB</h6>
                            </div>
                        </div>
                        <div class="upload_grid remove_delete_btn_grid">
                            <img src="{{ asset('assets/app/images/client/file_upload_image2.png') }}" alt="upload image"
                                class="upload_img" />
                            <div>
                                <h4>Attachment file 2024.jpeg</h4>
                                <h6>1.2 MB</h6>
                            </div>
                        </div>
                    </div>
                    <div class="post_overview_item input_row mb-0">
                        <h2>Project cost</h2>
                        <input type="text" placeholder="Type cost" class="input_field" value="SAR 600" disabled />
                        <div class="form_status error">
                            <img src="{{ asset('assets/app/icons/info-circle.svg') }}" alt="info icon"
                                class="info_circle_red" />
                            Job title is required
                        </div>
                    </div>
                </div>
            </div>
            <div class="horizontal-m-w w-100">
                <button type="submit" class="login_btn">Publish</button>
            </div>
        </form>
    </section>

    <!-- More Dropdown Section  -->
    <section class="more_dropdown_area" id="moreDropdownArea">
        <ul class="dropdown_list">
            <li>
                <a href="javascript:void(0)">
                    <span class="short_title">A Short Title is Best</span>
                    <span class="message">A message should be a short, complete sentence.</span>
                </a>
            </li>
            <li>
                <a href="#"> Edit Job Post </a>
            </li>
            <li>
                <button type="button">Save as a draft</button>
            </li>
            <li>
                <button type="button" class="red">Delete the Job Post</button>
            </li>
        </ul>
        <button type="button" class="dropdown_cancel_btn removeDropdownBtn">
            Cancel
        </button>
    </section>
    <div class="overlay removeDropdownBtn" id="dropdownOverlay"></div>
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
