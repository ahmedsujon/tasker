<?php

namespace App\Livewire\Client\Jobs\Payments;

use App\Models\Job;
use App\Models\Order;
use App\Models\PaymentMethod;
use App\Models\SellerProposal;
use Carbon\Carbon;
use Livewire\Component;
use Stripe\Stripe;

class PaymentComponent extends Component
{
    public $payment_method_id, $proposal_id, $job_id;
    public function mount($id)
    {
        $this->job_id = $id;
        $this->proposal_id = request()->get('proposal_id');
    }

    public function payNow()
    {
        sleep(1);

        if ($this->payment_method_id) {

            // payment functions

            $orderDetails = $this->paymentSuccess();

            return redirect()->route('client.jobPaymentSuccess', ['order_id' => $orderDetails['id']]);

        } else {
            $this->dispatch('error', ['message' => 'Select a payment method!']);
        }
    }

    public function paymentSuccess()
    {
        $proposal = SellerProposal::find($this->proposal_id);
        $job = Job::find($this->job_id);
        $job->status = 'In Order';
        $job->save();

        $order = new Order();
        $order->client_id = user()->id;
        $order->seller_id = $proposal->seller_id;
        $order->job_id = $this->job_id;
        $order->proposal_id = $this->proposal_id;
        $order->amount = $proposal->cost;
        $order->start_date = Carbon::parse(now());
        $order->delivery_date = Carbon::parse(now())->addDays(1);
        $order->save();

        $info = [
            'id' => $order->id,
        ];

        return $info;
    }

    public function render()
    {
        $card_infos = PaymentMethod::where('user_id', user()->id)->get();
        return view('livewire.client.jobs.payments.payment-component', ['card_infos' => $card_infos])->layout('livewire.client.layouts.base');
    }
}
