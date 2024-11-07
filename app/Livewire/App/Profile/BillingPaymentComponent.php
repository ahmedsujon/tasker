<?php

namespace App\Livewire\App\Profile;

use Livewire\Component;

class BillingPaymentComponent extends Component
{
    public function render()
    {
        return view('livewire.app.profile.billing-payment-component')->layout('livewire.app.layouts.base');
    }
}
