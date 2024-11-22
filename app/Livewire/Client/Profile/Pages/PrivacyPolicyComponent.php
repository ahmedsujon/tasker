<?php

namespace App\Livewire\Client\Profile\Pages;

use Livewire\Component;

class PrivacyPolicyComponent extends Component
{
    public function render()
    {
        return view('livewire.client.profile.pages.privacy-policy-component')->layout('livewire.client.layouts.base');
    }
}
