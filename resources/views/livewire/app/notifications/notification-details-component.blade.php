<div>
    <div class="back_btn_grid back_btn_white pt-12 pb-4">
        <button type="button" class="page_back_btn" onclick="history.back()">
            <img src="{{ asset('assets/app/icons/arrow-left.svg') }}" alt="arrow left" />
        </button>
        <h3>Tasker Center</h3>
    </div>
    <!-- Notification Details  Section  -->
    <section class="notification_details_wrapper">
        <div class="horizontal-m-w">
            <div class="details_card">
                <h2 class="page_inner_title text-white">
                    Ramjan Khan, take the credit for referring friends to
                    <span>Tasker Application</span>
                </h2>
                <h4>A friend you referred, sadia2042, just signed up</h4>
                <a href="#" class="term_btn mt-24">Terms & Conditions </a>
            </div>
            <form class="mail_invite_area">
                <h3>Invite friends through email</h3>
                <div class="input_gird">
                    <input type="email" placeholder="Add email addresses" />
                    <button type="button">Send</button>
                </div>
            </form>
            <button type="button" class="share_notificatin_btn d-flex align-items-center flex-wrap">
                <img src="{{ asset('assets/app/icons/share-03.svg') }}" alt="share icon" />
                <span>Share</span>
            </button>
        </div>
    </section>
</div>
