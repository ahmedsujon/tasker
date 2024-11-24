<?php

namespace App\Livewire\Auth;

use Livewire\Component;

class OnboardingComponent extends Component
{
    public $type = 'seller';

    public function proceedToRegister()
    {
        session()->put('type', $this->type);
        return redirect()->route('register');
    }

    public function render()
    {
        return view('livewire.auth.onboarding-component')->layout('livewire.client.layouts.base');
    }
}
