<?php

use App\Livewire\Customer\HomeComponent;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::prefix('customer/')->name('customer.')->middleware('auth')->group(function () {
    Route::get('/home', HomeComponent::class)->name('home');
});

//Call Route Files
require __DIR__ . '/admin.php';
require __DIR__ . '/user.php';
