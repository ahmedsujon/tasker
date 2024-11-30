<?php

namespace App\Livewire\Seller\Jobs;

use App\Models\Job;
use Livewire\Component;

class JobsComponent extends Component
{
    public function render()
    {
        $seller_jobs = Job::get();
        return view('livewire.seller.jobs.jobs-component', ['seller_jobs' => $seller_jobs])->layout('livewire.seller.layouts.base');
    }
}
