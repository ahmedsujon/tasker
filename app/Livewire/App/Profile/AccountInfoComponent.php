<?php

namespace App\Livewire\App\Profile;

use Livewire\Component;

class AccountInfoComponent extends Component
{
    public function render()
    {
        return view('livewire.app.profile.account-info-component')->layout('livewire.app.layouts.base');
    }
}
