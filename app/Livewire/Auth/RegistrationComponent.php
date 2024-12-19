<?php

namespace App\Livewire\Auth;

use App\Models\User;
use Livewire\Component;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;

class RegistrationComponent extends Component
{
    public $first_name, $last_name, $email, $phone, $password, $confirm_password, $remember_me = 0, $login_status, $type;

    public function updated($fields)
    {
        $this->validateOnly($fields, [
            'first_name' => 'required',
            'last_name' => 'required',
            'email' => 'required|email|unique:users,email',
            'password' => 'required|min:8|max:30',
            'confirm_password' => 'required|min:8|max:30|same:password',
        ]);
    }

    public function userRegistration()
    {
        $this->validate([
            'first_name' => 'required',
            'last_name' => 'required',
            'email' => 'required|email|unique:users,email',
            'password' => 'required|min:8|max:30',
            'confirm_password' => 'required|min:8|max:30|same:password',
        ]);

        $user = new User();
        $user->first_name = $this->first_name;
        $user->last_name = $this->last_name;
        $user->email = $this->email;
        $user->password = Hash::make($this->password);
        $user->type = session()->get('type');
        $user->save();
        Auth::guard('web')->attempt(['email' => $this->email, 'password' => $this->password]);
        session()->flash('success', 'Registration successful');
        if (user()->type == 'seller') {
            return redirect()->route('seller.dashboard');
        } else {
            return redirect()->route('client.home');
        }
    }

    public function render()
    {
        return view('livewire.auth.registration-component')->layout('livewire.client.layouts.base');
    }
}
