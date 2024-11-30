<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Faker\Factory as Faker;

class TransectionSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run()
    {
        $faker = Faker::create();

        // Insert 10 fake transections into the database
        foreach (range(1, 10) as $index) {
            DB::table('transections')->insert([
                'user_id' => $faker->numberBetween(1, 50),  // Assuming there are 50 users
                'job_id' => $faker->numberBetween(1, 20),   // Assuming there are 20 jobs
                'amount' => $faker->randomFloat(2, 10, 5000),  // Amount between 10 and 5000
                'payment_method' => $faker->randomElement(['Credit Card', 'Bank Transfer', 'Cash', 'PayPal']),
                'status' => $faker->randomElement(['Pending', 'Completed', 'Failed']),
                'created_at' => now(),
                'updated_at' => now(),
            ]);
        }
    }
}
