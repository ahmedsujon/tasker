<?php

namespace App\Livewire\Client\Jobs;

use Livewire\Component;

class JobStepOneComponent extends Component
{
    public function render()
    {
        return view('livewire.client.jobs.job-step-one-component')->layout('livewire.client.layouts.base');
    }
}
