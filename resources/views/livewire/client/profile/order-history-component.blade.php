<div>
    <div class="back_btn_grid mt-12">
        <button type="button" class="page_back_btn" onclick="history.back()">
            <img src="{{ asset('assets/app/icons/arrow-left.svg') }}" alt="arrow left" />
        </button>
        <h3>Order History</h3>
    </div>
    <section class="client_order_history_wrapper horizontal-m-w">
        <ul class="nav nav-pills" id="pills-tab" role="tablist">
            <li class="nav-item" role="presentation">
                <button class="nav-link active" id="pills-home-tab" data-bs-toggle="pill" data-bs-target="#pills-home"
                    type="button" role="tab" aria-controls="pills-home" aria-selected="true">
                    Order History
                </button>
            </li>
            <li class="nav-item" role="presentation">
                <button class="nav-link" id="pills-profile-tab" data-bs-toggle="pill" data-bs-target="#pills-profile"
                    type="button" role="tab" aria-controls="pills-profile" aria-selected="false">
                    Transaction
                </button>
            </li>
        </ul>
        <div class="tab-content" id="pills-tabContent">
            <div class="tab-pane fade show active" id="pills-home" role="tabpanel" aria-labelledby="pills-home-tab"
                tabindex="0">
                <div class="order_history_item">
                    <div class="order_history_grid">
                        <div class="img">
                            <img src="{{ asset('assets/app/images/client/order_history_image.png') }}"
                                alt="order history image" class="order_img" />
                        </div>
                        <div class="content">
                            <h3>
                                I have two tickets for the Al-Nassr Paris match for sale
                                design
                            </h3>
                            <h4>Banner Design</h4>
                        </div>
                    </div>
                    <div class="client_grid">
                        <div class="info_area">
                            <img src="{{ asset('assets/app/images/user/client_user.png') }}" alt="user image"
                                class="user_image" />
                            <div>
                                <h4 class="client_name">Carlis pinho</h4>
                                <h5 class="client_status">20 min ago</h5>
                                <!-- <h5 class="client_status active">Active</h5>
                    <h5 class="client_status not_active">Invisible</h5> -->
                            </div>
                        </div>
                        <div class="d-flex justify-content-end g-smm">
                            <!-- <button type="button" class="order_status_btn cancel">
                    Cancel
                  </button> -->
                            <button type="button" class="order_status_btn refound">
                                Refund
                            </button>
                            <button type="button" class="order_status_btn">
                                Inprocess
                            </button>
                        </div>
                    </div>
                    <div class="delivery_date_area">
                        <div class="d-flex align-items-center flex-wrap gap-1">
                            <img src="{{ asset('assets/app/icons/time-04.svg') }}" alt="time icon" />
                            <h4>Delivery Date</h4>
                        </div>
                        <h6>July 30, 2024</h6>
                    </div>
                    <div class="overall_ratting_area">
                        <div class="overall_title d-flex-between">
                            <h3>Overall rating</h3>
                            <div class="d-flex align-items-center justify-content-end flex-wrap gap-1">
                                <img src="{{ asset('assets/app/icons/star-01.svg') }}" alt="star icon" />
                                <h5>5.0</h5>
                            </div>
                        </div>
                        <ul class="others_ratting_list">
                            <li>
                                <h4>Overall rating</h4>
                                <div class="d-flex align-items-center justify-content-end flex-wrap gap-1">
                                    <img src="{{ asset('assets/app/icons/star-01.svg') }}" alt="star icon" />
                                    <h5>5.0</h5>
                                </div>
                            </li>
                            <li>
                                <h4>Hard Work</h4>
                                <div class="d-flex align-items-center justify-content-end flex-wrap gap-1">
                                    <img src="{{ asset('assets/app/icons/star-01.svg') }}" alt="star icon" />
                                    <h5>5.0</h5>
                                </div>
                            </li>
                        </ul>
                        <p>
                            Wow, what a fantastic experience! Your assistance in grasping
                            my vision and translating it accurately was invaluable. Thank
                            you so much! I'll definitely be returning for more!
                        </p>
                    </div>
                </div>
                <div class="order_history_item">
                    <div class="order_history_grid">
                        <div class="img">
                            <img src="{{ asset('assets/app/images/client/order_history_image.png') }}"
                                alt="order history image" class="order_img" />
                        </div>
                        <div class="content">
                            <h3>
                                I have two tickets for the Al-Nassr Paris match for sale
                                design
                            </h3>
                            <h4>Banner Design</h4>
                        </div>
                    </div>
                    <div class="client_grid">
                        <div class="info_area">
                            <img src="{{ asset('assets/app/images/user/client_user.png') }}" alt="user image"
                                class="user_image" />
                            <div>
                                <h4 class="client_name">Carlis pinho</h4>
                                <h5 class="client_status">20 min ago</h5>
                                <!-- <h5 class="client_status active">Active</h5>
                    <h5 class="client_status not_active">Invisible</h5> -->
                            </div>
                        </div>
                        <div class="d-flex justify-content-end g-smm">
                            <!-- <button type="button" class="order_status_btn cancel">
                    Cancel
                  </button> -->
                            <button type="button" class="order_status_btn complete">
                                Complete
                            </button>
                        </div>
                    </div>
                    <div class="delivery_date_area">
                        <div class="d-flex align-items-center flex-wrap gap-1">
                            <img src="{{ asset('assets/app/icons/time-04.svg') }}" alt="time icon" />
                            <h4>Delivery Date</h4>
                        </div>
                        <h6>July 30, 2024</h6>
                    </div>
                    <div class="overall_ratting_area">
                        <div class="overall_title d-flex-between">
                            <h3>Overall rating</h3>
                            <div class="d-flex align-items-center justify-content-end flex-wrap gap-1">
                                <img src="{{ asset('assets/app/icons/star-01.svg') }}" alt="star icon" />
                                <h5>5.0</h5>
                            </div>
                        </div>
                        <ul class="others_ratting_list">
                            <li>
                                <h4>Overall rating</h4>
                                <div class="d-flex align-items-center justify-content-end flex-wrap gap-1">
                                    <img src="{{ asset('assets/app/icons/star-01.svg') }}" alt="star icon" />
                                    <h5>5.0</h5>
                                </div>
                            </li>
                            <li>
                                <h4>Hard Work</h4>
                                <div class="d-flex align-items-center justify-content-end flex-wrap gap-1">
                                    <img src="{{ asset('assets/app/icons/star-01.svg') }}" alt="star icon" />
                                    <h5>5.0</h5>
                                </div>
                            </li>
                        </ul>
                        <p>
                            Wow, what a fantastic experience! Your assistance in grasping
                            my vision and translating it accurately was invaluable. Thank
                            you so much! I'll definitely be returning for more!
                        </p>
                    </div>
                </div>
            </div>
            <div class="tab-pane fade" id="pills-profile" role="tabpanel" aria-labelledby="pills-profile-tab"
                tabindex="0">
                <div class="transaction_area">
                    <h3 class="balance">Balance : <span>500 SAR</span></h3>
                    <div class="date_range_area">
                        <h4>Statement Date</h4>
                        <div class="range_area" id="dateRange">
                            <span></span>
                            <img src="{{ asset('assets/app/icons/calendar-04.svg') }}" alt="calender icon"
                                class="calender_icon" />
                        </div>
                    </div>
                    <div class="transaction_table_area">
                        <div class="transaction_grid">
                            <h3>Date</h3>
                            <h4>Amount</h4>
                        </div>
                        <div class="inner_transaction_area">
                            <div class="transaction_grid">
                                <h5>Jun 30, 2024</h5>
                                <h6>300 SAR</h6>
                            </div>
                            <div class="transaction_grid">
                                <h5>Jun 30, 2024</h5>
                                <h6>300 SAR</h6>
                            </div>
                            <div class="transaction_grid">
                                <h5>Jun 30, 2024</h5>
                                <h6>300 SAR</h6>
                            </div>
                            <div class="transaction_grid">
                                <h5>Jun 30, 2024</h5>
                                <h6>300 SAR</h6>
                            </div>
                            <div class="transaction_grid">
                                <h5>Jun 30, 2024</h5>
                                <h6>300 SAR</h6>
                            </div>
                            <div class="transaction_grid">
                                <h5>Jun 30, 2024</h5>
                                <h6>300 SAR</h6>
                            </div>
                            <div class="transaction_grid">
                                <h5>Jun 30, 2024</h5>
                                <h6>300 SAR</h6>
                            </div>
                            <div class="transaction_grid">
                                <h5>Jun 30, 2024</h5>
                                <h6>300 SAR</h6>
                            </div>
                            <div class="transaction_grid">
                                <h5>Jun 30, 2024</h5>
                                <h6>300 SAR</h6>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
</div>
