<?php

namespace App\Livewire\Client\Jobs\Payments;

use Livewire\Component;
use App\Models\PaymentMethod;

class PaymentComponent extends Component
{
    public $payment_method_id, $proposal_id, $job_id;
    public function mount($id)
    {
        $this->job_id = $id;
        $this->proposal_id = request()->get('proposal_id');
    }

    public function paymentConfirmation()
    {

    }

    public function payNow()
    {
        sleep(1);

        if ($this->payment_method_id) {
            $this->paymentSuccess();
        } else {
            $this->dispatch('error', ['message' => 'Select a payment method!']);
        }
    }

    public function paymentSuccess()
    {
        
    }

    public function render()
    {
        $card_infos = PaymentMethod::where('user_id', user()->id)->get();
        return view('livewire.client.jobs.payments.payment-component', ['card_infos'=>$card_infos])->layout('livewire.client.layouts.base');
    }
}
