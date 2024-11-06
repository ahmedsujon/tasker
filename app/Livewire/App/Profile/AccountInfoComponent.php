<?php

namespace App\Livewire\App\Profile;

use App\Models\User;
use Livewire\Component;

class AccountInfoComponent extends Component
{
    public $edit_id, $first_name, $last_name, $online_status, $email, $phone, $avatar, $updatedAvatar;
    public function mount($id)
    {
        $data = User::where('id', $id)->first();
        $this->edit_id = $id;
        $this->first_name = $data->first_name;
        $this->last_name = $data->last_name;
        $this->email = $data->email;
        $this->phone = $data->phone;
        $this->online_status = $data->online_status;
    }

    public function updateData()
    {
        $this->validate([
            'first_name' => 'required',
            'last_name' => 'required',
            'email' => 'required|email|unique:users,email,' . $this->edit_id,
            'phone' => 'required|unique:users,phone,' . $this->edit_id,
        ]);

        $user = User::find($this->edit_id);
        $user->first_name = $this->first_name;
        $user->last_name = $this->last_name;
        $user->email = $this->email;
        $user->phone = $this->phone;

        $user->save();
        $this->dispatch('success', ['message' => 'Informatio updated successfully']);
    }

    public function render()
    {
        return view('livewire.app.profile.account-info-component')->layout('livewire.app.layouts.base');
    }
}
