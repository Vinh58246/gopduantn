<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class CategoriesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        // 
        DB::table('categories')->insert([
            [
                'category_name' => 'Electronics',
                'category_slug' => 'electronics',
                'category_image' => '1740388410112488.webp',
                'parent_id' => '0',
            ],
            [
                'category_name' => 'Accessories & Supplies',
                'category_slug' => 'accessories-supplies',
                'category_image' => '1740388410112488.webp',
                'parent_id' => '1',
            ],
            [
                'category_name' => 'CategoryDemoLevel',
                'category_slug' => 'category-demo-level',
                'category_image' => '1740388410112488.webp',
                'parent_id' => '2',
            ],
            [
                'category_name' => 'B',
                'category_slug' => 'electronics',
                'category_image' => '1740388410112488.webp',
                'parent_id' => '0',
            ],
            [
                'category_name' => 'C',
                'category_slug' => 'accessories-supplies',
                'category_image' => '1740388410112488.webp',
                'parent_id' => '4',
            ],
            [
                'category_name' => 'D',
                'category_slug' => 'category-demo-level',
                'category_image' => '1740388410112488.webp',
                'parent_id' => '5',
            ]
        ]);
    }
}
