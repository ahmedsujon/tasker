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
                        @foreach ($attachments as $attach)
                            <div class="upload_grid remove_delete_btn_grid">
                                @if ($attach->type == 'pdf')
                                    <img src="{{ asset('assets/custom/icons/file-type-pdf.svg') }}" />
                                @else
                                    <img src="{{ asset($attach->attachment) }}" />
                                @endif
                                <div>
                                    <h4>{{ $attach->name }}</h4>
                                    <h6>{{ $attach->size > 99 ? round(($attach->size / 1000), 2) . ' MB' : round($attach->size, 2) . ' KB' }}</h6>
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
                <button type="button" wire:click.prevent='jobPostFinalize("published")' wire:loading.attr='disabled' class="login_btn">
                    {!! loadingStateWithText("jobPostFinalize('published')", 'Publish') !!}
                </button>
            </div>
        </form>
    </section>

    <!-- More Dropdown Section  -->
    <section wire:ignore.self class="more_dropdown_area" id="moreDropdownArea">
        <ul class="dropdown_list">
            {{-- <li>
                <a href="javascript:void(0)">
                    <span class="short_title">A Short Title is Best</span>
                    <span class="message">A message should be a short, complete sentence.</span>
                </a>
            </li> --}}
            {{-- <li>
                <a href="{{ route('client.home') }}"> Edit Job Post </a>
            </li> --}}
            <li>
                <button type="button" wire:click.prevent='jobPostFinalize("draft")' wire:loading.attr='disabled'>
                    {!! loadingStateWithText("jobPostFinalize('draft')", 'Save as a draft') !!}
                </button>
            </li>
            {{-- <li>
                <button type="button" class="red" wire:click.prevent='deleteConfirmation' wire:loading.attr='disabled'>
                    {!! loadingStateWithText("deleteConfirmation", 'Delete the Job Post') !!}
                </button>
            </li> --}}
        </ul>
        <button type="button" class="dropdown_cancel_btn removeDropdownBtn">
            Cancel
        </button>
    </section>
    <div class="overlay removeDropdownBtn" id="dropdownOverlay"></div>

    <!-- Delete Modal -->
    <div wire:ignore.self class="modal fade" id="deleteDataModal" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" role="dialog"
        aria-labelledby="modelTitleId">
        <div class="modal-dialog modal-dialog-centered modal-dialog-zoom modal-md" role="document">
            <div class="modal-content p-5 bg-transparent border-0">
                <div class="modal-body pt-4 pb-4 bg-white" style="border-radius: 10px;">
                    <div class="row justify-content-center mb-2">
                        <div class="col-md-11 text-center">
                            <div class="swal2-icon swal2-warning swal2-icon-show" style="display: flex;">
                                <div class="swal2-icon-content">!</div>
                            </div>
                            <h2>Are you sure?</h2>
                            <p class="mb-4">You won't be able to revert this!</p>

                            <button type="button" class="btn btn-sm btn-primary waves-effect waves-light"
                                wire:click.prevent='deleteData' wire:loading.attr='disabled'>
                                {!! loadingStateWithText('deleteData', 'Delete') !!}
                            </button>
                            <button type="button" class="btn btn-sm btn-secondary waves-effect waves-light"
                                data-bs-dismiss="modal">Cancel</button>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
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
