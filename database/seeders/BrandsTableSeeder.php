<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class BrandsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('brands')->insert([
            [
                'brand_name' => 'Apple',
                'brand_slug' => 'apple',
                'brand_image' => '1739356212196819.png',
            ],
            [
                'brand_name' => 'Samsung',
                'brand_slug' => 'samsung',
                'brand_image' => '1739356212196819.png',
            ],
            [
                'brand_name' => 'Xiaomi',
                'brand_slug' => 'xiaomi',
                'brand_image' => '1739356212196819.png',
            ],
        ]);
    }
}
