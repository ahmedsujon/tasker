<?php

namespace App\Livewire\Seller\Jobs;

use App\Models\Job;
use App\Models\SavedJob;
use App\Models\SellerProposal;
use Livewire\Component;

class JobDetailsComponent extends Component
{
    public $jobDetails;
    public function mount($id)
    {
        $this->jobDetails = Job::where('id', $id)->orderBy('id', 'DESC')->first();
    }

    public function applyBid()
    {
        $getBid = SellerProposal::where('seller_id', user()->id)->where('job_id', $this->jobDetails->id)->first();

        if ($getBid && $getBid->status == 'Active') {
            $this->dispatch('warning', ['message' => 'You have already submitted a bid for this job.']);
        } else if ($getBid && $getBid->status == 'Pending') {
            return redirect()->route('seller.sellerJobsProposal', ['bid_id' => $getBid->id]);
        } else {
            $bid = new SellerProposal();
            $bid->seller_id = user()->id;
            $bid->client_id = $this->jobDetails->user_id;
            $bid->job_id = $this->jobDetails->id;
            $bid->save();

            return redirect()->route('seller.sellerJobsProposal', ['bid_id' => $bid->id]);
        }
    }

    public function saveJob()
    {
        $getSavedJob = SavedJob::where('user_id', user()->id)->where('job_id', $this->jobDetails->id)->first();

        if ($getSavedJob) {
            $getSavedJob->delete();
            $this->dispatch('success', ['message' => 'Job removed from saved list']);
        } else {
            $saveList = new SavedJob();
            $saveList->user_id = user()->id;
            $saveList->job_id = $this->jobDetails->id;
            $saveList->save();
            
            $this->dispatch('success', ['message' => 'Job added to saved list']);
        }
    }

    public function render()
    {
        return view('livewire.seller.jobs.job-details-component')->layout('livewire.seller.layouts.base');
    }
}
