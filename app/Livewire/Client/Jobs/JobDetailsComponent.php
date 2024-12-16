<?php

namespace App\Livewire\Client\Jobs;

use App\Models\SellerProposal;
use Illuminate\Support\Facades\DB;
use App\Models\Job;
use App\Models\SellerProposal;
use Livewire\Component;

class JobDetailsComponent extends Component
{
    public $job_id, $selectedJobID;

    public function mount($id)
    {
        $this->job_id = $id;
        $this->jobDetails = Job::where('id', $id)->orderBy('id', 'DESC')->first();
        $this->proposals = SellerProposal::where('job_id', $id)->get();
    }

    public function selectJobMoreOption($id)
    {
        $this->selectedJobID = $id;
    }

    public $proposal_id;
    public function rejectProposalConfirmation($id)
    {
        $this->proposal_id = $id;
        $this->dispatch('showRejectProposalModal');
    }

    public function rejectProposal()
    {
        $proposal = SellerProposal::find($this->proposal_id);
        $proposal->status = 'Rejected';
        $proposal->save();

        $this->proposal_id = '';

        $this->dispatch('closeModal');
        $this->dispatch('success', ['message'=>'Proposal cancelled successfully']);
    }


    public function render()
    {
        $jobDetails = DB::table('jobs')->where('id', $this->job_id)->orderBy('id', 'DESC')->first();
        $active_proposals = DB::table('seller_proposals')->where('job_id', $this->job_id)->where('status', 'Active')->get();
        foreach ($active_proposals as $key => $proposal) {
            $proposal->attachments = DB::table('seller_proposal_attachments')->where('proposal_id', $proposal->id)->get();
            $proposal->categories = DB::table('jobs')->select('category_names')->where('id', $proposal->job_id)->first()->category_names;
        }

        $cancelled_proposals = DB::table('seller_proposals')->where('job_id', $this->job_id)->where('status', 'Rejected')->get();
        foreach ($cancelled_proposals as $key => $proposal) {
            $proposal->attachments = DB::table('seller_proposal_attachments')->where('proposal_id', $proposal->id)->get();
            $proposal->categories = DB::table('jobs')->select('category_names')->where('id', $proposal->job_id)->first()->category_names;
        }

        return view('livewire.client.jobs.job-details-component', ['jobDetails' => $jobDetails, 'active_proposals' => $active_proposals, 'cancelled_proposals' => $cancelled_proposals])->layout('livewire.client.layouts.base');
    }
}
