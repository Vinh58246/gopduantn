<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class ProductsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('products')->insert([
            [
                'brand_id' => 1,
                'category_id' => 1,
                'product_name' => 'A',
                'product_slug' => 'a',
                'product_code' => '123456789',
                'product_qty' => 10,
                'product_tags' => 'a',
                'selling_price' => 100,
                'discount_price' => 80,
                'short_descp' => 'a',
                'long_descp' => 'b',
                'product_thumbnail' => '1739820204509863.webp',
                'vendor_id' => 3,
                'status' => 0,
            ],
        ]);
    }
}
