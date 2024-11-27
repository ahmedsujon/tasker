<?php

namespace App\Livewire\Seller\Profile;

use App\Models\Transection;
use Livewire\Component;

class SellerBillingComponent extends Component
{
    public function render()
    {
        $transections = Transection::get();
        return view('livewire.seller.profile.seller-billing-component', ['transections'=>$transections])->layout('livewire.seller.layouts.base');
    }
}
