<div>
    <section class="active_post_wrapper">
        <div class="back_btn_grid back_btn_white pt-12">
            <a href="{{ route('client.home') }}" type="button" class="page_back_btn">
                <img src="{{ asset('assets/app/icons/arrow-left.svg') }}" alt="arrow left" />
            </a>
            <h3>View job</h3>
        </div>
        <ul wire:ignore.self class="tab_list nav d-flex align-items-center justify-content-between flex-wrap gap-3"
            id="pills-tab" role="tablist">
            <li class="nav-item" role="presentation">
                <button wire:ignore.self class="nav-link active" id="pills-home-tab" data-bs-toggle="pill"
                    data-bs-target="#pills-home" type="button" role="tab" aria-controls="pills-home"
                    aria-selected="true">
                    Details
                </button>
            </li>
            <li class="nav-item" role="presentation">
                <button wire:ignore.self class="nav-link" id="pills-profile-tab" data-bs-toggle="pill"
                    data-bs-target="#pills-profile" type="button" role="tab" aria-controls="pills-profile"
                    aria-selected="false">
                    Proposal ({{ $active_proposals->count() }})
                </button>
            </li>
            <li class="nav-item" role="presentation">
                <button wire:ignore.self class="nav-link" id="pills-contact-tab" data-bs-toggle="pill"
                    data-bs-target="#pills-contact" type="button" role="tab" aria-controls="pills-contact"
                    aria-selected="false">
                    Cancel
                </button>
            </li>
        </ul>
    </section>
    <div wire:ignore.self class="tab-content" id="pills-tabContent">
        <div wire:ignore.self class="tab-pane fade show active" id="pills-home" role="tabpanel"
            aria-labelledby="pills-home-tab" tabindex="0">
            <!-- Active Post Tab Section  -->
            <section class="active_tab_wrapper active_post_view_wrapper mrn-24">
                <div class="mr-24">
                    <div class="active_post_card">
                        <div class="post_title_grid">
                            <h3>
                                {{ $jobDetails->title }}
                            </h3>
                            <button type="button" class="postMoreBtn"
                                wire:click.prevent='selectJobMoreOption({{ $jobDetails->id }})'>
                                <img src="{{ asset('assets/app/icons/more-vertical.svg') }}" alt="more vertical icon" />
                            </button>
                        </div>
                        <div class="post_time_grid">
                            <div class="time_item">
                                <a href="{{ route('client.jobDetails', ['id' => $jobDetails->id]) }}">
                                    <h4>Estimate</h4>
                                    <h5>{{ $jobDetails->project_size }}</h5>
                                </a>
                            </div>
                            <div class="time_item">
                                <h4>Cost</h4>
                                <h5>SAR {{ $jobDetails->budget }}</h5>
                            </div>
                            <div class="time_item">
                                <h4>Proposal</h4>
                                <h5>
                                    {{ proposalCount($jobDetails->id) }}
                                </h5>
                            </div>
                        </div>
                        <div class="order_description_area">
                            <p class="descriptionPara">
                                {{ $jobDetails->description }}
                            </p>
                        </div>
                        <div class="category_area">
                            <h6>Categories</h6>
                            <ul class="category_list d-flex align-items-center flex-wrap gap-1">
                                @foreach (json_decode($jobDetails->category_names) as $catName)
                                    <li>
                                        <a href="javascript:void(0)"> {{ $catName }} </a>
                                    </li>
                                @endforeach
                            </ul>
                        </div>
                    </div>

                </div>
            </section>
        </div>
        <div wire:ignore.self class="tab-pane fade" id="pills-profile" role="tabpanel"
            aria-labelledby="pills-profile-tab" tabindex="0">
            <!-- Active Post Tab Section  -->
            <section class="active_tab_wrapper active_post_view_wrapper mrn-24">
                <div class="mr-24">
                    @foreach ($active_proposals as $proposal)
                        <div class="active_post_card">
                            <div class="post_user_grid">
                                <img src="{{ asset(getUserByID($proposal->seller_id)->avatar ? getUserByID($proposal->seller_id)->avatar : 'assets/images/placeholder.jpg') }}"
                                    alt="user image" class="user_image" />
                                <img src="{{ getUserByID($proposal->seller_id)->avatar }}" alt="user image"
                                    class="user_image" />
                                <div class="info">
                                    <h4>{{ getUserByID($proposal->seller_id)->first_name }}
                                        {{ getUserByID($proposal->seller_id)->last_name }}</h4>
                                    <div class="d-flex align-items-center flex-wrap gap-1 mt-1">
                                        <img src="{{ asset('assets/app/icons/star.svg') }}" alt="star icon"
                                            class="star_icon" />
                                        <h5>4.6</h5>
                                        <h6>12 reviews</h6>
                                    </div>
                                </div>
                                <h3 class="time">
                                    {{ Str::replace(['second', 'minute'], ['sec', 'min'], Carbon\Carbon::parse($proposal->created_at)->diffForHumans()) }}
                                </h3>
                            </div>
                            <div class="performance_grid">
                                <div class="point_area">
                                    <img src="{{ asset('assets/app/icons/dollar_key.svg') }}" alt="dollar key"
                                        class="dollar_key" />
                                    <div class="content">
                                        <h4>Offering Cost</h4>
                                        <h5>SAR {{ $proposal->cost }}</h5>
                                    </div>
                                </div>
                                <div>
                                    <div class="performance_item">
                                        <h3>Work performance</h3>
                                        <div class="d-flex align-items-center gap-1">
                                            <h4>99%</h4>
                                            <div class="progress" role="progressbar" aria-label="Basic example"
                                                aria-valuenow="25" aria-valuemin="0" aria-valuemax="100">
                                                <div class="progress-bar" style="width: 99%"></div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="performance_item complete_job_item">
                                        <h3>Total completed Job</h3>
                                        <div class="d-flex">
                                            <h4>25</h4>
                                        </div>
                                    </div>
                                    <div class="performance_item complete_job_item">
                                        <h3>Offering Timeline</h3>
                                        <div class="d-flex">
                                            <h4>{{ $proposal->timeline }}</h4>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="post_title_grid d-block mt-2">
                                <p class="details_pera">
                                    {{ $proposal->description }}
                                </p>
                            </div>
                            @if ($proposal->categories)
                                <div class="category_area">
                                    <h6>Categories</h6>
                                    <ul class="category_list d-flex align-items-center flex-wrap gap-1">
                                        @foreach (json_decode($proposal->categories) as $category_name)
                                            <li>
                                                <a href="javascript:void(0)"> {{ $category_name }} </a>
                                            </li>
                                        @endforeach
                                    </ul>
                                </div>
                            @endif
                            <div class="file_uploaded_area mt-32">
                                @if ($proposal->attachments)
                                    <h3>Attached files</h3>
                                    @foreach ($proposal->attachments as $attachment)
                                        <div class="upload_grid remove_delete_btn_grid">
                                            <img src="{{ asset($attachment->attachment) }}" alt="upload image"
                                                class="upload_img" />
                                            <div>
                                                <h4>{{ $attachment->name }}</h4>
                                                <h6>{{ $attachment->size }} MB</h6>
                                            </div>
                                        </div>
                                    @endforeach
                                @endif
                            </div>
                            <div class="order_action_btn_area">
                                <a href="#" class="cancel_job_btn rounded_btn"
                                    wire:click.prevent='rejectProposalConfirmation({{ $proposal->id }})'>
                                    {!! loadingStateWithText("rejectProposalConfirmation($proposal->id)", 'Reject') !!}
                                </a>
                                <a href="{{ route('client.jobPayment', ['id'=>$proposal->job_id]) }}?proposal_id={{ $proposal->id }}" class="complete_job_btn rounded_btn">
                                    <span>Accept & Continue</span>
                                    <img src="{{ asset('assets/app/icons/arrow-right-purple.svg') }}"
                                        alt="arrow right" />
                                </a>
                            </div>
                        </div>
                    @endforeach
                </div>
            </section>
        </div>
        <div class="tab-pane fade" id="pills-contact" role="tabpanel" aria-labelledby="pills-contact-tab"
            tabindex="0">
            <!-- Active Post Tab Section  -->
            <section class="active_tab_wrapper active_post_view_wrapper mrn-24">
                <div class="mr-24">
                    @foreach ($cancelled_proposals as $cProposal)
                        <div class="active_post_card">
                            <div class="post_user_grid">
                                <img src="{{ asset(getUserByID($cProposal->seller_id)->avatar ? getUserByID($cProposal->seller_id)->avatar : 'assets/images/placeholder.jpg') }}"
                                    alt="user image" class="user_image" />
                                <div class="info">
                                    <h4>{{ getUserByID($cProposal->seller_id)->first_name }}
                                        {{ getUserByID($cProposal->seller_id)->last_name }}</h4>
                                    <div class="d-flex align-items-center flex-wrap gap-1 mt-1">
                                        <img src="{{ asset('assets/app/icons/star.svg') }}" alt="star icon"
                                            class="star_icon" />
                                        <h5>4.6</h5>
                                        <h6>12 reviews</h6>
                                    </div>
                                </div>
                                <h3 class="time">
                                    {{ Str::replace(['second', 'minute'], ['sec', 'min'], Carbon\Carbon::parse($cProposal->created_at)->diffForHumans()) }}
                                </h3>
                            </div>
                            <div class="performance_grid">
                                <div class="point_area">
                                    <img src="{{ asset('assets/app/icons/dollar_key.svg') }}" alt="dollar key"
                                        class="dollar_key" />
                                    <div class="content">
                                        <h4>Offering Cost</h4>
                                        <h5>SAR {{ $cProposal->cost }}</h5>
                                    </div>
                                </div>
                                <div>
                                    <div class="performance_item">
                                        <h3>Work performance</h3>
                                        <div class="d-flex align-items-center gap-1">
                                            <h4>99%</h4>
                                            <div class="progress" role="progressbar" aria-label="Basic example"
                                                aria-valuenow="25" aria-valuemin="0" aria-valuemax="100">
                                                <div class="progress-bar" style="width: 99%"></div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="performance_item complete_job_item">
                                        <h3>Total completed Job</h3>
                                        <div class="d-flex">
                                            <h4>25</h4>
                                        </div>
                                    </div>
                                    <div class="performance_item complete_job_item">
                                        <h3>Offering Timeline</h3>
                                        <div class="d-flex">
                                            <h4>{{ $cProposal->timeline }}</h4>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="post_title_grid d-block mt-2">
                                <p class="details_pera">
                                    {{ $cProposal->description }}
                                </p>
                            </div>

                            <div class="file_uploaded_area mt-32">
                                @if ($cProposal->attachments)
                                    <h3>Attached files</h3>
                                    @foreach ($cProposal->attachments as $attachment)
                                        <div class="upload_grid remove_delete_btn_grid">
                                            <img src="{{ asset($attachment->attachment) }}" alt="upload image"
                                                class="upload_img" />
                                            <div>
                                                <h4>{{ $attachment->name }}</h4>
                                                <h6>{{ $attachment->size }} MB</h6>
                                            </div>
                                        </div>
                                    @endforeach
                                @endif
                            </div>

                            @if ($cProposal->categories)
                                <div class="category_area">
                                    <h6>Categories</h6>
                                    <ul class="category_list d-flex align-items-center flex-wrap gap-1">
                                        @foreach (json_decode($cProposal->categories) as $category_name)
                                            <li>
                                                <a href="javascript:void(0)"> {{ $category_name }} </a>
                                            </li>
                                        @endforeach
                                    </ul>
                                </div>
                            @endif
                        </div>
                    @endforeach
                </div>
            </section>
        </div>
    </div>

    <!-- More Dropdown Section  -->
    <section wire:ignore.self class="more_dropdown_area" id="moreDropdownArea">
        <ul class="dropdown_list">
            <li>
                <a wire:click.prevent='viewDetails'> Edit </a>
            </li>
            <li>
                <a wire:click.prevent='viewDetails' class="red"> Remove </a>
            </li>
        </ul>
    </section>
    <div wire:ignore.self class="overlay removeDropdownBtn" id="dropdownOverlay"></div>

    <!-- Reject Modal -->
    <div wire:ignore.self class="modal fade" id="rejectModal" tabindex="-1" role="dialog"
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
                            <p class="mb-4">You want to reject this proposal?</p>

                            <button type="button" class="btn btn-sm btn-primary waves-effect waves-light"
                                wire:click.prevent='rejectProposal' wire:loading.attr='disabled'>
                                {!! loadingStateWithText('rejectProposal', 'Reject') !!}
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
        window.addEventListener('showRejectProposalModal', event => {
            $('#rejectModal').modal('show');
        });
        window.addEventListener('closeModal', event => {
            $('#rejectModal').modal('hide');
        });
    </script>
@endpush
