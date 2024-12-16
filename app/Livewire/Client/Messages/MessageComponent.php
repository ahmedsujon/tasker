<?php

namespace App\Livewire\Client\Messages;

use App\Models\Chat;
use App\Models\ChatMessage;
use App\Models\User;
use Illuminate\Support\Facades\DB;
use Livewire\Component;
use Livewire\WithFileUploads;
use Livewire\WithPagination;

class MessageComponent extends Component
{
    use WithPagination, WithFileUploads;
    public $chat, $receiver_id, $message, $searchTerm, $sortingValue = 10, $messages;

    public function mount($chat_id)
    {
        $chat = DB::table('chats')->where('id', $chat_id)->first();

        if ($chat->receiver == user()->id) {
            $user_id = $chat->sender;
        } else {
            $user_id = $chat->receiver;
        }
        $this->receiver_id = $user_id;

        $user = DB::table('users')->select('id', 'first_name', 'last_name', 'avatar')->where('id', $user_id)->first();
        $chat->user = $user;

        $this->chat = $chat;

        $this->allMessages();
    }

    public function allMessages()
    {
        $messages = [];
        $msgs = ChatMessage::where('chat_id', $this->chat->id)
            ->orderBy('created_at', 'ASC')
            // ->take(10)
            ->get();
        foreach ($msgs as $msg) {
            $date = $msg->created_at->format('Y-m-d');
            if (!isset($messages[$date])) {
                $messages[$date] = [
                    'date' => $date,
                    'messages' => []
                ];
            }
            $messages[$date]['messages'][] = $msg;
        }
        $messages = collect($messages)
            ->sortBy('date')
            ->values()
            ->toArray();

        $this->messages = $messages;
    }

    public function sendMessage()
    {
        $this->validate([
            'message' => 'required',
        ]);

        $chat = Chat::find($this->chat->id);
        $chat->last_msg = $this->message;
        $chat->save();

        if ($this->message) {
            $chatM = new ChatMessage();
            $chatM->chat_id = $this->chat->id;
            $chatM->sender = user()->id;
            $chatM->receiver = $this->receiver_id;
            $chatM->message = $this->message;
            $chatM->save();

            $this->message = null;
        }

        $this->allMessages();
    }

    public function render()
    {
        $chats = Chat::get();
        return view('livewire.client.messages.message-component', ['chats' => $chats])->layout('livewire.client.layouts.base');
    }
}
