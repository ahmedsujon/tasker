<?php

namespace App\Livewire\Client\Jobs;

use App\Models\SellerProposal;
use Illuminate\Support\Facades\DB;
use Livewire\Component;

class JobDetailsComponent extends Component
{
    public $job_id, $selectedJobID;

    public function mount($id)
    {
        $this->job_id = $id;
    }

    public function selectJobMoreOption($id)
    {
        $this->selectedJobID = $id;
    }

    public function render()
    {
        $jobDetails = DB::table('jobs')->where('id', $this->job_id)->orderBy('id', 'DESC')->first();
        $active_proposals = DB::table('seller_proposals')->where('job_id', $this->job_id)->where('status', 'Active')->get();
        foreach ($active_proposals as $key => $proposal) {
            $proposal->attachments = DB::table('seller_proposal_attachments')->where('proposal_id', $proposal->id)->get();
        }

        $cancelled_proposals = DB::table('seller_proposals')->where('job_id', $this->job_id)->where('status', 'Rejected')->get();
        foreach ($cancelled_proposals as $key => $proposal) {
            $proposal->attachments = DB::table('seller_proposal_attachments')->where('proposal_id', $proposal->id)->get();
        }

        return view('livewire.client.jobs.job-details-component', ['jobDetails' => $jobDetails, 'active_proposals' => $active_proposals, 'cancelled_proposals' => $cancelled_proposals])->layout('livewire.client.layouts.base');
    }
}
