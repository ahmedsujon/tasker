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
                @foreach ($seller_jobs as $seller_job)
                    <div class="bids_card">
                        <a href="{{ route('seller.sellerJobsDetails', ['id' => $seller_job->id]) }}"
                            class="bids_title text-line-clamp2">
                            {{ $seller_job->title }}
                        </a>
                        <div class="bid_inf_grid">
                            <div>
                                <div class="d-flex align-items-center gap-1">
                                    <img src="{{ asset('assets/app/icons/money-03.svg') }}" alt="money icon"
                                        class="bid_icon" />
                                    <h4>Budget</h4>
                                </div>
                                <h3>{{ $seller_job->budget }} SAR</h3>
                            </div>
                            <div>
                                <div class="d-flex align-items-center gap-1">
                                    <img src="{{ asset('assets/app/icons/time-05.svg') }}" alt="time icon"
                                        class="bid_icon" />
                                    <h4>Posted</h4>
                                </div>
                                <h5>{{ \Carbon\Carbon::parse($seller_job->created_at)->locale('en')->diffForHumans() }}</h5>
                            </div>
                            <div>
                                <div class="d-flex align-items-cente gap-1r">
                                    <img src="{{ asset('assets/app/icons/location-03.svg') }}" alt="location icon"
                                        class="bid_icon" />
                                    <h4>{{ $seller_job->location }}</h4>
                                </div>
                            </div>
                        </div>
                        <ul class="bid_tag_list d-flex align-items-center flex-wrap">
                            <li>Design</li>
                            <li>Banner Design</li>
                        </ul>
                    </div>
                @endforeach
            </section>
        </div>
        <div class="tab-pane fade" id="pills-profile" role="tabpanel" aria-labelledby="pills-profile-tab"
            tabindex="0">
            <!-- Bid Section  -->
            <section class="bids_wrapper">
                <div class="bids_card">
                    <a href="#" class="bids_title text-line-clamp2">
                        I have two tickets for the Al-Nassr Paris match for sale design
                    </a>
                    <div class="bid_inf_grid">
                        <div>
                            <div class="d-flex align-items-center gap-1">
                                <img src="{{ asset('assets/app/icons/money-03.svg') }}" alt="money icon"
                                    class="bid_icon" />
                                <h4>Budget</h4>
                            </div>
                            <h3>1,300 SAR</h3>
                        </div>
                        <div>
                            <div class="d-flex align-items-center gap-1">
                                <img src="{{ asset('assets/app/icons/time-05.svg') }}" alt="time icon"
                                    class="bid_icon" />
                                <h4>Posted</h4>
                            </div>
                            <h5>8 sec</h5>
                        </div>
                        <div>
                            <div class="d-flex align-items-cente gap-1r">
                                <img src="{{ asset('assets/app/icons/location-03.svg') }}" alt="location icon"
                                    class="bid_icon" />
                                <h4>Jeddah</h4>
                            </div>
                            <h5>8 sec</h5>
                        </div>
                    </div>
                    <ul class="bid_tag_list d-flex align-items-center flex-wrap">
                        <li>Design</li>
                        <li>Banner Design</li>
                    </ul>
                </div>
                <div class="bids_card">
                    <a href="#" class="bids_title text-line-clamp2">
                        Could you create a stylish sticker design for my car
                    </a>
                    <div class="bid_inf_grid">
                        <div>
                            <div class="d-flex align-items-center gap-1">
                                <img src="{{ asset('assets/app/icons/money-03.svg') }}" alt="money icon"
                                    class="bid_icon" />
                                <h4>Budget</h4>
                            </div>
                            <h3>1,300 SAR</h3>
                        </div>
                        <div>
                            <div class="d-flex align-items-center gap-1">
                                <img src="{{ asset('assets/app/icons/time-05.svg') }}" alt="time icon"
                                    class="bid_icon" />
                                <h4>Posted</h4>
                            </div>
                            <h5>20 min ago</h5>
                        </div>
                        <div>
                            <div class="d-flex align-items-cente gap-1r">
                                <img src="{{ asset('assets/app/icons/location-03.svg') }}" alt="location icon"
                                    class="bid_icon" />
                                <h4>Jeddah</h4>
                            </div>
                            <h5>8 sec</h5>
                        </div>
                    </div>
                    <ul class="bid_tag_list d-flex align-items-center flex-wrap">
                        <li>Design</li>
                        <li>Banner Design</li>
                    </ul>
                </div>
                <div class="bids_card">
                    <a href="#" class="bids_title text-line-clamp2">
                        Part of my fridge is damaged, and I urgently need it fixed
                    </a>
                    <div class="bid_inf_grid">
                        <div>
                            <div class="d-flex align-items-center gap-1">
                                <img src="{{ asset('assets/app/icons/money-03.svg') }}" alt="money icon"
                                    class="bid_icon" />
                                <h4>Budget</h4>
                            </div>
                            <h3>1,300 SAR</h3>
                        </div>
                        <div>
                            <div class="d-flex align-items-center gap-1">
                                <img src="{{ asset('assets/app/icons/time-05.svg') }}" alt="time icon"
                                    class="bid_icon" />
                                <h4>Posted</h4>
                            </div>
                            <h5>8 sec</h5>
                        </div>
                        <div>
                            <div class="d-flex align-items-cente gap-1r">
                                <img src="{{ asset('assets/app/icons/location-03.svg') }}" alt="location icon"
                                    class="bid_icon" />
                                <h4>Jeddah</h4>
                            </div>
                            <h5>8 sec</h5>
                        </div>
                    </div>
                    <ul class="bid_tag_list d-flex align-items-center flex-wrap">
                        <li>Design</li>
                        <li>Banner Design</li>
                    </ul>
                </div>
            </section>
        </div>
        <div class="tab-pane fade" id="pills-contact" role="tabpanel" aria-labelledby="pills-contact-tab"
            tabindex="0">
            <!-- Bid Section  -->
            <section class="bids_wrapper">
                <div class="bids_card">
                    <a href="#" class="bids_title text-line-clamp2">
                        I have two tickets for the Al-Nassr Paris match for sale design
                    </a>
                    <div class="bid_inf_grid">
                        <div>
                            <div class="d-flex align-items-center gap-1">
                                <img src="{{ asset('assets/app/icons/money-03.svg') }}" alt="money icon"
                                    class="bid_icon" />
                                <h4>Budget</h4>
                            </div>
                            <h3>1,300 SAR</h3>
                        </div>
                        <div>
                            <div class="d-flex align-items-center gap-1">
                                <img src="{{ asset('assets/app/icons/time-05.svg') }}" alt="time icon"
                                    class="bid_icon" />
                                <h4>Posted</h4>
                            </div>
                            <h5>8 sec</h5>
                        </div>
                        <div>
                            <div class="d-flex align-items-cente gap-1r">
                                <img src="{{ asset('assets/app/icons/location-03.svg') }}" alt="location icon"
                                    class="bid_icon" />
                                <h4>Jeddah</h4>
                            </div>
                            <h5>8 sec</h5>
                        </div>
                    </div>
                    <ul class="bid_tag_list d-flex align-items-center flex-wrap">
                        <li>Design</li>
                        <li>Banner Design</li>
                    </ul>
                </div>
                <div class="bids_card">
                    <a href="#" class="bids_title text-line-clamp2">
                        Could you create a stylish sticker design for my car
                    </a>
                    <div class="bid_inf_grid">
                        <div>
                            <div class="d-flex align-items-center gap-1">
                                <img src="{{ asset('assets/app/icons/money-03.svg') }}" alt="money icon"
                                    class="bid_icon" />
                                <h4>Budget</h4>
                            </div>
                            <h3>1,300 SAR</h3>
                        </div>
                        <div>
                            <div class="d-flex align-items-center gap-1">
                                <img src="{{ asset('assets/app/icons/time-05.svg') }}" alt="time icon"
                                    class="bid_icon" />
                                <h4>Posted</h4>
                            </div>
                            <h5>20 min ago</h5>
                        </div>
                        <div>
                            <div class="d-flex align-items-cente gap-1r">
                                <img src="{{ asset('assets/app/icons/location-03.svg') }}" alt="location icon"
                                    class="bid_icon" />
                                <h4>Jeddah</h4>
                            </div>
                            <h5>8 sec</h5>
                        </div>
                    </div>
                    <ul class="bid_tag_list d-flex align-items-center flex-wrap">
                        <li>Design</li>
                        <li>Banner Design</li>
                    </ul>
                </div>
                <div class="bids_card">
                    <a href="#" class="bids_title text-line-clamp2">
                        Part of my fridge is damaged, and I urgently need it fixed
                    </a>
                    <div class="bid_inf_grid">
                        <div>
                            <div class="d-flex align-items-center gap-1">
                                <img src="{{ asset('assets/app/icons/money-03.svg') }}" alt="money icon"
                                    class="bid_icon" />
                                <h4>Budget</h4>
                            </div>
                            <h3>1,300 SAR</h3>
                        </div>
                        <div>
                            <div class="d-flex align-items-center gap-1">
                                <img src="{{ asset('assets/app/icons/time-05.svg') }}" alt="time icon"
                                    class="bid_icon" />
                                <h4>Posted</h4>
                            </div>
                            <h5>8 sec</h5>
                        </div>
                        <div>
                            <div class="d-flex align-items-cente gap-1r">
                                <img src="{{ asset('assets/app/icons/location-03.svg') }}" alt="location icon"
                                    class="bid_icon" />
                                <h4>Jeddah</h4>
                            </div>
                            <h5>8 sec</h5>
                        </div>
                    </div>
                    <ul class="bid_tag_list d-flex align-items-center flex-wrap">
                        <li>Design</li>
                        <li>Banner Design</li>
                    </ul>
                </div>
            </section>
        </div>
    </div>
</div>
