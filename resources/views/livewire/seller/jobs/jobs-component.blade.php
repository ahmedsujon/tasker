<div>
    <div>
        <ul class="tab_list border_tab_list nav d-flex align-items-center justify-content-between flex-wrap gap-3 mtm-24"
            id="pills-tab" role="tablist">
            <li class="nav-item" role="presentation">
                <button class="nav-link active" id="pills-home-tab" data-bs-toggle="pill" data-bs-target="#pills-home"
                    type="button" role="tab" aria-controls="pills-home" aria-selected="true">
                    My Bids
                </button>
            </li>
            <li class="nav-item" role="presentation">
                <button class="nav-link" id="pills-profile-tab" data-bs-toggle="pill" data-bs-target="#pills-profile"
                    type="button" role="tab" aria-controls="pills-profile" aria-selected="false">
                    Saved
                </button>
            </li>
            <li class="nav-item" role="presentation">
                <button class="nav-link" id="pills-contact-tab" data-bs-toggle="pill" data-bs-target="#pills-contact"
                    type="button" role="tab" aria-controls="pills-contact" aria-selected="false">
                    Active Bid
                </button>
            </li>
        </ul>
    </div>
    <div class="tab-content mt-24" id="pills-tabContent">
        <div class="tab-pane fade show active" id="pills-home" role="tabpanel" aria-labelledby="pills-home-tab"
            tabindex="0">
            <!-- Bid Section  -->
            <section class="bids_wrapper">
                @foreach ($jobs as $job)
                    <div class="bids_card">
                        <a href="{{ route('seller.sellerJobsDetails', ['id' => $job->id]) }}"
                            class="bids_title text-line-clamp2">
                            {{ $job->title }}
                        </a>
                        <div class="bid_inf_grid">
                            <div>
                                <div class="d-flex align-items-center gap-1">
                                    <img src="{{ asset('assets/app/icons/money-03.svg') }}" alt="money icon"
                                        class="bid_icon" />
                                    <h4>Budget</h4>
                                </div>
                                <h3>{{ $job->budget }} SAR</h3>
                            </div>
                            <div>
                                <div class="d-flex align-items-center gap-1">
                                    <img src="{{ asset('assets/app/icons/time-05.svg') }}" alt="time icon"
                                        class="bid_icon" />
                                    <h4>Posted</h4>
                                </div>
                                <h5>{{ \Carbon\Carbon::parse($job->created_at)->locale('en')->diffForHumans() }}</h5>
                            </div>
                            <div>
                                <div class="d-flex align-items-cente gap-1r">
                                    <img src="{{ asset('assets/app/icons/location-03.svg') }}" alt="location icon"
                                        class="bid_icon" />
                                    <h4>{{ $job->location }}</h4>
                                </div>
                            </div>
                        </div>
                        <ul class="bid_tag_list d-flex align-items-center flex-wrap">
                            @foreach (json_decode($job->category_names) as $ctName)
                                <li>{{ $ctName }}</li>
                            @endforeach
                        </ul>
                    </div>
                @endforeach
            </section>
        </div>
        <div class="tab-pane fade" id="pills-profile" role="tabpanel" aria-labelledby="pills-profile-tab"
            tabindex="0">
            <!-- Bid Section  -->
            <section class="bids_wrapper">
                @foreach ($jobs as $job)
                    <div class="bids_card">
                        <a href="{{ route('seller.sellerJobsDetails', ['id' => $job->id]) }}"
                            class="bids_title text-line-clamp2">
                            {{ $job->title }}
                        </a>
                        <div class="bid_inf_grid">
                            <div>
                                <div class="d-flex align-items-center gap-1">
                                    <img src="{{ asset('assets/app/icons/money-03.svg') }}" alt="money icon"
                                        class="bid_icon" />
                                    <h4>Budget</h4>
                                </div>
                                <h3>{{ $job->budget }} SAR</h3>
                            </div>
                            <div>
                                <div class="d-flex align-items-center gap-1">
                                    <img src="{{ asset('assets/app/icons/time-05.svg') }}" alt="time icon"
                                        class="bid_icon" />
                                    <h4>Posted</h4>
                                </div>
                                <h5>{{ \Carbon\Carbon::parse($job->created_at)->locale('en')->diffForHumans() }}
                                </h5>
                            </div>
                            <div>
                                <div class="d-flex align-items-cente gap-1r">
                                    <img src="{{ asset('assets/app/icons/location-03.svg') }}" alt="location icon"
                                        class="bid_icon" />
                                    <h4>{{ $job->location }}</h4>
                                </div>
                            </div>
                        </div>
                        <ul class="bid_tag_list d-flex align-items-center flex-wrap">
                            @foreach (json_decode($job->category_names) as $ctName)
                                <li>{{ $ctName }}</li>
                            @endforeach
                        </ul>
                    </div>
                @endforeach
            </section>
        </div>
        <div class="tab-pane fade" id="pills-contact" role="tabpanel" aria-labelledby="pills-contact-tab"
            tabindex="0">
            <!-- Bid Section  -->
            <section class="bids_wrapper">
                @foreach ($jobs as $job)
                    <div class="bids_card">
                        <a href="{{ route('seller.sellerJobsDetails', ['id' => $job->id]) }}"
                            class="bids_title text-line-clamp2">
                            {{ $job->title }}
                        </a>
                        <div class="bid_inf_grid">
                            <div>
                                <div class="d-flex align-items-center gap-1">
                                    <img src="{{ asset('assets/app/icons/money-03.svg') }}" alt="money icon"
                                        class="bid_icon" />
                                    <h4>Budget</h4>
                                </div>
                                <h3>{{ $job->budget }} SAR</h3>
                            </div>
                            <div>
                                <div class="d-flex align-items-center gap-1">
                                    <img src="{{ asset('assets/app/icons/time-05.svg') }}" alt="time icon"
                                        class="bid_icon" />
                                    <h4>Posted</h4>
                                </div>
                                <h5>{{ \Carbon\Carbon::parse($job->created_at)->locale('en')->diffForHumans() }}
                                </h5>
                            </div>
                            <div>
                                <div class="d-flex align-items-cente gap-1r">
                                    <img src="{{ asset('assets/app/icons/location-03.svg') }}" alt="location icon"
                                        class="bid_icon" />
                                    <h4>{{ $job->location }}</h4>
                                </div>
                            </div>
                        </div>
                        <ul class="bid_tag_list d-flex align-items-center flex-wrap">
                            @foreach (json_decode($job->category_names) as $ctName)
                                <li>{{ $ctName }}</li>
                            @endforeach
                        </ul>
                    </div>
                @endforeach
            </section>
        </div>
    </div>
    @livewire('seller.layouts.inc.header')

</div>
