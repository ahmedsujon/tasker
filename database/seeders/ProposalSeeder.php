<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class ProposalSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('proposals')->insert([
            [
                'user_id' => 1,
                'review_id' => '1',
                'job_id' => '1',
                'description' => 'Excellent service provided.',
                'offering_cost' => 500,
                'offering_time' => '2024-11-20 14:30:00',
                'attachments' => 'file1.jpg',
            ],
            [
                'user_id' => 2,
                'review_id' => '2',
                'job_id' => '2',
                'description' => 'Satisfied with the prompt response.',
                'offering_cost' => 300,
                'offering_time' => '2024-11-21 10:00:00',
                'attachments' => 'file3.png',
            ],
            [
                'user_id' => 2,
                'review_id' => '3',
                'job_id' => '3',
                'description' => 'Good value for money.',
                'offering_cost' => 450,
                'offering_time' => '2024-11-22 12:15:00',
                'attachments' => 'file5.jpg',
            ],
            [
                'user_id' => 1,
                'review_id' => '4',
                'job_id' => '4',
                'description' => 'Quick and professional work.',
                'offering_cost' => 700,
                'offering_time' => '2024-11-23 09:45:00',
                'attachments' => null,
            ],
            [
                'user_id' => 2,
                'review_id' => '5',
                'job_id' => '5',
                'description' => 'Highly recommend their services.',
                'offering_cost' => 550,
                'offering_time' => '2024-11-24 16:20:00',
                'attachments' => 'file6.pdf',
            ],
        ]);
    }
}
