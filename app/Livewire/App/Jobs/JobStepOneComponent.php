<?php

namespace App\Livewire\App\Jobs;

use Livewire\Component;

class JobStepOneComponent extends Component
{
    public function render()
    {
        return view('livewire.app.jobs.job-step-one-component')->layout('livewire.app.layouts.base');
    }
}
