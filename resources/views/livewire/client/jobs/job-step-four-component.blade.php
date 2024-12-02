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
                            {{ $job ? $job->title : '' }}
                        </h4>
                    </div>
                    <div class="post_overview_item most_using_category">
                        <h2>Added categories</h2>
                        <ul class="category_list category_inner_list d-flex align-items-center flex-wrap bg-transparent p-0" id="innerCategoryList">
                            @foreach ($job->category_names as $category)
                                <li>
                                    <button type="button" class="selected_category">
                                        <span>{{ $category }}</span>
                                    </button>
                                </li>
                            @endforeach
                        </ul>
                    </div>
                    <div class="post_overview_item">
                        <h2>Project size</h2>
                        @if ($job->project_size == 'Large')
                            <h4>Large</h4>
                            <h6>
                                Extended or multifaceted <b>[estimate : 1+ Day]</b>
                            </h6>
                        @elseif ($job->project_size == 'Medium')
                            <h4>Small</h4>
                            <h6>
                                Precisely defined projects <b>[estimate : 6 - 10 hours]</b>
                            </h6>
                        @elseif ($job->project_size == 'Small')
                            <h4>Small</h4>
                            <h6>
                                Simple and efficient tasks <b>[estimate : 4 - 6 hours]</b>
                            </h6>
                        @endif
                    </div>
                    <div class="post_overview_item">
                        <h2>Description</h2>
                        <p>
                            {!! $job->description !!}
                        </p>
                    </div>
                    <div class="post_overview_item file_uploaded_area mt-0">
                        <h2>Attached files</h2>
                        @foreach ($job->attachments as $attach)
                            <div class="upload_grid remove_delete_btn_grid">
                                <img src="{{ asset('assets/app/images/client/file_upload_image1.png') }}" alt="upload image"
                                    class="upload_img" />
                                <div>
                                    <h4>{{ $attach }}</h4>
                                    <h6>1.2 MB</h6>
                                </div>
                            </div>
                        @endforeach
                    </div>
                    <div class="post_overview_item input_row mb-0">
                        <h2>Project cost</h2>
                        <input type="text" placeholder="Type cost" class="input_field" value="SAR {{ $job->budget }}" disabled />
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
