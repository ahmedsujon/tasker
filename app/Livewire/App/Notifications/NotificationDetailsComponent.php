<?php

namespace App\Livewire\App\Notifications;

use Livewire\Component;

class NotificationDetailsComponent extends Component
{
    public function render()
    {
        return view('livewire.app.notifications.notification-details-component')->layout('livewire.app.layouts.base');
    }
}
