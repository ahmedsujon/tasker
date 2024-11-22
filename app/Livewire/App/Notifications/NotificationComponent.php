<?php

namespace App\Livewire\App\Notifications;

use Livewire\Component;

class NotificationComponent extends Component
{
    public function render()
    {
        return view('livewire.app.notifications.notification-component')->layout('livewire.app.layouts.base');
    }
}
