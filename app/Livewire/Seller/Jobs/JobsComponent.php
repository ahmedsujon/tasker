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
        $jobs = DB::table('jobs')->orderBy('id', 'DESC')->paginate($this->paginationValue);
        $saved_jobs = DB::table('saved_jobs')->where('user_id', user()->id)->orderBy('id', 'DESC')->paginate($this->paginationValue);
        $active_jobs = DB::table('seller_proposals')->where('seller_id', user()->id)->orderBy('id', 'DESC')->paginate($this->paginationValue);
        return view('livewire.seller.jobs.jobs-component', ['jobs' => $jobs,'saved_jobs' => $saved_jobs, 'active_jobs'=>$active_jobs])->layout('livewire.seller.layouts.base');
    }
}
