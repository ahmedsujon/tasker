<?php

namespace App\Livewire\Auth;

use Livewire\Component;

class PasswordResetSuccessComponent extends Component
{
    public function render()
    {
        return view('livewire.auth.password-reset-success-component')->layout('livewire.client.layouts.base');
    }
}
