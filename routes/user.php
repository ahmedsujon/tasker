<?php

use Illuminate\Support\Facades\Route;
use App\Livewire\App\Auth\LoginComponent;
use App\Http\Controllers\LogoutController;
use App\Livewire\App\User\DashboardComponent;
use App\Livewire\App\Auth\RegistrationComponent;
use App\Livewire\App\Auth\ForgetPasswordComponent;
use App\Livewire\App\Auth\PasswordResetSuccessComponent;
use App\Livewire\App\Auth\ResetPasswordComponent;
use App\Livewire\App\Jobs\JobsComponent;
use App\Livewire\App\Jobs\JobStepFourComponent;
use App\Livewire\App\Jobs\JobStepOneComponent;
use App\Livewire\App\Jobs\JobStepThreeComponent;
use App\Livewire\App\Jobs\JobStepTwoComponent;

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

Route::get('/login', LoginComponent::class)->name('login')->middleware('guest');
Route::get('/register', RegistrationComponent::class)->name('register')->middleware('guest');

Route::get('user', DashboardComponent::class)->middleware('auth:user');
Route::prefix('user/')->name('user.')->middleware('auth')->group(function () {
    Route::post('logout', [LogoutController::class, 'userLogout'])->name('logout');

    Route::get('dashboard', DashboardComponent::class)->name('dashboard');

    Route::get('job-post-step-one', JobsComponent::class)->name('jobPostOne');
    Route::get('job-post-step-two', JobStepOneComponent::class)->name('jobPostTwo');
    Route::get('job-post-step-three', JobStepTwoComponent::class)->name('jobPostThree');
    Route::get('job-post-step-four', JobStepThreeComponent::class)->name('jobPostFour');
    Route::get('job-post-step-five', JobStepFourComponent::class)->name('jobPostFive');
});

// Forget Password
Route::get('user/password/reset', ForgetPasswordComponent::class)->name('user.reset.password');
Route::get('user/change/password', ResetPasswordComponent::class)->name('user.change.password');
Route::get('user/password/reset/success', PasswordResetSuccessComponent::class)->name('user.change.password.success');
