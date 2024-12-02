<?php

namespace App\Livewire\Client\Jobs;

use Livewire\Component;

class JobStepOneComponent extends Component
{
    public $project_size;
    public function mount()
    {
        $jobData = session()->get('jobData');
        if ($jobData) {
            $this->project_size = isset($jobData['project_size']) ? $jobData['project_size'] : '';
        }
    }
    public function updated($fields)
    {
        $this->validateOnly($fields, [
            'project_size' => 'required',
        ]);
    }

    public function nextStep()
    {
        $this->validate([
            'project_size' => 'required',
        ]);

        $jobData = session()->get('jobData');
        $jobData['project_size'] = $this->project_size;

        session()->put('jobData', $jobData);
        return redirect()->route('client.jobPostThree');
    }

    public function render()
    {
        return view('livewire.client.jobs.job-step-one-component')->layout('livewire.client.layouts.base');
    }
}
