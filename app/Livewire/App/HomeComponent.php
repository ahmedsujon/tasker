<?php

namespace App\Livewire\App;

use App\Models\Job;
use Livewire\Component;
use Livewire\WithPagination;

class HomeComponent extends Component
{
    use WithPagination;
    public $searchTerm, $sortingValue = 10;

    public function render()
    {
        $active_jobs = Job::where('status', 'Active')->orderBy('id', 'DESC')->paginate($this->sortingValue);
        $inorder_jobs = Job::where('status', 'Active')->orderBy('id', 'DESC')->paginate($this->sortingValue);
        $draft_jobs = Job::where('status', 'Active')->orderBy('id', 'DESC')->paginate($this->sortingValue);
        $finished_jobs = Job::where('status', 'Active')->orderBy('id', 'DESC')->paginate($this->sortingValue);
        $this->dispatch('reload_scripts');
        return view(
            'livewire.app.home-component',
            [
                'active_jobs' => $active_jobs,
                'inorder_jobs' => $inorder_jobs,
                'draft_jobs' => $draft_jobs,
                'finished_jobs' => $finished_jobs,
            ]
        )->layout('livewire.app.layouts.base');
    }
}
