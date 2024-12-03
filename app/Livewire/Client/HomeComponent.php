<?php

namespace App\Livewire\Client;

use App\Models\Job;
use Livewire\Component;
use App\Models\Proposal;
use Livewire\WithPagination;
use Illuminate\Support\Facades\DB;

class HomeComponent extends Component
{
    use WithPagination;
    public $searchTerm, $sortingValue = 10;

    public function render()
    {

        $active_jobs = DB::table('jobs')
            ->leftJoin('proposals', 'jobs.id', '=', 'proposals.job_id')
            ->select('jobs.*', DB::raw('COUNT(proposals.id) as proposal_count'))
            ->where('jobs.status', 'Active')
            ->groupBy('jobs.id')
            ->orderBy('jobs.id', 'DESC')
            ->paginate($this->sortingValue);

        $inorder_jobs = Job::where('status', 'Active')->orderBy('id', 'DESC')->paginate($this->sortingValue);
        $draft_jobs = Job::where('status', 'Active')->orderBy('id', 'DESC')->paginate($this->sortingValue);
        $finished_jobs = Job::where('status', 'Active')->orderBy('id', 'DESC')->paginate($this->sortingValue);
        $this->dispatch('reload_scripts');
        return view(
            'livewire.client.home-component',
            [
                'active_jobs' => $active_jobs,
                'inorder_jobs' => $inorder_jobs,
                'draft_jobs' => $draft_jobs,
                'finished_jobs' => $finished_jobs,
            ]
        )->layout('livewire.client.layouts.base');
    }
}
