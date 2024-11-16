<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class CategorySeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('categories')->insert([
            ['name' => 'Assembly', 'status' => 0],
            ['name' => 'Mounting', 'status' => 0],
            ['name' => 'Moving', 'status' => 0],
            ['name' => 'Cleaning', 'status' => 0],
            ['name' => 'Outdoor Help', 'status' => 0],
            ['name' => 'Home Repairs', 'status' => 0],
            ['name' => 'Painting', 'status' => 0],
            ['name' => 'IKEA Assembly', 'status' => 0],
            ['name' => 'Crib Assembly', 'status' => 0],
            ['name' => 'Bookshelf Assembly', 'status' => 0],
        ]);
    }
}
