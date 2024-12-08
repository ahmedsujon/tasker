<?php

namespace App\Livewire\Client\Jobs;

use App\Models\Job;
use App\Models\SellerProposal;
use Livewire\Component;

class JobDetailsComponent extends Component
{
    public $jobDetails, $proposals;

    public function mount($id)
    {
        $this->jobDetails = Job::where('id', $id)->orderBy('id', 'DESC')->first();
        $this->proposals = SellerProposal::where('job_id', $id)->get();
    }

    public function render()
    {
        return view('livewire.client.jobs.job-details-component')->layout('livewire.client.layouts.base');
    }
}
