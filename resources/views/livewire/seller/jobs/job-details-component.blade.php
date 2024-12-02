<div>
    <section class="bids_wrapper h-full-screen space-between">
        <div class="w-100">
            <div class="back_btn_grid back_more_btn_grid back_btn_white pt-12">
                <button type="button" class="page_back_btn page_back_gray_btn" onclick="history.back()">
                    <img src="{{ asset('assets/app/icons/arrow-left.svg') }}" alt="arrow left" />
                </button>
                <h3>Job Details</h3>
            </div>
            <div class="bids_card mt-8">
                <h1 class="bids_title">
                    {{ $jobDetails->title }}
                </h1>
                <div class="details_content">
                    <p>
                        {{ $jobDetails->description }}
                    </p>
                </div>
                <div class="bid_inf_grid">
                    <div>
                        <div class="d-flex align-items-center gap-1">
                            <img src="{{ asset('assets/app/icons/money-03.svg') }}" alt="money icon" class="bid_icon" />
                            <h4>Budget</h4>
                        </div>
                        <h3>{{ $jobDetails->budget }} SAR</h3>
                    </div>
                    <div>
                        <div class="d-flex align-items-center gap-1">
                            <img src="{{ asset('assets/app/icons/time-05.svg') }}" alt="time icon" class="bid_icon" />
                            <h4>Posted</h4>
                        </div>
                        <h5>{{ \Carbon\Carbon::parse($jobDetails->created_at)->locale('en')->diffForHumans() }}</h5>
                    </div>
                </div>
                <ul class="bid_tag_list d-flex align-items-center flex-wrap">
                    <li>Design</li>
                    <li>Banner Design</li>
                </ul>
            </div>
        </div>
        <div class="w-100">
            <div class="bids_wishlist_grid mt-24">
                <!-- Add "wishlist_active" class if already have in wishlsit  -->
                <button type="button" class="wishlist_btn">
                    <img src="{{ asset('assets/app/icons/heart.svg') }}" alt="heart icon" class="inactive" />
                    <img src="{{ asset('assets/app/icons/heart-white.svg') }}" alt="heart icon" class="active" />
                </button>
                <a href="{{ route('seller.sellerJobsApply') }}" type="button" class="login_btn login_btn_sm">
                    Apply Bid
                </a>
            </div>
        </div>
    </section>
</div>
