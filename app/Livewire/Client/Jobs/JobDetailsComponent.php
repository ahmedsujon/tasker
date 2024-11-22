<?php

namespace App\Livewire\Client\Jobs;

use App\Models\Job;
use Livewire\Component;

class JobDetailsComponent extends Component
{
    public $jobDetails;

    public function mount($id)
    {
        $this->jobDetails = Job::where('id', $id)->first();
    }

    public function render()
    {
        return view('livewire.client.jobs.job-details-component')->layout('livewire.client.layouts.base');
    }
}
