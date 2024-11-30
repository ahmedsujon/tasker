<?php

namespace App\Livewire\Client\Messages;

use App\Models\Chat;
use Livewire\Component;
use Livewire\WithPagination;
use Livewire\WithFileUploads;

class MessageComponent extends Component
{
    use WithPagination, WithFileUploads;
    public $searchTerm, $sortingValue = 10;

    public function render()
    {
        $chats = Chat::get();
        return view('livewire.client.messages.message-component', ['chats' => $chats])->layout('livewire.client.layouts.base');
    }
}
