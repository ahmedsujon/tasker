<div>
    <div class="back_btn_grid mt-12">
        <button type="button" class="page_back_btn" onclick="history.back()">
            <img src="{{ asset('assets/app/icons/arrow-left.svg') }}" alt="arrow left" />
        </button>
        <h3>Job Management</h3>
    </div>
    <!-- Order History Section  -->
    <section class="client_order_history_wrapper horizontal-m-w">
        <div class="order_history_item mb-20">
            <div class="order_history_grid">
                <div class="img">
                    <img src="{{ asset('assets/app/images/client/order_history_image.png') }}" alt="order history image"
                        class="order_img" />
                </div>
                <div class="content">
                    <h3 class="text-line-clamp2">
                        I have two tickets for the Al-Nassr Paris match for sale design
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
                    <!-- <button type="button" class="order_status_btn refound">
                Refund
              </button> -->
                    <button type="button" class="order_status_btn">Pending</button>
                </div>
            </div>
            <div class="delivery_date_area">
                <div class="d-flex align-items-center flex-wrap gap-1">
                    <img src="{{ asset('assets/app/icons/time-04.svg') }}" alt="time icon" />
                    <h4>Delivery Date</h4>
                </div>
                <h6>July 30, 2024</h6>
            </div>
        </div>
        <div class="order_history_item mb-20">
            <div class="order_history_grid">
                <div class="img">
                    <img src="{{ asset('assets/app/images/client/order_history_image.png') }}" alt="order history image"
                        class="order_img" />
                </div>
                <div class="content">
                    <h3 class="text-line-clamp2">
                        I have two tickets for the Al-Nassr Paris match for sale design
                        I have two tickets for the Al-Nassr Paris match for sale design
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
        </div>
    </section>
</div>
