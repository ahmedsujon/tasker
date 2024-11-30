<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class CategorySeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $categories = [
            [
                'id' => 1,
                'name' => 'Assembly',
                'subcategories' => [
                    ['id' => 8, 'name' => 'General Furniture Assembly'],
                    ['id' => 9, 'name' => 'IKEA Assembly'],
                    ['id' => 10, 'name' => 'Crib Assembly'],
                    ['id' => 11, 'name' => 'PAX Assembly'],
                    ['id' => 12, 'name' => 'Desk Assembly'],
                    ['id' => 13, 'name' => 'Bookshelf Assembly'],
                ],
            ],
            [
                'id' => 2,
                'name' => 'Mounting',
                'subcategories' => [
                    ['id' => 14, 'name' => 'TV Mounting'],
                    ['id' => 15, 'name' => 'Wall Hanging'],
                    ['id' => 16, 'name' => 'Art Installation'],
                ],
            ],
            [
                'id' => 3,
                'name' => 'Moving',
                'subcategories' => [
                    ['id' => 17, 'name' => 'Packing'],
                    ['id' => 18, 'name' => 'Unpacking'],
                    ['id' => 19, 'name' => 'Heavy Lifting'],
                ],
            ],
            [
                'id' => 4,
                'name' => 'Cleaning',
                'subcategories' => [
                    ['id' => 20, 'name' => 'Deep Cleaning'],
                    ['id' => 21, 'name' => 'Window Cleaning'],
                    ['id' => 22, 'name' => 'Carpet Cleaning'],
                ],
            ],
            [
                'id' => 5,
                'name' => 'Outdoor Help',
                'subcategories' => [
                    ['id' => 23, 'name' => 'Gardening'],
                    ['id' => 24, 'name' => 'Yard Work'],
                    ['id' => 25, 'name' => 'Fence Repairs'],
                ],
            ],
            [
                'id' => 6,
                'name' => 'Home Repairs',
                'subcategories' => [
                    ['id' => 26, 'name' => 'Plumbing Repairs'],
                    ['id' => 27, 'name' => 'Electrical Repairs'],
                    ['id' => 28, 'name' => 'Door Repairs'],
                ],
            ],
            [
                'id' => 7,
                'name' => 'Painting',
                'subcategories' => [
                    ['id' => 29, 'name' => 'Interior Painting'],
                    ['id' => 30, 'name' => 'Exterior Painting'],
                    ['id' => 31, 'name' => 'Touch-Ups'],
                ],
            ],
        ];

        // Insert main categories and their subcategories
        foreach ($categories as $category) {
            // Insert main category
            $categoryId = DB::table('categories')->insertGetId([
                'name' => $category['name'],
                'parent_id' => null,
                'status' => 1, // Active status
                'created_at' => now(),
                'updated_at' => now(),
            ]);

            // Insert subcategories
            foreach ($category['subcategories'] as $subcategory) {
                DB::table('categories')->insert([
                    'name' => $subcategory['name'],
                    'parent_id' => $categoryId,
                    'status' => 1, // Active status
                    'created_at' => now(),
                    'updated_at' => now(),
                ]);
            }
        }
    }
}
