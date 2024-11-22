<?php

namespace App\Livewire\Seller;

use Livewire\Component;

class DashboardComponent extends Component
{
    public function render()
    {
        return view('livewire.seller.dashboard-component')->layout('livewire.seller.layouts.base');
    }
}
