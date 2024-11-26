<?php

namespace App\Livewire\Seller\Profile;

use Livewire\Component;

class SellerBillingComponent extends Component
{
    public function render()
    {
        return view('livewire.seller.profile.seller-billing-component')->layout('livewire.seller.layouts.base');
    }
}
