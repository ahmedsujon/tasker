<?php

namespace App\Livewire\Seller\Jobs;

use App\Models\Job;
use Livewire\Component;
use Illuminate\Support\Facades\DB;

class JobsComponent extends Component
{
    public $paginationValue = 10;

    public function render()
    {
        $jobs = DB::table('jobs')->paginate($this->paginationValue);
        return view('livewire.seller.jobs.jobs-component', ['jobs' => $jobs])->layout('livewire.seller.layouts.base');
    }
}
