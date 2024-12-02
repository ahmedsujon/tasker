<?php

namespace App\Livewire\Seller\Messages;

use Livewire\Component;

class SellerMessageComponent extends Component
{
    public function render()
    {
        return view('livewire.seller.messages.seller-message-component')->layout('livewire.seller.layouts.base');
    }
}
