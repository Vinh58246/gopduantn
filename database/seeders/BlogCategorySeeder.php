<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
class BlogCategorySeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $categories = [
            ['category_name' => 'Công nghệ', 'created_at' => now(), 'updated_at' => now()],
            ['category_name' => 'Lập trình', 'created_at' => now(), 'updated_at' => now()],
            ['category_name' => 'Kinh doanh', 'created_at' => now(), 'updated_at' => now()],
            ['category_name' => 'Thời trang', 'created_at' => now(), 'updated_at' => now()],
            ['category_name' => 'Du lịch', 'created_at' => now(), 'updated_at' => now()],
        ];

        DB::table('blog_categories')->insert($categories);
    }
}
