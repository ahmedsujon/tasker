<?php

namespace Database\Seeders;

use App\Models\PaymentMethod;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class PaymentMethodSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $getData = PaymentMethod::where('user_id', 2)->first();
        if (!$getData) {
            $pM = new PaymentMethod();
            $pM->user_id = 2;
            $pM->card_number = '4242424242424242';
            $pM->card_name = 'Test Card';
            $pM->expiry = '04/28';
            $pM->cvv = '242';
            $pM->status = 1;
            $pM->save();
        }
    }
}
