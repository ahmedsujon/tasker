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
                'category_id' => 1,
                'title' => 'Website Development',
                'project_size' => 'Large',
                'description' => 'Build a responsive e-commerce website with payment integration.',
                'attacments' => 'specifications.pdf',
                'budget' => '5000',
                'status' => 'Active',
            ],
            [
                'category_id' => 2,
                'title' => 'Logo Design',
                'project_size' => 'Small',
                'description' => 'Create a unique logo for a new startup.',
                'attacments' => 'logo_ideas.zip',
                'budget' => '500',
                'status' => 'Active',
            ],
            [
                'category_id' => 1,
                'title' => 'SEO Optimization',
                'project_size' => 'Medium',
                'description' => 'Optimize the website to improve search engine rankings.',
                'attacments' => 'seo_audit.docx',
                'budget' => '1200',
                'status' => 'In Order',
            ],
            [
                'category_id' => 4,
                'title' => 'Content Writing',
                'project_size' => 'Medium',
                'description' => 'Write blog posts for a tech blog, focused on AI and machine learning.',
                'attacments' => 'topics_list.xlsx',
                'budget' => '800',
                'status' => 'In Order',
            ],
            [
                'category_id' => 2,
                'title' => 'Social Media Marketing',
                'project_size' => 'Large',
                'description' => 'Develop a social media strategy for a product launch.',
                'attacments' => 'strategy_outline.pdf',
                'budget' => '2000',
                'status' => 'Active',
            ],
            [
                'category_id' => 6,
                'title' => 'Data Entry',
                'project_size' => 'Small',
                'description' => 'Enter data from physical forms into a spreadsheet.',
                'attacments' => 'form_template.docx',
                'budget' => '300',
                'status' => 'Active',
            ],
            [
                'category_id' => 4,
                'title' => 'Video Editing',
                'project_size' => 'Medium',
                'description' => 'Edit raw footage to create a promotional video for a company.',
                'attacments' => 'raw_footage.zip',
                'budget' => '1500',
                'status' => 'Finish',
            ],
            [
                'category_id' => 1,
                'title' => 'Virtual Assistance',
                'project_size' => 'Small',
                'description' => 'Assist with daily administrative tasks, including email management and scheduling.',
                'attacments' => null,
                'budget' => '600',
                'status' => 'Active',
            ],
            [
                'category_id' => 1,
                'title' => 'Mobile App Development',
                'project_size' => 'Large',
                'description' => 'Develop a cross-platform mobile application for online shopping.',
                'attacments' => 'app_requirements.pdf',
                'budget' => '8000',
                'status' => 'Draft',
            ],
            [
                'category_id' => 10,
                'title' => 'Translation Services',
                'project_size' => 'Medium',
                'description' => 'Translate documents from English to Spanish for a client.',
                'attacments' => 'documents_for_translation.zip',
                'budget' => '900',
                'status' => 'Draft',
            ],
        ]);
    }
}
