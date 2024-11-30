<?php

namespace App\Livewire\Client\Jobs;

use Livewire\Component;
use Livewire\Features\SupportFileUploads\WithFileUploads;

class JobStepTwoComponent extends Component
{
    use WithFileUploads;
    public $description, $attachments = [], $newAttachments = [];
    public function mount()
    {
        // $jobData = session()->get('jobData');
        // if ($jobData) {
        //     $this->project_size = isset($jobData['project_size']) ? $jobData['project_size'] : '';
        // }
    }
    public function updated($fields)
    {
        $this->validateOnly($fields, [
            'description' => 'required',
            'attachments' => 'required|array',
            'attachments.*' => 'file|size:10240',
        ], [
            'attachments.*.file' => 'Only valid file types are allowed.',
            'attachments.*.max' => 'Each file must not exceed 10MB.', // Custom message
        ]);
    }
    public function updatedNewAttachments($files)
    {
        $this->validate([
            'newAttachments.*' => 'file|max:10240', // Max size 10MB
        ], [
            'newAttachments.*.file' => 'Only valid file types are allowed.',
            'newAttachments.*.max' => 'Each file must not exceed 10MB.', // Custom message
        ]);
        foreach ($files as $file) {
            $this->attachments[] = $file;
        }
        $this->newAttachments = [];
    }

    public function removeAttachment($index)
    {
        unset($this->attachments[$index]);
        $this->attachments = array_values($this->attachments);
    }

    public function nextStep()
    {
        $this->validate([
            'description' => 'required',
            'attachments' => 'required'
        ]);

        $jobData = session()->get('jobData');
        $jobData['description'] = $this->description;
        $jobData['attachments'] = $this->attachments;

        session()->put('jobData', $jobData);
        return redirect()->route('client.jobPostFour');
    }

    public function render()
    {
        return view('livewire.client.jobs.job-step-two-component')->layout('livewire.client.layouts.base');
    }
}
