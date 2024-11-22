<?php

namespace App\Livewire\Client\Profile;

use Livewire\Component;
use Livewire\Attributes\Title;

class ProfileComponent extends Component
{
    #[Title('Profile')]
    public function render()
    {
        return view('livewire.client.profile.profile-component')->layout('livewire.client.layouts.base');
    }
}
