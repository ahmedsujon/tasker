<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class JobSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('jobs')->insert([
            [
                'user_id' => 2,
                'categories' => json_encode([1]),
                'title' => 'Website Development',
                'project_size' => 'Large',
                'description' => 'Build a responsive e-commerce website with payment integration.',
                'budget' => '5000',
                'location' => 'Jeddah',
                'category_names' => json_encode(["Assembly","General Furniture Assembly","IKEA Assembly"]),
                'status' => 'Active',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'user_id' => 2,
                'categories' => json_encode([2]),
                'title' => 'Logo Design',
                'project_size' => 'Small',
                'description' => 'Create a unique logo for a new startup.',
                'budget' => '500',
                'location' => 'Riyadh',
                'category_names' => json_encode(["Assembly","General Furniture Assembly","IKEA Assembly"]),
                'status' => 'Active',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'user_id' => 2,
                'categories' => json_encode([1]),
                'title' => 'SEO Optimization',
                'project_size' => 'Medium',
                'description' => 'Optimize the website to improve search engine rankings.',
                'budget' => '1200',
                'location' => 'Jeddah',
                'category_names' => json_encode(["Assembly","General Furniture Assembly","IKEA Assembly"]),
                'status' => 'Active',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'user_id' => 2,
                'categories' => json_encode([4]),
                'title' => 'Content Writing',
                'project_size' => 'Medium',
                'description' => 'Write blog posts for a tech blog, focused on AI and machine learning.',
                'budget' => '800',
                'location' => 'Riyadh',
                'category_names' => json_encode(["Assembly","General Furniture Assembly","IKEA Assembly"]),
                'status' => 'Active',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'user_id' => 2,
                'categories' => json_encode([2]),
                'title' => 'Social Media Marketing',
                'project_size' => 'Large',
                'description' => 'Develop a social media strategy for a product launch.',
                'budget' => '2000',
                'location' => 'Jeddah',
                'category_names' => json_encode(["Assembly","General Furniture Assembly","IKEA Assembly"]),
                'status' => 'Active',
                'created_at' => now(),
                'updated_at' => now(),
            ],
        ]);
    }
}
