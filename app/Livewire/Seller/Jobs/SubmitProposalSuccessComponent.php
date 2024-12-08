<?php

namespace App\Livewire\Seller\Jobs;

use Livewire\Component;

class SubmitProposalSuccessComponent extends Component
{
    public function render()
    {
        return view('livewire.seller.jobs.submit-proposal-success-component')->layout('livewire.seller.layouts.base');
    }
}
