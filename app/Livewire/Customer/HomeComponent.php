<?php

namespace App\Livewire\Customer;

use Livewire\Component;

class HomeComponent extends Component
{
    public function render()
    {
        return view('livewire.customer.home-component')->layout('livewire.app.layouts.base');
    }
}
