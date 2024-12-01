<?php

namespace App\Livewire\Seller\Payments;

use App\Models\SellerBankAccount;
use Livewire\Component;

class AddBankInfoComponent extends Component
{
    public $bank_name, $account_name, $account_number, $post_code, $account_type,
        $branch_name, $dob, $customer_id_type, $customer_id, $city, $phone, $status;
    public function storeData()
    {
        $this->validate([
            'bank_name' => 'required',
            'account_name' => 'required',
            'account_number' => 'required',
            'post_code' => 'required',
            'account_type' => 'required',
            'branch_name' => 'required',
            'dob' => 'required',
            'customer_id' => 'required',
            'city' => 'required',
            'phone' => 'required',
        ]);

        $data = new SellerBankAccount();
        $data->bank_name = $this->bank_name;
        $data->account_name = $this->bank_name;
        $data->account_number = $this->bank_name;
        $data->post_code = $this->bank_name;
        $data->account_type = $this->bank_name;
        $data->branch_name = $this->bank_name;
        $data->dob = $this->bank_name;
        $data->customer_id_type = $this->bank_name;
        $data->customer_id = $this->bank_name;
        $data->city = $this->bank_name;
        $data->phone = $this->bank_name;
        $data->status = $this->bank_name;
        dd($data);
        $data->save();
        $this->resetInputs();
        $this->dispatch('success', ['message' => 'Account added successfully']);
    }

    public function resetInputs()
    {
        $this->bank_name = '';
        $this->account_name = '';
        $this->account_number = '';
        $this->post_code = '';
        $this->account_type = '';
        $this->branch_name = '';
        $this->dob = '';
        $this->customer_id = '';
        $this->city = '';
        $this->phone = '';
    }

    public function render()
    {
        return view('livewire.seller.payments.add-bank-info-component')->layout('livewire.seller.layouts.base');
    }
}
