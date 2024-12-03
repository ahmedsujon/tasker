<?php

namespace App\Livewire\Seller\Payments;

use Livewire\Component;
use App\Models\SellerBankAccount;

class EditBankInfoComponent extends Component
{
    public $bank_name, $account_name, $account_number, $post_code, $account_type,
        $branch_name, $dob, $customer_id_type, $customer_id, $city, $phone, $status, $id;

    public function mount($id)
    {
        $data = SellerBankAccount::where('id', $id)->first();
        $this->bank_name = $data->bank_name;
        $this->account_name = $data->account_name;
        $this->account_number = $data->account_number;
        $this->post_code = $data->post_code;
        $this->account_type = $data->account_type;
        $this->branch_name = $data->branch_name;
        $this->dob = $data->dob;
        $this->customer_id_type = $data->customer_id_type;
        $this->customer_id = $data->customer_id;
        $this->city = $data->city;
        $this->phone = $data->phone;
        $this->status = $data->status;
    }

    public function updateData()
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
            'status' => 'required',
        ]);

        $data = SellerBankAccount::where('id', $this->id)->first();
        $data->bank_name = $this->bank_name;
        $data->account_name = $this->account_name;
        $data->account_number = $this->account_number;
        $data->post_code = $this->post_code;
        $data->account_type = $this->account_type;
        $data->branch_name = $this->branch_name;
        $data->dob = $this->dob;
        $data->customer_id_type = $this->customer_id_type;
        $data->customer_id = $this->customer_id;
        $data->city = $this->city;
        $data->phone = $this->phone;
        $data->status = $this->status;
        $data->save();
        $this->dispatch('success', ['message' => 'Account updated successfully']);
    }

    public function render()
    {
        return view('livewire.seller.payments.edit-bank-info-component')->layout('livewire.seller.layouts.base');
    }
}
