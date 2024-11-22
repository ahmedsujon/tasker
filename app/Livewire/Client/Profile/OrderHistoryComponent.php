<?php

namespace App\Livewire\Client\Profile;

use Livewire\Component;

class OrderHistoryComponent extends Component
{
    public function render()
    {
        return view('livewire.client.profile.order-history-component')->layout('livewire.client.layouts.base');
    }
}
