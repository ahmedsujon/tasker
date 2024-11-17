<?php

namespace App\Livewire\App\Profile;

use App\Models\User;
use Livewire\Component;
use Livewire\Attributes\Title;
use Livewire\WithFileUploads;

class AccountInfoComponent extends Component
{
    use WithFileUploads;

    public $edit_id, $first_name, $last_name, $online_status, $email, $phone, $avatar, $updatedAvatar;
    public function mount()
    {
        $data = User::find(user()->id);
        $this->first_name = $data->first_name;
        $this->last_name = $data->last_name;
        $this->email = $data->email;
        $this->phone = $data->phone;
        $this->updatedAvatar = $data->avatar;
        $this->online_status = $data->online_status;
    }

    public function updatedAvatar()
    {
        if ($this->avatar) {
            $img_to_delete = user()->avatar;

            $file = uploadFile('image', 100, 'profile-images/', 'user', $this->avatar);
            User::where('id', user()->id)->update(['avatar' => $file]);

            deleteFile($img_to_delete);
            $this->mount();
            $this->dispatch('success', ['message' => 'Profile picture updated']);
        }
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

    public function updatedOnlineStatus()
    {
        User::where('id', user()->id)->update(['online_status' => ($this->online_status)]);
        $this->dispatch('success', ['message' => 'Status updated successfully.']);
    }

    #[Title('Account Information')]
    public function render()
    {
        return view('livewire.app.profile.account-info-component')->layout('livewire.app.layouts.base');
    }
}
