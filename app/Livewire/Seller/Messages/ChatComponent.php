<?php

namespace App\Livewire\Seller\Messages;

use Illuminate\Support\Facades\DB;
use Livewire\Component;

class ChatComponent extends Component
{
    public function mount()
    {

    }

    public function render()
    {
        $chats = DB::table('chats')->where(function ($q) {
            $q->where('sender', user()->id)
                ->orWhere('receiver', user()->id);
        })->get();

        foreach ($chats as $key => $chat) {
            if ($chat->sender == user()->id) {
                $chat_user_id = $chat->receiver;
            } else {
                $chat_user_id = $chat->sender;
            }
            $chat->user = DB::table('users')->select('id', 'first_name', 'last_name', 'avatar')->where('id', $chat_user_id)->first();
        }

        return view('livewire.seller.messages.chat-component', ['chats' => $chats])->layout('livewire.seller.layouts.base');
    }
}
