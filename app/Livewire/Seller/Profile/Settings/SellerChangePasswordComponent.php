<?php

namespace App\Livewire\Seller\Profile\Settings;

use App\Models\User;
use Livewire\Component;
use Illuminate\Support\Facades\Hash;

class SellerChangePasswordComponent extends Component
{
    public $old_password, $password, $confirm_password;

    public function updatePassword()
    {
        $this->validate([
            'old_password' => 'required',
            'password' => 'required|min:8|max:30',
            'confirm_password' => 'required|same:password',
        ]);

        $user = User::find(user()->id);

        if (!Hash::check($this->old_password, $user->password)) {
            $this->dispatch('error', ['message' => 'The old password is incorrect']);
            return;
        }

        if (!$user) {
            $this->dispatch('error', ['message' => 'User not found']);
            return;
        }
        $user->password = Hash::make($this->password);
        $user->save();
        $this->dispatch('success', ['message' => 'Password updated successfully']);
    }

    public function render()
    {
        return view('livewire.seller.profile.settings.seller-change-password-component')->layout('livewire.seller.layouts.base');
    }
}
