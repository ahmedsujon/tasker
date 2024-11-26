<?php

namespace App\Livewire\Seller\Profile;

use App\Models\User;
use Livewire\Component;
use Livewire\Attributes\Title;
use Livewire\WithFileUploads;

class SellerAccountComponent extends Component
{
    use WithFileUploads;
    public $edit_id, $first_name, $last_name, $online_status, $phone, $avatar, $updatedAvatar;

    public function mount()
    {
        $data = User::find(user()->id);
        $this->first_name = $data->first_name;
        $this->last_name = $data->last_name;
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
        ]);

        $data = User::find($this->edit_id);
        $data->first_name = $this->first_name;
        $data->last_name = $this->last_name;
        $data->phone = $this->phone;
        // dd($data);
        $data->save();
        $this->dispatch('success', ['message' => 'Informatio updated successfully']);
    }

    public function updatedOnlineStatus()
    {
        User::where('id', user()->id)->update(['online_status' => ($this->online_status)]);
        $this->dispatch('success', ['message' => 'Status updated successfully.']);
    }

    #[Title('Seller Account Information')]
    public function render()
    {
        return view('livewire.seller.profile.seller-account-component')->layout('livewire.seller.layouts.base');
    }
}
