<?php

use App\Http\Controllers\LogoutController;
use App\Livewire\Auth\ForgetPasswordComponent;
use App\Livewire\Auth\LoginComponent;
use App\Livewire\Auth\OnboardingComponent;
use App\Livewire\Auth\PasswordResetSuccessComponent;
use App\Livewire\Auth\RegistrationComponent;
use App\Livewire\Auth\ResetPasswordComponent;
use App\Livewire\Client\HomeComponent;
use App\Livewire\Client\Jobs\JobDetailsComponent;
use App\Livewire\Client\Jobs\JobsComponent;
use App\Livewire\Client\Jobs\JobStepFourComponent;
use App\Livewire\Client\Jobs\JobStepOneComponent;
use App\Livewire\Client\Jobs\JobStepThreeComponent;
use App\Livewire\Client\Jobs\JobStepTwoComponent;
use App\Livewire\Client\Messages\MessageComponent;
use App\Livewire\Client\Notifications\NotificationComponent;
use App\Livewire\Client\Notifications\NotificationDetailsComponent;
use App\Livewire\Client\Profile\AccountInfoComponent;
use App\Livewire\Client\Profile\BillingPaymentComponent;
use App\Livewire\Client\Profile\OrderHistoryComponent;
use App\Livewire\Client\Profile\Pages\PrivacyPolicyComponent;
use App\Livewire\Client\Profile\Pages\TermsConditionComponent;
use App\Livewire\Client\Profile\PaymentMethodComponent;
use App\Livewire\Client\Profile\ProfileComponent;
use App\Livewire\Client\Profile\Settings\ChangePasswordComponent;
use App\Livewire\Client\Profile\Settings\NotificationsComponent;
use App\Livewire\Client\Profile\Settings\SettingsComponent;
use App\Livewire\Client\Profile\Settings\SupportComponent;
use App\Livewire\Client\User\DashboardComponent;
use App\Livewire\Seller\DashboardComponent as SellerDashboardComponent;
use App\Livewire\Seller\Jobs\JobApplyComponent;
use App\Livewire\Seller\Jobs\JobDetailsComponent as JobsJobDetailsComponent;
use App\Livewire\Seller\Jobs\JobsComponent as JobsJobsComponent;
use App\Livewire\Seller\Messages\MessageComponent as MessagesMessageComponent;
use App\Livewire\Seller\Messages\SellerMessageComponent;
use App\Livewire\Seller\Payments\AddBankInfoComponent;
use App\Livewire\Seller\Payments\BankInfoComponent;
use App\Livewire\Seller\Payments\EditBankInfoComponent;
use App\Livewire\Seller\Payments\ViewBankInfoComponent;
use App\Livewire\Seller\Profile\JobManagementComponent;
use App\Livewire\Seller\Profile\ProfileComponent as ProfileProfileComponent;
use App\Livewire\Seller\Profile\SellerAccountComponent;
use App\Livewire\Seller\Profile\SellerBillingComponent;
use App\Livewire\Seller\Profile\SellerProfileComponent;
use App\Livewire\Seller\Profile\Settings\SellerChangePasswordComponent;
use App\Livewire\Seller\Profile\Settings\SellerChangeSupportComponent;
use App\Livewire\Seller\Profile\Settings\SellerNotificationComponent;
use App\Livewire\Seller\Profile\Settings\SellerSettingsComponent;
use App\Livewire\Seller\Profile\Settings\SellerSupportComponent;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| User Routes
|--------------------------------------------------------------------------
|
| Here is where you can register User routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "User" middleware group. Now create something great!
|
 */

Route::get('/', LoginComponent::class)->name('login')->middleware('guest');
Route::get('/onboarding', OnboardingComponent::class)->name('onboarding');
Route::get('/register', RegistrationComponent::class)->name('register')->middleware('guest');

