<?php

namespace App\Livewire\App\Profile;

use App\Models\PaymentMethod;
use Livewire\Component;

class PaymentMethodComponent extends Component
{
    public $user_id, $card_name, $card_number, $expiry, $cvv;
    public function storeData()
    {
        $this->validate([
            'card_number' => 'required',
            'card_name' => 'required',
            'expiry' => 'required',
            'cvv' => 'required',
        ]);

        $data = new PaymentMethod();
        $data->user_id = user()->id;
        $data->card_name = $this->card_name;
        $data->card_number = $this->card_number;
        $data->expiry = $this->expiry;
        $data->cvv = $this->cvv;

        $data->save();
        $this->resetInputs();
        $this->dispatch('success', ['message' => 'New card added successfully!']);
    }

    public function resetInputs()
    {
        $this->user_id = '';
        $this->card_name = '';
        $this->card_number = '';
        $this->expiry = '';
        $this->cvv = '';
    }

    public function render()
    {
        return view('livewire.app.profile.payment-method-component')->layout('livewire.app.layouts.base');
    }
}
