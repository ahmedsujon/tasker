<div>
    <section class="setup_withdraw_wrapper horizontal-m-w pt-12">
        <div class="back_btn_grid">
            <button type="button" class="page_back_btn" onclick="history.back()">
                <img src="{{ asset('assets/app/icons/arrow-left.svg') }}" alt="arrow left" />
            </button>
            <h3>Set up withdrawals</h3>
        </div>
        <form wire:submit.prevent='storeData' class="setup_withdraw_form_area mt-32">
            <div class="input_row">
                <h4 class="form_inner_title mt-52 mb-28">
                    Account holder bank information
                </h4>
                <div class="label_area">
                    <label for="">Select Bank </label>
                </div>
                <div class="nice_select_area" wire:ignore>
                    <select class="searchableSelect bank_name" wire:model.blur='bank_name'
                        data-placeholder="Select Bank">
                        <option data-display="Select">Select Your Bank</option>
                        <option value="Saudi National Bank (SNB)">Saudi National Bank (SNB)</option>
                        <option value="Al Rajhi Bank">Al Rajhi Bank</option>
                        <option value="Riyad Bank">Riyad Bank</option>
                        <option value="Banque Saudi Fransi (BSF)">Banque Saudi Fransi (BSF)</option>
                        <option value="SABB (Saudi British Bank)">SABB (Saudi British Bank)</option>
                        <option value="Arab National Bank (ANB)">Arab National Bank (ANB)</option>
                        <option value="Alinma Bank">Alinma Bank</option>
                        <option value="Bank AlJazira">Bank AlJazira</option>
                        <option value="Saudi Investment Bank (SAIB)">Saudi Investment Bank (SAIB)</option>
                        <option value="Alawwal Bank">Alawwal Bank</option>
                        <option value="Gulf International Bank (GIB)">Gulf International Bank (GIB)</option>
                        <option value="Emirates NBD">Emirates NBD</option>
                        <option value="National Bank of Kuwait (NBK)">National Bank of Kuwait (NBK)</option>
                        <option value="First Abu Dhabi Bank (FAB)">First Abu Dhabi Bank (FAB)</option>
                        <option value="Bank of Bahrain and Kuwait (BBK)">Bank of Bahrain and Kuwait (BBK)</option>
                        <option value="Deutsche Bank">Deutsche Bank</option>
                        <option value="J.P. Morgan Chase">J.P. Morgan Chase</option>
                        <option value="Standard Chartered Bank">Standard Chartered Bank</option>
                        <option value="BNP Paribas">BNP Paribas</option>
                        <option value="Credit Suisse">Credit Suisse</option>
                    </select>
                </div>
                @error('account_name')
                    <div class="form_status error">
                        <img src="{{ asset('assets/app/icons/info-circle.svg') }}" alt="info icon"
                            class="info_circle_red" />
                        {{ $message }}
                    </div>
                @enderror
            </div>
            <div class="input_row">
                <div class="label_area">
                    <label for="account_name">Account Name </label>
                </div>
                <input type="text" wire:model.blur='account_name' placeholder="Enter bank name"
                    class="input_field" />
                @error('account_name')
                    <div class="form_status error">
                        <img src="{{ asset('assets/app/icons/info-circle.svg') }}" alt="info icon"
                            class="info_circle_red" />
                        {{ $message }}
                    </div>
                @enderror
            </div>
            <div class="input_row">
                <div class="label_area">
                    <label for="account_number">Account Number</label>
                </div>
                <input type="number" wire:model.blur='account_number' placeholder="Enter acount number"
                    class="input_field" />
                @error('account_number')
                    <div class="form_status error">
                        <img src="{{ asset('assets/app/icons/info-circle.svg') }}" alt="info icon"
                            class="info_circle_red" />
                        {{ $message }}
                    </div>
                @enderror
            </div>
            <div class="input_row">
                <div class="label_area">
                    <label for="post_code">Post code </label>
                    <p>Please enter the post code associated with your account.</p>
                </div>
                <input type="number" wire:model.blur='post_code' placeholder="Enter post code" class="input_field" />
                @error('post_code')
                    <div class="form_status error">
                        <img src="{{ asset('assets/app/icons/info-circle.svg') }}" alt="info icon"
                            class="info_circle_red" />
                        {{ $message }}
                    </div>
                @enderror
            </div>

            <div class="input_row" wire:ignore>
                <div class="label_area">
                    <label for="account_type">Bank account type </label>
                    <p>Type of bank account</p>
                </div>
                <div class="nice_select_area">
                    <select class="searchableSelect account_type" wire:model.blur='account_type'
                        data-placeholder="Select Bank">
                        <option data-display="Select">Select Account Type </option>
                        <option value="Savings Account">Savings Account</option>
                        <option value="Current Account">Current Account</option>
                        <option value="Fixed Deposit Account" disabled>Fixed Deposit Account</option>
                        <option value="Salary Account">Salary Account</option>
                        <option value="Student Account">Student Account</option>
                    </select>
                </div>
                @error('account_type')
                    <div class="form_status error">
                        <img src="{{ asset('assets/app/icons/info-circle.svg') }}" alt="info icon"
                            class="info_circle_red" />
                        {{ $message }}
                    </div>
                @enderror
            </div>

            <div class="input_row">
                <div class="label_area">
                    <label for="branch_name">Branch name </label>
                    <p>Name or the bank’s branch</p>
                </div>
                <input type="text" wire:model.blur='branch_name' placeholder="Enter branch name"
                    class="input_field" />
                @error('branch_name')
                    <div class="form_status error">
                        <img src="{{ asset('assets/app/icons/info-circle.svg') }}" alt="info icon"
                            class="info_circle_red" />
                        {{ $message }}
                    </div>
                @enderror
            </div>

            <div class="input_row">
                <div class="label_area">
                    <label for="dob">Enter date of birth </label>
                </div>
                <input type="date" wire:model.blur='dob' placeholder="Enter last name" class="input_field" />
                @error('dob')
                    <div class="form_status error">
                        <img src="{{ asset('assets/app/icons/info-circle.svg') }}" alt="info icon"
                            class="info_circle_red" />
                        {{ $message }}
                    </div>
                @enderror
            </div>

            <div class="input_row">
                <div class="label_area">
                    <label for="phone">Phone Number</label>
                </div>
                <input type="number" wire:model.blur='phone' placeholder="Enter number" class="input_field" />
                @error('phone')
                    <div class="form_status error">
                        <img src="{{ asset('assets/app/icons/info-circle.svg') }}" alt="info icon"
                            class="info_circle_red" />
                        {{ $message }}
                    </div>
                @enderror
            </div>

            <div class="input_row">
                <div class="label_area">
                    <label for="">Customer ID type </label>
                </div>
                <div class="d-flex align-items-center flex-wrap gap-5">
                    <div class="form-check customer_type_radio_area color_radio_btn">
                        <input class="form-check-input" type="radio" name="customerType" id="customerType1" />
                        <label class="form-check-label" for="customerType1">
                            Passport
                        </label>
                    </div>
                    <div class="form-check customer_type_radio_area color_radio_btn">
                        <input class="form-check-input" type="radio" name="customerType" id="customerType2"
                            checked />
                        <label class="form-check-label" for="customerType2"> ID </label>
                    </div>
                </div>
            </div>
            <div class="input_row">
                <div class="label_area">
                    <label for="customer_id">Customer ID </label>
                </div>
                <input type="text" wire:model.blur='customer_id' placeholder="Type selected ID number"
                    class="input_field" />
                @error('customer_id')
                    <div class="form_status error">
                        <img src="{{ asset('assets/app/icons/info-circle.svg') }}" alt="info icon"
                            class="info_circle_red" />
                        {{ $message }}
                    </div>
                @enderror
            </div>
            <div class="input_row">
                <div class="label_area">
                    <label for="city">City & State/province</label>
                </div>
                <input type="text" wire:model.blur='city' placeholder="Enter city & state name"
                    class="input_field" />
                @error('city')
                    <div class="form_status error">
                        <img src="{{ asset('assets/app/icons/info-circle.svg') }}" alt="info icon"
                            class="info_circle_red" />
                        {{ $message }}
                    </div>
                @enderror
            </div>

            <div class="form-check color_checkbox_btn">
                <input class="form-check-input" wire:model.blur='status' type="checkbox" id="acceptInput"
                    required />
                <label class="form-check-label" for="acceptInput">
                    I attest that I’m the owner and have full authorization to this
                    bank account.
                </label>
                @error('status')
                    <div class="form_status error">
                        <img src="{{ asset('assets/app/icons/info-circle.svg') }}" alt="info icon"
                            class="info_circle_red" />
                        {{ $message }}
                    </div>
                @enderror
            </div>
            <button type="submit" class="login_btn login_btn_sm mt-45">
                {!! loadingStateWithText('storeData', 'Add Account') !!}
            </button>
        </form>
    </section>
</div>
@push('scripts')
    <script>
        $(".bank_name").on('change', function() {
            @this.set('bank_name', $(this).val());
        });
        $(".account_type").on('change', function() {
            @this.set('account_type', $(this).val());
        });
    </script>
@endpush
