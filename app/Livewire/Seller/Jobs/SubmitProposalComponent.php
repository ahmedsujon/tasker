<?php

namespace App\Livewire\Seller\Jobs;

use App\Models\SellerProposal;
use App\Models\SellerProposalAttachment;
use Livewire\Component;
use Livewire\WithFileUploads;

class SubmitProposalComponent extends Component
{
    use WithFileUploads;
    public $attachments = [], $newAttachments = [], $description, $timeline, $cost, $bid_id;

    public function mount($bid_id)
    {
        $this->bid_id = $bid_id;
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

    public function addTimeline($timeline)
    {
        $this->timeline = $timeline;
    }

    public function submitProposal()
    {
        $this->validate([
            'description' => 'required',
            'timeline' => 'required',
            'cost' => 'required|numeric',
            'attachments' => 'required',
        ]);

        // Store proposal data in database
        $prop = SellerProposal::find($this->bid_id);
        $prop->description = $this->description;
        $prop->timeline = $this->timeline;
        $prop->cost = $this->cost;
        $prop->status = 'Active';
        $prop->save();

        // Store attachments in database
        foreach ($this->attachments as $attachment) {
            $fileOrgName = $attachment->getClientOriginalName();
            $fileName = 'attachment_' . $this->bid_id . time() . $attachment->getClientOriginalExtension();
            $attachment->storeAs('proposal-attachments', $fileName);

            $att = new SellerProposalAttachment();
            $att->proposal_id = $prop->id;
            $att->name = $fileOrgName;
            $att->attachment = 'uploads/proposal-attachments/' . $fileName;
            $att->size = round(($attachment->getSize() / 1024), 2);
            $att->type = $attachment->getClientOriginalExtension();
            $att->save();
        }
        return redirect()->route('seller.sellerJobsProposalSuccess');
    }

    public function render()
    {
        return view('livewire.seller.jobs.submit-proposal-component')->layout('livewire.seller.layouts.base');
    }
}
