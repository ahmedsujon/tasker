<?php

namespace App\Livewire\Client\Jobs\Payments;

use Livewire\Component;

class PaymentSuccessComponent extends Component
{
    public $order_id;
    public function mount($order_id)
    {
        $this->order_id = $order_id;
    }

    public function render()
    {
        return view('livewire.client.jobs.payments.payment-success-component')->layout('livewire.client.layouts.base');
    }
}
