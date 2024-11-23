<?php

namespace App\Livewire\Client\Notifications;

use Livewire\Component;

class NotificationDetailsComponent extends Component
{
    public function render()
    {
        return view('livewire.client.notifications.notification-details-component')->layout('livewire.client.layouts.base');
    }
}
