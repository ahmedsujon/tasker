<div>
    <!-- Active Post Section  -->
    <section class="active_post_wrapper pt-12">
        <div class="client_user_grid">
            <img src="{{ asset('assets/app/images/user/client_user.png') }}" alt="client user" class="client_user" />
            <div class="client_info">
                <h3>Tasker Provider</h3>
                <h4>{{ user()->first_name }} {{ user()->last_name }}</h4>
            </div>
            <div class="d-flex justify-content-end">
                <a href="{{ route('client.jobPostOne') }}" class="job_post_btn">
                    <img src="{{ asset('assets/app/icons/plus.svg') }}" alt="plus icon" />
                    <span>Post a job</span>
                </a>
            </div>
        </div>

        <ul class="tab_list nav d-flex align-items-center justify-content-between flex-wrap gap-3" id="pills-tab"
            role="tablist">
            <li class="nav-item" role="presentation">
                <button class="nav-link active" id="pills-home-tab" data-bs-toggle="pill" data-bs-target="#pills-home"
                    type="button" role="tab" aria-controls="pills-home" aria-selected="true">
                    Active
                </button>
            </li>
            <li class="nav-item" role="presentation">
                <button class="nav-link" id="pills-profile-tab" data-bs-toggle="pill" data-bs-target="#pills-profile"
                    type="button" role="tab" aria-controls="pills-profile" aria-selected="false">
                    In Order
                </button>
            </li>
            <li class="nav-item" role="presentation">
                <button class="nav-link" id="pills-contact-tab" data-bs-toggle="pill" data-bs-target="#pills-contact"
                    type="button" role="tab" aria-controls="pills-contact" aria-selected="false">
                    Draft
                </button>
            </li>
            <li class="nav-item" role="presentation">
                <button class="nav-link" id="pills-disabled-tab" data-bs-toggle="pill" data-bs-target="#pills-disabled"
                    type="button" role="tab" aria-controls="pills-disabled" aria-selected="false">
                    Finished
                </button>
            </li>
        </ul>
    </section>
    <div class="tab-content" id="pills-tabContent">
        <div class="tab-pane fade show active" id="pills-home" role="tabpanel" aria-labelledby="pills-home-tab"
            tabindex="0">
            <!-- Active Post Tab Section  -->
            <section class="active_tab_wrapper mrn-24">
                <div class="mr-24">
                    @foreach ($active_jobs as $activeJob)
                        <div class="active_post_card">
                            <div class="post_title_grid">
                                <h3>
                                    {{ $activeJob->title }}
                                </h3>
                                <button type="button" class="postMoreBtn" wire:click.prevent='selectJobMoreOption({{ $activeJob->id }})'>
                                    <img src="{{ asset('assets/app/icons/more-vertical.svg') }}"
                                        alt="more vertical icon" />
                                </button>
                            </div>
                            <div class="post_time_grid">
                                <div class="time_item">
                                    <a href="{{ route('client.jobDetails', ['id' => $activeJob->id]) }}">
                                        <h4>Estimate</h4>
                                        <h5>{{ $activeJob->project_size }}</h5>
                                    </a>
                                </div>
                                <div class="time_item">
                                    <h4>Cost</h4>
                                    <h5>SAR {{ $activeJob->budget }}</h5>
                                </div>
                                <div class="time_item">
                                    <h4>Proposal</h4>
                                    <h5>
                                        {{ proposalCount($activeJob->id) }}
                                    </h5>
                                </div>
                            </div>
                            <div class="category_area">
                                <h6>Categories</h6>
                                <ul class="category_list d-flex align-items-center flex-wrap gap-1">
                                    @foreach (json_decode($activeJob->category_names) as $catName)
                                        <li>
                                            <a href="javascript:void(0)"> {{ $catName }} </a>
                                        </li>
                                    @endforeach
                                </ul>
                            </div>
                        </div>
                    @endforeach
                </div>
            </section>
        </div>
        <div class="tab-pane fade" id="pills-profile" role="tabpanel" aria-labelledby="pills-profile-tab"
            tabindex="0">
            <section class="active_tab_wrapper mrn-24">
                <div class="mr-24">
                    @foreach ($in_order_jobs as $iJob)
                        @php
                            $order = App\Models\Order::select('id', 'seller_id', 'amount')->where('job_id', $iJob->id)->first();
                        @endphp
                        <div class="active_post_card">
                            <div class="post_title_grid">
                                <h3>
                                    {{ $iJob->title }}
                                </h3>
                                <button type="button" wire:click.prevent='startChat({{ $order->id }})' class="">
                                    <img src="{{ asset('assets/app/icons/message.svg') }}"
                                        alt="more vertical icon" />
                                </button>
                            </div>

                            <div class="post_time_grid">
                                <div class="time_item">
                                    <a href="{{ route('client.jobDetails', ['id' => $iJob->id]) }}">
                                        <h4>Estimate</h4>
                                        <h5>{{ $iJob->project_size }}</h5>
                                    </a>
                                </div>
                                <div class="time_item">
                                    <h4>Cost</h4>
                                    <h5>SAR {{ $order->amount }}</h5>
                                </div>
                                <div class="time_item">
                                    <h4>Proposal</h4>
                                    <div class="client_area d-flex align-items-center gap-1">
                                        <img src="{{ asset('assets/app/images/user/client_user.png') }}"
                                            alt="user image" class="user_img" />
                                        <h5>
                                            {{ getUserByID($order->seller_id)->first_name }} {{ getUserByID($order->seller_id)->last_name }}
                                        </h5>
                                    </div>
                                </div>
                            </div>
                            <div class="order_description_area">
                                <p class="descriptionPara">
                                    {{ $iJob->description }}
                                </p>
                            </div>
                            <div class="category_area">
                                <h6>Categories</h6>
                                <ul class="category_list d-flex align-items-center flex-wrap gap-1">
                                    @foreach (json_decode($iJob->category_names) as $catName)
                                        <li>
                                            <a href="javascript:void(0)"> {{ $catName }} </a>
                                        </li>
                                    @endforeach
                                </ul>
                            </div>
                            <div class="order_action_btn_area">
                                <a href="#" class="cancel_job_btn">Cancel the job</a>
                                <a href="#" class="complete_job_btn">
                                    <span>Completed the job</span>
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
            <section class="active_tab_wrapper mrn-24">
                <div class="mr-24">
                    @foreach ($draft_jobs as $job)
                        <div class="active_post_card">
                            <div class="post_title_grid">
                                <h3>
                                    {{ $job->title }}
                                </h3>
                                <button type="button" class="postMoreBtn">
                                    <img src="{{ asset('assets/app/icons/more-vertical.svg') }}"
                                        alt="more vertical icon" />
                                </button>
                            </div>
                            <div class="post_time_grid">
                                <div class="time_item">
                                    <a href="{{ route('client.jobDetails', ['id' => $job->id]) }}">
                                        <h4>Estimate</h4>
                                        <h5>{{ $job->project_size }}</h5>
                                    </a>
                                </div>
                                <div class="time_item">
                                    <h4>Cost</h4>
                                    <h5>SAR {{ $job->budget }}</h5>
                                </div>
                            </div>
                            <div class="order_description_area">
                                <p class="descriptionPara">
                                    {{ $job->description }}
                                </p>
                            </div>
                            <div class="category_area">
                                <h6>Categories</h6>
                                <ul class="category_list d-flex align-items-center flex-wrap gap-1">
                                    <li>
                                        <a href="#"> General Furniture Assembly </a>
                                    </li>
                                    <li>
                                        <a href="#"> IKEA Assembly </a>
                                    </li>
                                    <li>
                                        <a href="#"> Bookshelf Assembly </a>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    @endforeach
                </div>
            </section>
        </div>
        <div class="tab-pane fade" id="pills-disabled" role="tabpanel" aria-labelledby="pills-disabled-tab"
            tabindex="0">
            <section class="active_tab_wrapper mrn-24">
                <div class="mr-24">
                    @foreach ($finished_jobs as $job)
                        <div class="active_post_card">
                            <div class="post_title_grid">
                                <h3>
                                    {{ $job->title }}
                                </h3>
                                <button type="button" class="postMoreBtn">
                                    <img src="{{ asset('assets/app/icons/more-vertical.svg') }}"
                                        alt="more vertical icon" />
                                </button>
                            </div>
                            <div class="post_time_grid post_time_draft_grid">
                                <div class="time_item">
                                    <a href="{{ route('client.jobDetails', ['id' => $job->id]) }}">
                                        <h4>Estimate</h4>
                                        <h5>{{ $job->project_size }}</h5>
                                    </a>
                                </div>
                                <div class="time_item">
                                    <h4>Cost</h4>
                                    <h5>{{ $job->budget }}</h5>
                                </div>
                                <div class="time_item">
                                    <h4>Review</h4>
                                    <h5 class="review">Due review</h5>
                                </div>
                            </div>
                            <div class="order_description_area">
                                <p class="descriptionPara">
                                    {{ $job->description }}
                                </p>
                            </div>
                            <div class="category_area">
                                <h6>Categories</h6>
                                <ul class="category_list d-flex align-items-center flex-wrap gap-1">
                                    <li>
                                        <a href="#"> General Furniture Assembly </a>
                                    </li>
                                    <li>
                                        <a href="#"> IKEA Assembly </a>
                                    </li>
                                    <li>
                                        <a href="#"> Bookshelf Assembly </a>
                                    </li>
                                </ul>
                            </div>
                            <button type="button" class="review_btn reviewBtn">
                                <img src="{{ asset('assets/app/icons/Star_big.svg') }}" alt="star icon" />
                                <span>Give a review</span>
                            </button>
                        </div>
                    @endforeach
                </div>
            </section>
        </div>
    </div>

    @livewire('client.layouts.inc.header')

    <!-- More Dropdown Section  -->
    <section wire:ignore.self class="more_dropdown_area" id="moreDropdownArea">
        <ul class="dropdown_list">
            <li>
                <a wire:click.prevent='viewDetails'> View details </a>
            </li>
            <li>
                <a wire:click.prevent='viewDetails'> Edit </a>
            </li>
            <li>
                <a wire:click.prevent='viewDetails' class="red"> Remove </a>
            </li>
        </ul>
    </section>
    <!-- Review Modal  -->
    <div class="ratting_modal_area" id="rattingModalArea">
        <form action="" class="form_area">
            <div class="input_row">
                <label for="#" class="form_label text-center">Give a review</label>
                <div class="d-flex justify-content-center flex-wrap gap-2 mt-3" id="rattingArea"></div>
                <div class="ratting_number">
                    <span id="rattingNumber">0</span>/5
                </div>
            </div>
            <div class="input_row">
                <label for="" class="form_label text-center">How was your experience with Provider</label>
                <textarea rows="7" name="" id="" placeholder="Write your experience "
                    class="input_field bg-transparent"></textarea>
                <div class="form_status justify-content-end text-end">
                    999 characters left
                </div>
            </div>
            <button type="submit" class="login_btn">Publish</button>
        </form>
    </div>
    <div wire:ignore.self class="overlay removeDropdownBtn" id="dropdownOverlay"></div>
</div>

@push('scripts')
    <script>
        $(document).ready(function() {
            //Ratting
            $("#rattingArea").starRating({
                totalStars: 5,
                initialRating: 0,
                // useFullStars:true,
                // readOnly:true,
                starSize: 40,
                disableAfterRate: false,
                emptyColor: "white",
                strokeColor: "#000",
                activeColor: "#000",
                hoverColor: "#000",
                ratedColor: "#000",
                callback: function(currentRating, $el) {
                    $("#rattingNumber").text(currentRating);
                },
            });
            // set rating example
            // $("your-selector").starRating("setRating", 2.5);
            // set rating and round
            // $("your-selector").starRating("setRating", 2.8, true); // 3.0
        });
    </script>
@endpush
