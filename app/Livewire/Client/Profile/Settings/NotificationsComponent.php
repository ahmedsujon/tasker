<?php

namespace App\Livewire\Client\Profile\Settings;

use Livewire\Component;

class NotificationsComponent extends Component
{
    public function render()
    {
        return view('livewire.client.profile.settings.notifications-component')->layout('livewire.client.layouts.base');
    }
}
