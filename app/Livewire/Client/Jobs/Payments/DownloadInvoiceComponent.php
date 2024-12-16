<?php

namespace App\Livewire\Client\Jobs\Payments;

use App\Models\Job;
use App\Models\Order;
use App\Models\User;
use Livewire\Component;

class DownloadInvoiceComponent extends Component
{
    public $order;

    public function mount($order_id)
    {
        $order = Order::find($order_id);
        $order->job = Job::select('id', 'title')->where('id', $order->job_id)->first();
        $order->seller = User::select('id', 'first_name', 'last_name', 'email')->where('id', $order->seller_id)->first();
        $this->order = $order;
    }

    public function render()
    {
        return view('livewire.client.jobs.payments.download-invoice-component')->layout('livewire.client.layouts.base');
    }
}
