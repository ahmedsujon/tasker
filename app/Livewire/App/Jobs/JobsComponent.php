<?php

namespace App\Livewire\App\Jobs;

use Livewire\Component;

class JobsComponent extends Component
{
    public function render()
    {
        return view('livewire.app.jobs.jobs-component')->layout('livewire.app.layouts.base');
    }
}
