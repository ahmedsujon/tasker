<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;

class UserTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $emails = ["user@example.com", "client@example.com"];

        foreach ($emails as $key => $email) {
            $getUser = User::where('email', $email)->first();
            if (!$getUser) {
                if ($key == 0) {
                    $user = new User();
                    $user->first_name = 'Mr';
                    $user->last_name = 'Seller';
                    $user->full_name = 'Mr Seller';
                    $user->username = 'seller_001';
                    $user->email = $email;
                    $user->phone = '01700000001';
                    $user->password = Hash::make('12345678');
                    $user->avatar = '';
                    $user->type = 'seller';
                    $user->save();
                } else {
                    $user = new User();
                    $user->first_name = 'Mr';
                    $user->last_name = 'Client';
                    $user->full_name = 'Mr Client';
                    $user->username = 'client_001';
                    $user->email = $email;
                    $user->phone = '01700000000';
                    $user->password = Hash::make('12345678');
                    $user->avatar = '';
                    $user->type = 'client';
                    $user->save();
                }
            }
        }
    }
}