Route::middleware('auth')->group(function () {
    Route::prefix('client/')->name('client.')->middleware('role:client')->group(function () {

        Route::get('/home', HomeComponent::class)->name('home');

        // Profile Routes
        Route::get('profile', ProfileComponent::class)->name('profile');
        Route::get('account/information/{id}', AccountInfoComponent::class)->name('accountInformation');
        Route::get('billing/payment', BillingPaymentComponent::class)->name('billingPayment');
        Route::get('add/billing/method', PaymentMethodComponent::class)->name('billingMethod');
        Route::get('order/history', OrderHistoryComponent::class)->name('orderHistory');

        // Pages Routes
        Route::get('terms-condition', TermsConditionComponent::class)->name('termsCondition');
        Route::get('privacy-policy', PrivacyPolicyComponent::class)->name('privacyPolicy');

        // Settings Routes
        Route::get('profile/settings', SettingsComponent::class)->name('profileSettings');
        Route::get('settings/notification', NotificationsComponent::class)->name('settingsNotification');
        Route::get('settings/tasker/support', SupportComponent::class)->name('settingsSupport');
        Route::get('settings/change/password', ChangePasswordComponent::class)->name('settingsPassword');

        // Job Posting Routes
        Route::get('job-post-step-one', JobsComponent::class)->name('jobPostOne');
        Route::get('job-post-step-two', JobStepOneComponent::class)->name('jobPostTwo');
        Route::get('job-post-step-three', JobStepTwoComponent::class)->name('jobPostThree');
        Route::get('job-post-step-four', JobStepThreeComponent::class)->name('jobPostFour');
        Route::get('job-post-step-five/{job_id}', JobStepFourComponent::class)->name('jobPostFive');
        Route::get('job-details/{id}', JobDetailsComponent::class)->name('jobDetails');

        // Chat Routes
        Route::get('chats', MessageComponent::class)->name('chats');

        // Notifications Routes
        Route::get('notifications', NotificationComponent::class)->name('notifications');
        Route::get('notifications/details', NotificationDetailsComponent::class)->name('notificationDetails');

        // Logout Routes
        Route::post('logout', [LogoutController::class, 'userLogout'])->name('logout');
    });

    Route::prefix('seller/')->name('seller.')->middleware('role:seller')->group(function () {
        // all seller routes here
        Route::get('dashboard', SellerDashboardComponent::class)->name('dashboard');

        // Jobs Routes
        Route::get('seller-jobs', JobsJobsComponent::class)->name('sellerJobs');
        Route::get('seller-jobs/details/{id}', JobsJobDetailsComponent::class)->name('sellerJobsDetails');
        Route::get('job-apply', JobApplyComponent::class)->name('sellerJobsApply');

        // Profile Routes
        Route::get('seller-profile', SellerProfileComponent::class)->name('sellerProfile');
        Route::get('seller/account/information/{id}', SellerAccountComponent::class)->name('sellerAccountInformation');
        Route::get('seller/billing', SellerBillingComponent::class)->name('sellerBilling');
        Route::get('seller/job/management', JobManagementComponent::class)->name('sellerJobManagement');

        // Settings Routes
        Route::get('seller/profile/settings', SellerSettingsComponent::class)->name('sellerSettings');
        Route::get('seller/settings/notification', SellerNotificationComponent::class)->name('sellerSettingsNotification');
        Route::get('seller/settings/tasker/support', SellerSupportComponent::class)->name('sellerSettingsSupport');
        Route::get('seller/change/password', SellerChangePasswordComponent::class)->name('sellerPasswordChange');

        // Sellers Routes
        Route::get('seller/bank/accounts', BankInfoComponent::class)->name('sellerBanks');
        Route::get('seller/bank/accounts/create', AddBankInfoComponent::class)->name('sellerBankCreate');
        Route::get('seller/bank/accounts/edit/{id}', EditBankInfoComponent::class)->name('sellerBanksEdit');
        Route::get('seller/bank/accounts/view/{id}', ViewBankInfoComponent::class)->name('sellerBanksView');

        // Sellers Messages Routes
        Route::get('seller/messages', SellerMessageComponent::class)->name('sellerMessages');


        // Logout Routes
        Route::post('logout', [LogoutController::class, 'sellerLogout'])->name('logout');
    });
});

// Forget Password Routes
Route::get('client/password/reset', ForgetPasswordComponent::class)->name('client.reset.password');
Route::get('client/change/password', ResetPasswordComponent::class)->name('client.change.password');
Route::get('client/password/reset/success', PasswordResetSuccessComponent::class)->name('client.change.password.success');


//Call Route Files
require __DIR__ . '/admin.php';
