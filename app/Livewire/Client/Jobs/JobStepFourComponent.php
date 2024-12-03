<?php

namespace App\Livewire\Client\Jobs;

use App\Models\Job;
use App\Models\JobAttachment;
use Livewire\Component;

class JobStepFourComponent extends Component
{
    public $job_id, $job, $attachments, $delete_id;
    public function mount($job_id)
    {
        $this->job_id = $job_id;
        $this->job = Job::where('id', $job_id)->first();
        $this->attachments = JobAttachment::where('job_id', $job_id)->get();
    }

    public function jobPostFinalize($type)
    {
        $job = Job::find($this->job_id);

        if ($type == 'published') {
            $job->status = 'Active';
            $job->save();

            session()->flash('success', 'Job published successfully.');
            return redirect()->route('client.home');
        } else if ($type == 'draft') {
            $job->status = 'Draft';
            $job->save();

            session()->flash('success', 'Job added as draft successfully.');
            return redirect()->route('client.home');
        }

    }

    public function deleteConfirmation()
    {
        $this->delete_id = $this->job_id;
        $this->dispatch('show_delete_confirmation');
    }

    public function deleteData()
    {
        $job = Job::find($this->delete_id);
        JobAttachment::where('job_id', $job->id)->delete();
        $job->delete();

        session()->flash('success', 'Job deleted successfully.');
        return redirect()->route('client.home');
        $this->delete_id = '';
    }

    public function render()
    {
        return view('livewire.client.jobs.job-step-four-component')->layout('livewire.client.layouts.base');
    }
}
