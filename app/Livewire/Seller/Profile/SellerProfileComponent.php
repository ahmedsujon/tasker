<?php

namespace App\Livewire\Seller\Profile;

use Livewire\Component;

class SellerProfileComponent extends Component
{
    public function render()
    {
        return view('livewire.seller.profile.seller-profile-component')->layout('livewire.seller.layouts.base');
    }
}
