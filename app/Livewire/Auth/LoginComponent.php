<?php

namespace App\Livewire\Auth;

use App\Models\User;
use Livewire\Component;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;

class LoginComponent extends Component
{
    public $email, $password, $remember_me = 0, $login_status;

    public function userLogin()
    {
        $this->validate([
            'email' => 'required|email',
            'password' => 'required',
        ]);

        $getUser = User::where('email', $this->email)->first();

        if ($getUser) {
            if (Hash::check($this->password, $getUser->password)) {
                $remember = $this->remember_me == 1 ? true : false;

                if(Auth::guard('web')->attempt(['email' => $this->email, 'password' => $this->password], $remember)){
                    if (user()->type == 'seller') {
                        return redirect()->route('seller.dashboard');
                    } else {
                        return redirect()->route('client.home');
                    }
                } else {
                    session()->flash('error', 'Incorrect email or password');
                }
            } else {
                session()->flash('error', 'Incorrect email or password');
            }
        } else {
            session()->flash('error', 'Incorrect email or password');
        }
    }

    public function render()
    {
        return view('livewire.auth.login-component')->layout('livewire.client.layouts.base');
    }
}
