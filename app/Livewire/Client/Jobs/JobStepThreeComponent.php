<?php

namespace App\Livewire\Client\Jobs;

use App\Models\Job;
use Livewire\Component;

class JobStepThreeComponent extends Component
{
    public $cost;
    public function mount()
    {
        $jobData = session()->get('jobData');
        if ($jobData) {
            $this->cost = isset($jobData['cost']) ? $jobData['cost'] : '';
        }
    }
    public function updated($fields)
    {
        $this->validateOnly($fields, [
            'cost' => 'required',
        ]);
    }

    public function nextStep()
    {
        $this->validate([
            'cost' => 'required',
        ]);

        $jobData = session()->get('jobData');
        $jobData['cost'] = $this->cost;

        $job = new Job();
        $job->user_id = user()->id;
        $job->categories = $jobData['skills'];
        $job->title = $jobData['title'];
        $job->project_size = $jobData['project_size'];
        $job->description = $jobData['description'];
        $job->attachments = $jobData['attachments'];
        $job->budget = $jobData['cost'];
        // $job->location = $jobData['location'];
        $job->status = 'Pending';
        $job->save();

        return redirect()->route('client.jobPostFive', ['job_id'=>$job->id]);
    }

    public function render()
    {
        return view('livewire.client.jobs.job-step-three-component')->layout('livewire.client.layouts.base');
    }
}
