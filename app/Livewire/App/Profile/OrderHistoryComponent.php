<?php

namespace App\Livewire\App\Profile;

use Livewire\Component;

class OrderHistoryComponent extends Component
{
    public function render()
    {
        return view('livewire.app.profile.order-history-component')->layout('livewire.app.layouts.base');
    }
}
