<?php

namespace App\Livewire\Client\Profile;

use App\Models\PaymentMethod;
use Livewire\Component;

class BillingPaymentComponent extends Component
{
    public function render()
    {
        $card_infos = PaymentMethod::where('user_id', user()->id)->get();
        return view('livewire.client.profile.billing-payment-component', ['card_infos'=>$card_infos])->layout('livewire.client.layouts.base');
    }
}
