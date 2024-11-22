<?php

namespace App\Livewire\Client\Notifications;

use Livewire\Component;

class NotificationComponent extends Component
{
    public function render()
    {
        return view('livewire.client.notifications.notification-component')->layout('livewire.client.layouts.base');
    }
}
