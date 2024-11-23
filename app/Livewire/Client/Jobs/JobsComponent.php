<?php

namespace App\Livewire\Client\Jobs;

use Livewire\Component;

class JobsComponent extends Component
{
    public function render()
    {
        return view('livewire.client.jobs.jobs-component')->layout('livewire.client.layouts.base');
    }
}
