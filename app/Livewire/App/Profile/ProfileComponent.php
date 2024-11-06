<?php

namespace App\Livewire\App\Profile;

use Livewire\Component;
use Livewire\Attributes\Title;

class ProfileComponent extends Component
{
    #[Title('Profile')]
    public function render()
    {
        return view('livewire.app.profile.profile-component')->layout('livewire.app.layouts.base');
    }
}
