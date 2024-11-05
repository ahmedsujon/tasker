<?php

namespace App\Livewire\App\Auth;

use Livewire\Component;

class PasswordResetSuccessComponent extends Component
{
    public function render()
    {
        return view('livewire.app.auth.password-reset-success-component')->layout('livewire.app.layouts.base');
    }
}
