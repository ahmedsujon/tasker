<?php

namespace App\Livewire\Client\Jobs;

use App\Models\Job;
use Livewire\Component;

class JobStepFourComponent extends Component
{
    public $job_id, $job;
    public function mount($job_id)
    {
        $this->job_id = $job_id;
        $this->job = Job::where('id', $job_id)->first();
    }

    public function render()
    {
        return view('livewire.client.jobs.job-step-four-component')->layout('livewire.client.layouts.base');
    }
}
