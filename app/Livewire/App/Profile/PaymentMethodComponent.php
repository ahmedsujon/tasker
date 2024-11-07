<?php

namespace App\Livewire\App\Profile;

use Livewire\Component;

class PaymentMethodComponent extends Component
{
    public function render()
    {
        return view('livewire.app.profile.payment-method-component')->layout('livewire.app.layouts.base');
    }
}
