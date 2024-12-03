<?php

namespace App\Livewire\Seller\Payments;

use App\Models\SellerBankAccount;
use Livewire\Component;

class BankInfoComponent extends Component
{
    public function render()
    {
        $bank_accounts = SellerBankAccount::get();
        return view('livewire.seller.payments.bank-info-component', ['bank_accounts' => $bank_accounts])->layout('livewire.seller.layouts.base');
    }
}
