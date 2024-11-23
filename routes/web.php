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

Route::get('/', LoginComponent::class)->name('login');
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
        Route::get('job-post-step-five', JobStepFourComponent::class)->name('jobPostFive');
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
    });
});

// Forget Password Routes
Route::get('client/password/reset', ForgetPasswordComponent::class)->name('client.reset.password');
Route::get('client/change/password', ResetPasswordComponent::class)->name('client.change.password');
Route::get('client/password/reset/success', PasswordResetSuccessComponent::class)->name('client.change.password.success');
