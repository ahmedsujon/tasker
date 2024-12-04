<?php

namespace App\Livewire\Client\Jobs;

use App\Models\Job;
use App\Models\JobAttachment;
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

    public function selectCost($cost)
    {
        $this->cost = $cost;
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
        $job->category_names = $jobData['skill_names'];
        $job->title = $jobData['title'];
        $job->project_size = $jobData['project_size'];
        $job->description = $jobData['description'];
        $job->budget = $jobData['cost'];
        $job->location = $jobData['location'];
        $job->status = 'Pending';
        $job->save();

        foreach ($jobData['attachments'] as $key => $attach) {
            $attachment = new JobAttachment();
            $attachment->job_id = $job->id;
            $attachment->name = $attach['name'];
            $attachment->attachment = $attach['file'];
            $attachment->size = $attach['size'];
            $attachment->type = $attach['type'];
            $attachment->save();
        }

        session()->forget('jobData');
        return redirect()->route('client.jobPostFive', ['job_id'=>$job->id]);
    }

    public function render()
    {
        return view('livewire.client.jobs.job-step-three-component')->layout('livewire.client.layouts.base');
    }
}
