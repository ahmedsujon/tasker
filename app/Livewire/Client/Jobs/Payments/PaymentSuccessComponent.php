<?php

namespace App\Livewire\Client\Jobs\Payments;

use Livewire\Component;

class PaymentSuccessComponent extends Component
{
    public function render()
    {
        return view('livewire.client.jobs.payments.payment-success-component')->layout('livewire.client.layouts.base');
    }
}
