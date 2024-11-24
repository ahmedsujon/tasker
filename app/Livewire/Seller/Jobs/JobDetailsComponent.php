<?php

namespace App\Livewire\Seller\Jobs;

use App\Models\Job;
use Livewire\Component;

class JobDetailsComponent extends Component
{
    public $jobDetails;
    public function mount($id)
    {
        $this->jobDetails = Job::where('id', $id)->orderBy('id', 'DESC')->first();
    }

    public function render()
    {
        $seller_jobs = Job::get();
        return view('livewire.seller.jobs.job-details-component', ['seller_jobs'=>$seller_jobs])->layout('livewire.seller.layouts.base');
    }
}
