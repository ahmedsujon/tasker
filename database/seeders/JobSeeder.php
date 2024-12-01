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
                'categories' => json_encode([1]),
                'title' => 'Website Development',
                'project_size' => 'Large',
                'description' => 'Build a responsive e-commerce website with payment integration.',
                'attachments' => json_encode(['specifications.pdf']),
                'budget' => '5000',
                'location' => 'Jeddah',
                'status' => 'Active',
            ],
            [
                'user_id' => 2,
                'categories' => json_encode([2]),
                'title' => 'Logo Design',
                'project_size' => 'Small',
                'description' => 'Create a unique logo for a new startup.',
                'attachments' => json_encode(['logo_ideas.zip']),
                'budget' => '500',
                'location' => 'Riyadh',
                'status' => 'Active',
            ],
            [
                'user_id' => 3,
                'categories' => json_encode([1]),
                'title' => 'SEO Optimization',
                'project_size' => 'Medium',
                'description' => 'Optimize the website to improve search engine rankings.',
                'attachments' => json_encode(['seo_audit.docx']),
                'budget' => '1200',
                'location' => 'Jeddah',
                'status' => 'In Order',
            ],
            [
                'user_id' => 4,
                'categories' => json_encode([4]),
                'title' => 'Content Writing',
                'project_size' => 'Medium',
                'description' => 'Write blog posts for a tech blog, focused on AI and machine learning.',
                'attachments' => json_encode(['topics_list.xlsx']),
                'budget' => '800',
                'location' => 'Riyadh',
                'status' => 'In Order',
            ],
            [
                'user_id' => 5,
                'categories' => json_encode([2]),
                'title' => 'Social Media Marketing',
                'project_size' => 'Large',
                'description' => 'Develop a social media strategy for a product launch.',
                'attachments' => json_encode(['strategy_outline.pdf']),
                'budget' => '2000',
                'location' => 'Jeddah',
                'status' => 'Active',
            ],
        ]);
    }
}
