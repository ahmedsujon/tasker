<?php

use App\Livewire\App\HomeComponent;
use Illuminate\Support\Facades\Route;
use App\Livewire\App\Jobs\JobsComponent;
use App\Livewire\App\Auth\LoginComponent;
use App\Http\Controllers\LogoutController;
use App\Livewire\App\User\DashboardComponent;
use App\Livewire\App\Jobs\JobStepOneComponent;
use App\Livewire\App\Jobs\JobStepTwoComponent;
use App\Livewire\App\Profile\AccountInfoComponent;
use App\Livewire\App\Profile\ProfileComponent;
use App\Livewire\App\Jobs\JobStepFourComponent;
use App\Livewire\App\Auth\RegistrationComponent;
use App\Livewire\App\Jobs\JobStepThreeComponent;
use App\Livewire\App\Auth\ResetPasswordComponent;
use App\Livewire\App\Auth\ForgetPasswordComponent;
use App\Livewire\App\Auth\PasswordResetSuccessComponent;
use App\Livewire\App\Jobs\JobDetailsComponent;
use App\Livewire\App\Profile\BillingPaymentComponent;
use App\Livewire\App\Profile\OrderHistoryComponent;
use App\Livewire\App\Profile\Pages\PrivacyPolicyComponent;
use App\Livewire\App\Profile\Pages\TermsConditionComponent;
use App\Livewire\App\Profile\PaymentMethodComponent;
use App\Livewire\App\Profile\Settings\ChangePasswordComponent;
use App\Livewire\App\Profile\Settings\NotificationsComponent;
use App\Livewire\App\Profile\Settings\SettingsComponent;
use App\Livewire\App\Profile\Settings\SupportComponent;

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
Route::get('/register', RegistrationComponent::class)->name('register')->middleware('guest');

Route::get('user', DashboardComponent::class)->middleware('auth:user');
Route::prefix('user/')->name('user.')->middleware('auth')->group(function () {

    Route::get('/home', HomeComponent::class)->name('home');

    Route::get('dashboard', DashboardComponent::class)->name('dashboard');

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

    // Logout Routes
    Route::post('logout', [LogoutController::class, 'userLogout'])->name('logout');
});

// Forget Password Routes
Route::get('user/password/reset', ForgetPasswordComponent::class)->name('user.reset.password');
Route::get('user/change/password', ResetPasswordComponent::class)->name('user.change.password');
Route::get('user/password/reset/success', PasswordResetSuccessComponent::class)->name('user.change.password.success');
