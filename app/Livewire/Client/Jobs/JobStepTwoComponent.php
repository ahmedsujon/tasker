<?php

namespace App\Livewire\Client\Jobs;

use Livewire\Component;
use Livewire\Features\SupportFileUploads\WithFileUploads;

class JobStepTwoComponent extends Component
{
    use WithFileUploads;
    public $location, $description, $attachments = [], $session_attachments = [], $newAttachments = [];
    public function mount()
    {
        $jobData = session()->get('jobData');
        if ($jobData) {
            $this->location = isset($jobData['location']) ? $jobData['location'] : '';
            $this->description = isset($jobData['description']) ? $jobData['description'] : '';
            $this->session_attachments = isset($jobData['attachments']) ? $jobData['attachments'] : '';
        }
    }
    public function updated($fields)
    {
        $this->validateOnly($fields, [
            'location' => 'required',
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
            'location' => 'required',
            'description' => 'required',
            'attachments' => 'required'
        ]);

        $selected_attachments = [];
        foreach ($this->attachments as $key => $attach) {
            $fileName = $attach->getClientOriginalName();
            $attach->storeAs('public/temp_attachments', $fileName);
            $selected_attachments[] = 'public/temp_attachments/' . $fileName;
        }

        $jobData = session()->get('jobData');
        $jobData['description'] = $this->description;
        $jobData['attachments'] = $selected_attachments;
        $jobData['location'] = $this->location;

        session()->put('jobData', $jobData);
        return redirect()->route('client.jobPostFour');
    }

    public function render()
    {
        return view('livewire.client.jobs.job-step-two-component')->layout('livewire.client.layouts.base');
    }
}
