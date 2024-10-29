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
            ['name' => 'Web Development', 'status' => 0],
            ['name' => 'Graphic Design', 'status' => 0],
            ['name' => 'Content Writing', 'status' => 0],
            ['name' => 'Digital Marketing', 'status' => 0],
            ['name' => 'SEO', 'status' => 0],
            ['name' => 'Social Media Management', 'status' => 0],
            ['name' => 'Video Editing', 'status' => 0],
            ['name' => 'Virtual Assistance', 'status' => 0],
            ['name' => 'Data Entry', 'status' => 0],
            ['name' => 'Translation Services', 'status' => 0],
        ]);
    }
}
