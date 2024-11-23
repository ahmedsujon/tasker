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
                'user_id' => 1,
                'category_id' => 1,
                'title' => 'Website Development',
                'project_size' => 'Large',
                'description' => 'Build a responsive e-commerce website with payment integration.',
                'attacments' => 'specifications.pdf',
                'budget' => '5000',
                'status' => 'Active',
            ],
            [
                'user_id' => 2,
                'category_id' => 2,
                'title' => 'Logo Design',
                'project_size' => 'Small',
                'description' => 'Create a unique logo for a new startup.',
                'attacments' => 'logo_ideas.zip',
                'budget' => '500',
                'status' => 'Active',
            ],
            [
                'user_id' => 3,
                'category_id' => 1,
                'title' => 'SEO Optimization',
                'project_size' => 'Medium',
                'description' => 'Optimize the website to improve search engine rankings.',
                'attacments' => 'seo_audit.docx',
                'budget' => '1200',
                'status' => 'In Order',
            ],
            [
                'user_id' => 4,
                'category_id' => 4,
                'title' => 'Content Writing',
                'project_size' => 'Medium',
                'description' => 'Write blog posts for a tech blog, focused on AI and machine learning.',
                'attacments' => 'topics_list.xlsx',
                'budget' => '800',
                'status' => 'In Order',
            ],
            [
                'user_id' => 5,
                'category_id' => 2,
                'title' => 'Social Media Marketing',
                'project_size' => 'Large',
                'description' => 'Develop a social media strategy for a product launch.',
                'attacments' => 'strategy_outline.pdf',
                'budget' => '2000',
                'status' => 'Active',
            ],
        ]);
    }
}
