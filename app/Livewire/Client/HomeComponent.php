<?php

namespace App\Livewire\Client;

use App\Models\Job;
use App\Models\Chat;
use Livewire\Component;
use App\Models\Proposal;
use Livewire\WithPagination;
use Illuminate\Support\Facades\DB;

class HomeComponent extends Component
{
    use WithPagination;
    public $searchTerm, $sortingValue = 10, $selectedJobID;

    public function selectJobMoreOption($id)
    {
        $this->selectedJobID = $id;
    }

    public function viewDetails()
    {
        return redirect()->route('client.jobDetails', ['id' => $this->selectedJobID]);
    }

    public function startChat($order_id)
    {
        $order = DB::table('orders')->where('id', $order_id)->first();

        $sender = user()->id;
        $receiver = $order->seller_id;

        $getChat = Chat::where(function ($qa) use ($sender, $receiver) {
            $qa->where('sender', $sender)
                ->where('receiver', $receiver);
        })->orWhere(function ($qb) use ($sender, $receiver) {
            $qb->where('sender', $receiver)
                ->where('receiver', $sender);
        })->first();

        if ($getChat) {
            return redirect()->route('client.chatMessages', ['chat_id' => $getChat->id]);
        } else {
            $chat = new Chat();
            $chat->sender = $sender;
            $chat->receiver = $receiver;
            $chat->status = 1;
            $chat->save();

            return redirect()->route('client.chatMessages', ['chat_id' => $chat->id]);
        }

    }

    public function render()
    {

        $active_jobs = DB::table('jobs')->where('user_id', user()->id)->where('status', 'Active')->paginate($this->sortingValue);
        $in_order_jobs = DB::table('jobs')->where('user_id', user()->id)->where('status', 'In Order')->paginate($this->sortingValue);

        $draft_jobs = Job::where('status', 'Active')->where('jobs.user_id', user()->id)->orderBy('id', 'DESC')->paginate($this->sortingValue);
        $finished_jobs = Job::where('status', 'Active')->where('jobs.user_id', user()->id)->orderBy('id', 'DESC')->paginate($this->sortingValue);
        $this->dispatch('reload_scripts');
        return view(
            'livewire.client.home-component',
            [
                'active_jobs' => $active_jobs,
                'in_order_jobs' => $in_order_jobs,
                'draft_jobs' => $draft_jobs,
                'finished_jobs' => $finished_jobs,
            ]
        )->layout('livewire.client.layouts.base');
    }
}
