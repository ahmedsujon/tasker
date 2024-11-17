<div>
    <section class="active_post_wrapper">
        <div class="back_btn_grid back_btn_white pt-12">
            <button type="button" class="page_back_btn" onclick="history.back()">
                <img src="{{ asset('assets/app/icons/arrow-left.svg') }}" alt="arrow left" />
            </button>
            <h3>View job</h3>
        </div>

        <ul class="tab_list nav d-flex align-items-center justify-content-between flex-wrap gap-3" id="pills-tab"
            role="tablist">
            <li class="nav-item" role="presentation">
                <button class="nav-link active" id="pills-home-tab" data-bs-toggle="pill" data-bs-target="#pills-home"
                    type="button" role="tab" aria-controls="pills-home" aria-selected="true">
                    Details
                </button>
            </li>
            <li class="nav-item" role="presentation">
                <button class="nav-link" id="pills-profile-tab" data-bs-toggle="pill" data-bs-target="#pills-profile"
                    type="button" role="tab" aria-controls="pills-profile" aria-selected="false">
                    Proposal (25)
                </button>
            </li>
            <li class="nav-item" role="presentation">
                <button class="nav-link" id="pills-contact-tab" data-bs-toggle="pill" data-bs-target="#pills-contact"
                    type="button" role="tab" aria-controls="pills-contact" aria-selected="false">
                    Cancel
                </button>
            </li>
        </ul>
    </section>
    <div class="tab-content" id="pills-tabContent">
        <div class="tab-pane fade show active" id="pills-home" role="tabpanel" aria-labelledby="pills-home-tab"
            tabindex="0">
            <!-- Active Post Tab Section  -->
            <section class="active_tab_wrapper active_post_view_wrapper mrn-24">
                <div class="mr-24">
                    <div class="active_post_card">
                        <div class="post_title_grid">
                            <h3>
                                {{ $jobDetails->title }}
                            </h3>
                            <button type="button" class="postMoreBtn">
                                <img src="{{ asset('assets/app/icons/more-vertical.svg') }}" alt="more vertical icon" />
                            </button>
                        </div>
                        <div class="post_time_grid post_time_draft_grid">
                            <div class="time_item">
                                <h4>Estimate</h4>
                                <h5>{{ $jobDetails->project_size }}</h5>
                            </div>
                            <div class="time_item">
                                <h4>Cost</h4>
                                <h5>SAR {{ $jobDetails->budget }}</h5>
                            </div>
                            <div class="time_item">
                                <h4>Proposal</h4>
                                <h5>25</h5>
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
                    <div class="active_post_card">
                        <div class="post_title_grid">
                            <h3>
                                I’m looking for a service provider for furniture assembly in
                                my shop
                            </h3>
                            <button type="button" class="postMoreBtn">
                                <img src="{{ asset('assets/app/icons/more-vertical.svg') }}" alt="more vertical icon" />
                            </button>
                        </div>
                        <div class="post_time_grid post_time_draft_grid">
                            <div class="time_item">
                                <h4>Estimate</h4>
                                <h5>4 - 6 hours</h5>
                            </div>
                            <div class="time_item">
                                <h4>Cost</h4>
                                <h5>SAR 300</h5>
                            </div>
                            <div class="time_item">
                                <h4>Proposal</h4>
                                <h5>25</h5>
                            </div>
                        </div>
                        <div class="order_description_area">
                            <p class="descriptionPara">
                                I am seeking a skilled and reliable service provider to
                                handle the assembly of furniture in my shop. The ideal
                                candidate will have experience with assembling various types
                                of furniture, including shelving units, display cases, and
                                seating. Attention to detail and the ability to work
                                efficiently are essential more Responsibilities: Assemble
                                furniture according to manufacturer instructions. Ensure all
                                pieces are correctly aligned and securely fastened. Clean up
                                the work area after assembly. Communicate any issues or
                                missing parts promptly. Requirements: Proven experience in
                                furniture assembly. Own tools and equipment preferred.
                                Ability to work within specified timeframes. Location:
                                Riyadh ,Capital of Saudi Arabia Application:If you’re
                                interested in this opportunity, please contact me with your
                                availability and rates.
                            </p>
                            <div class="description_list">
                                <h4>Responsibilities:</h4>
                                <ul>
                                    <li>
                                        Assemble furniture according to manufacturer
                                        instructions.
                                    </li>
                                    <li>
                                        Ensure all pieces are correctly aligned and securely
                                        fastened.
                                    </li>
                                    <li>Clean up the work area after assembly.</li>
                                    <li>Communicate any issues or missing parts promptly.</li>
                                </ul>
                            </div>
                            <div class="description_list">
                                <h4>Requirements:</h4>
                                <ul>
                                    <li>Proven experience in furniture assembly.</li>
                                    <li>Own tools and equipment preferred.</li>
                                    <li>Ability to work within specified timeframes.</li>
                                </ul>
                            </div>
                            <div class="description_list">
                                <h4>Location: Riyadh ,Capital of Saudi Arabia</h4>
                            </div>
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
                    <div class="active_post_card">
                        <div class="post_title_grid">
                            <h3>
                                I’m looking for a service provider for furniture assembly in
                                my shop
                            </h3>
                            <button type="button" class="postMoreBtn">
                                <img src="{{ asset('assets/app/icons/more-vertical.svg') }}" alt="more vertical icon" />
                            </button>
                        </div>
                        <div class="post_time_grid post_time_draft_grid">
                            <div class="time_item">
                                <h4>Estimate</h4>
                                <h5>4 - 6 hours</h5>
                            </div>
                            <div class="time_item">
                                <h4>Cost</h4>
                                <h5>SAR 300</h5>
                            </div>
                            <div class="time_item">
                                <h4>Proposal</h4>
                                <h5>25</h5>
                            </div>
                        </div>
                        <div class="order_description_area">
                            <p class="descriptionPara">
                                I am seeking a skilled and reliable service provider to
                                handle the assembly of furniture in my shop. The ideal
                                candidate will have experience with assembling various types
                                of furniture, including shelving units, display cases, and
                                seating. Attention to detail and the ability to work
                                efficiently are essential more Responsibilities: Assemble
                                furniture according to manufacturer instructions. Ensure all
                                pieces are correctly aligned and securely fastened. Clean up
                                the work area after assembly. Communicate any issues or
                                missing parts promptly. Requirements: Proven experience in
                                furniture assembly. Own tools and equipment preferred.
                                Ability to work within specified timeframes. Location:
                                Riyadh ,Capital of Saudi Arabia Application:If you’re
                                interested in this opportunity, please contact me with your
                                availability and rates.
                            </p>
                            <div class="description_list">
                                <h4>Responsibilities:</h4>
                                <ul>
                                    <li>
                                        Assemble furniture according to manufacturer
                                        instructions.
                                    </li>
                                    <li>
                                        Ensure all pieces are correctly aligned and securely
                                        fastened.
                                    </li>
                                    <li>Clean up the work area after assembly.</li>
                                    <li>Communicate any issues or missing parts promptly.</li>
                                </ul>
                            </div>
                            <div class="description_list">
                                <h4>Requirements:</h4>
                                <ul>
                                    <li>Proven experience in furniture assembly.</li>
                                    <li>Own tools and equipment preferred.</li>
                                    <li>Ability to work within specified timeframes.</li>
                                </ul>
                            </div>
                            <div class="description_list">
                                <h4>Location: Riyadh ,Capital of Saudi Arabia</h4>
                            </div>
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
                </div>
            </section>
        </div>
        <div class="tab-pane fade" id="pills-profile" role="tabpanel" aria-labelledby="pills-profile-tab"
            tabindex="0">
            <!-- Active Post Tab Section  -->
            <section class="active_tab_wrapper active_post_view_wrapper mrn-24">
                <div class="mr-24">
                    <div class="active_post_card">
                        <div class="post_user_grid">
                            <img src="{{ asset('assets/app/images/user/client_user.png') }}" alt="user image"
                                class="user_image" />
                            <div class="info">
                                <h4>Kazi Mahbub</h4>
                                <div class="d-flex align-items-center flex-wrap gap-1 mt-1">
                                    <img src="{{ asset('assets/app/icons/star.svg') }}" alt="star icon"
                                        class="star_icon" />
                                    <h5>4.6</h5>
                                    <h6>12 reviews</h6>
                                </div>
                            </div>
                            <h3 class="time">10 min ago</h3>
                        </div>
                        <div class="post_title_grid d-block">
                            <h3>
                                I’m fit for this project. Far now I understand. Let’s start
                                this project.
                            </h3>
                        </div>
                        <div class="performance_grid">
                            <div class="point_area">
                                <img src="{{ asset('assets/app/icons/dollar_key.svg') }}" alt="dollar key"
                                    class="dollar_key" />
                                <div class="content">
                                    <h4>Offering Cost</h4>
                                    <h5>SAR 250</h5>
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
                            </div>
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
                        <div class="order_action_btn_area">
                            <a href="#" class="cancel_job_btn rounded_btn">Cancel </a>
                            <a href="#" class="complete_job_btn rounded_btn">
                                <span>Accept & Continue</span>
                                <img src="{{ asset('assets/app/icons/arrow-right-purple.svg') }}" alt="arrow right" />
                            </a>
                        </div>
                    </div>
                    <div class="active_post_card">
                        <div class="post_user_grid">
                            <img src="{{ asset('assets/app/images/user/client_user.png') }}" alt="user image"
                                class="user_image" />
                            <div class="info">
                                <h4>Kazi Mahbub</h4>
                                <div class="d-flex align-items-center flex-wrap gap-1 mt-1">
                                    <img src="{{ asset('assets/app/icons/star.svg') }}" alt="star icon"
                                        class="star_icon" />
                                    <h5>4.6</h5>
                                    <h6>12 reviews</h6>
                                </div>
                            </div>
                            <h3 class="time">10 min ago</h3>
                        </div>
                        <div class="post_title_grid d-block">
                            <h3>
                                I’m fit for this project. Far now I understand. Let’s start
                                this project.
                            </h3>
                        </div>
                        <div class="performance_grid">
                            <div class="point_area">
                                <img src="{{ asset('assets/app/icons/dollar_key.svg') }}" alt="dollar key"
                                    class="dollar_key" />
                                <div class="content">
                                    <h4>Offering Cost</h4>
                                    <h5>SAR 250</h5>
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
                            </div>
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
                        <div class="order_action_btn_area">
                            <a href="#" class="cancel_job_btn rounded_btn">Cancel </a>
                            <a href="#" class="complete_job_btn rounded_btn">
                                <span>Accept & Continue</span>
                                <img src="{{ asset('assets/app/icons/arrow-right-purple.svg') }}"
                                    alt="arrow right" />
                            </a>
                        </div>
                    </div>
                    <div class="active_post_card">
                        <div class="post_user_grid">
                            <img src="{{ asset('assets/app/images/user/client_user.png') }}" alt="user image"
                                class="user_image" />
                            <div class="info">
                                <h4>Kazi Mahbub</h4>
                                <div class="d-flex align-items-center flex-wrap gap-1 mt-1">
                                    <img src="{{ asset('assets/app/icons/star.svg') }}" alt="star icon"
                                        class="star_icon" />
                                    <h5>4.6</h5>
                                    <h6>12 reviews</h6>
                                </div>
                            </div>
                            <h3 class="time">10 min ago</h3>
                        </div>
                        <div class="post_title_grid d-block">
                            <h3>
                                I’m fit for this project. Far now I understand. Let’s start
                                this project.
                            </h3>
                        </div>
                        <div class="performance_grid">
                            <div class="point_area">
                                <img src="{{ asset('assets/app/icons/dollar_key.svg') }}" alt="dollar key"
                                    class="dollar_key" />
                                <div class="content">
                                    <h4>Offering Cost</h4>
                                    <h5>SAR 250</h5>
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
                            </div>
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
                        <div class="order_action_btn_area">
                            <a href="#" class="cancel_job_btn rounded_btn">Cancel </a>
                            <a href="#" class="complete_job_btn rounded_btn">
                                <span>Accept & Continue</span>
                                <img src="{{ asset('assets/app/icons/arrow-right-purple.svg') }}"
                                    alt="arrow right" />
                            </a>
                        </div>
                    </div>
                </div>
            </section>
        </div>
        <div class="tab-pane fade" id="pills-contact" role="tabpanel" aria-labelledby="pills-contact-tab"
            tabindex="0">
            <!-- Active Post Tab Section  -->
            <section class="active_tab_wrapper active_post_view_wrapper mrn-24">
                <div class="mr-24">
                    <div class="active_post_card">
                        <div class="post_user_grid">
                            <img src="{{ asset('assets/app/images/user/client_user.png') }}" alt="user image"
                                class="user_image" />
                            <div class="info">
                                <h4>Kazi Mahbub</h4>
                                <div class="d-flex align-items-center flex-wrap gap-1 mt-1">
                                    <img src="{{ asset('assets/app/icons/star.svg') }}" alt="star icon"
                                        class="star_icon" />
                                    <h5>4.6</h5>
                                    <h6>12 reviews</h6>
                                </div>
                            </div>
                            <h3 class="time">10 min ago</h3>
                        </div>
                        <div class="post_title_grid d-block">
                            <h3>
                                I’m fit for this project. Far now I understand. Let’s start
                                this project.
                            </h3>
                        </div>
                        <div class="performance_grid">
                            <div class="point_area">
                                <img src="{{ asset('assets/app/icons/dollar_key.svg') }}" alt="dollar key"
                                    class="dollar_key" />
                                <div class="content">
                                    <h4>Offering Cost</h4>
                                    <h5>SAR 250</h5>
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
                            </div>
                        </div>
                        <div class="file_uploaded_area">
                            <h3>Attached files</h3>
                            <div class="upload_grid remove_delete_btn_grid">
                                <img src="{{ asset('assets/app/images/client/file_upload_image1.png') }}"
                                    alt="upload image" class="upload_img" />
                                <div>
                                    <h4>Attachment file 2024.jpeg</h4>
                                    <h6>1.2 MB</h6>
                                </div>
                            </div>
                            <div class="upload_grid remove_delete_btn_grid">
                                <img src="{{ asset('assets/app/images/client/file_upload_image2.png') }}"
                                    alt="upload image" class="upload_img" />
                                <div>
                                    <h4>Attachment file 2024.jpeg</h4>
                                    <h6>1.2 MB</h6>
                                </div>
                            </div>
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
                        <div class="order_action_btn_area">
                            <a href="#" class="cancel_job_btn rounded_btn">Cancel </a>
                            <a href="#" class="complete_job_btn rounded_btn">
                                <span>Accept & Continue</span>
                                <img src="{{ asset('assets/app/icons/arrow-right-purple.svg') }}"
                                    alt="arrow right" />
                            </a>
                        </div>
                    </div>
                    <div class="active_post_card">
                        <div class="post_user_grid">
                            <img src="{{ asset('assets/app/images/user/client_user.png') }}" alt="user image"
                                class="user_image" />
                            <div class="info">
                                <h4>Kazi Mahbub</h4>
                                <div class="d-flex align-items-center flex-wrap gap-1 mt-1">
                                    <img src="{{ asset('assets/app/icons/star.svg') }}" alt="star icon"
                                        class="star_icon" />
                                    <h5>4.6</h5>
                                    <h6>12 reviews</h6>
                                </div>
                            </div>
                            <h3 class="time">10 min ago</h3>
                        </div>
                        <div class="post_title_grid d-block">
                            <h3>
                                I’m fit for this project. Far now I understand. Let’s start
                                this project.
                            </h3>
                        </div>
                        <div class="performance_grid">
                            <div class="point_area">
                                <img src="{{ asset('assets/app/icons/dollar_key.svg') }}" alt="dollar key"
                                    class="dollar_key" />
                                <div class="content">
                                    <h4>Offering Cost</h4>
                                    <h5>SAR 250</h5>
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
                            </div>
                        </div>
                        <div class="file_uploaded_area">
                            <h3>Attached files</h3>
                            <div class="upload_grid remove_delete_btn_grid">
                                <img src="{{ asset('assets/app/images/client/file_upload_image1.png') }}"
                                    alt="upload image" class="upload_img" />
                                <div>
                                    <h4>Attachment file 2024.jpeg</h4>
                                    <h6>1.2 MB</h6>
                                </div>
                            </div>
                            <div class="upload_grid remove_delete_btn_grid">
                                <img src="{{ asset('assets/app/images/client/file_upload_image2.png') }}"
                                    alt="upload image" class="upload_img" />
                                <div>
                                    <h4>Attachment file 2024.jpeg</h4>
                                    <h6>1.2 MB</h6>
                                </div>
                            </div>
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
                        <div class="order_action_btn_area">
                            <a href="#" class="cancel_job_btn rounded_btn">Cancel </a>
                            <a href="#" class="complete_job_btn rounded_btn">
                                <span>Accept & Continue</span>
                                <img src="{{ asset('assets/app/icons/arrow-right-purple.svg') }}"
                                    alt="arrow right" />
                            </a>
                        </div>
                    </div>
                    <div class="active_post_card">
                        <div class="post_user_grid">
                            <img src="{{ asset('assets/app/images/user/client_user.png') }}" alt="user image"
                                class="user_image" />
                            <div class="info">
                                <h4>Kazi Mahbub</h4>
                                <div class="d-flex align-items-center flex-wrap gap-1 mt-1">
                                    <img src="{{ asset('assets/app/icons/star.svg') }}" alt="star icon"
                                        class="star_icon" />
                                    <h5>4.6</h5>
                                    <h6>12 reviews</h6>
                                </div>
                            </div>
                            <h3 class="time">10 min ago</h3>
                        </div>
                        <div class="post_title_grid d-block">
                            <h3>
                                I’m fit for this project. Far now I understand. Let’s start
                                this project.
                            </h3>
                        </div>
                        <div class="performance_grid">
                            <div class="point_area">
                                <img src="{{ asset('assets/app/icons/dollar_key.svg') }}" alt="dollar key"
                                    class="dollar_key" />
                                <div class="content">
                                    <h4>Offering Cost</h4>
                                    <h5>SAR 250</h5>
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
                            </div>
                        </div>
                        <div class="file_uploaded_area">
                            <h3>Attached files</h3>
                            <div class="upload_grid remove_delete_btn_grid">
                                <img src="{{ asset('assets/app/images/client/file_upload_image1.png') }}"
                                    alt="upload image" class="upload_img" />
                                <div>
                                    <h4>Attachment file 2024.jpeg</h4>
                                    <h6>1.2 MB</h6>
                                </div>
                            </div>
                            <div class="upload_grid remove_delete_btn_grid">
                                <img src="{{ asset('assets/app/images/client/file_upload_image2.png') }}"
                                    alt="upload image" class="upload_img" />
                                <div>
                                    <h4>Attachment file 2024.jpeg</h4>
                                    <h6>1.2 MB</h6>
                                </div>
                            </div>
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
                        <div class="order_action_btn_area">
                            <a href="#" class="cancel_job_btn rounded_btn">Cancel </a>
                            <a href="#" class="complete_job_btn rounded_btn">
                                <span>Accept & Continue</span>
                                <img src="{{ asset('assets/app/icons/arrow-right-purple.svg') }}"
                                    alt="arrow right" />
                            </a>
                        </div>
                    </div>
                </div>
            </section>
        </div>
    </div>
</div>
