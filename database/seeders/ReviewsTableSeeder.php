<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class ReviewsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('reviews')->insert([
            [
                'comment' => "San Pham Nay Qua Ok",
                'rating' => '5',
                'status' => '0',
                'vendor_id' => 1,
                'product_id' => 1,
                'user_id' => 1,
            ],
            [
                'comment' => "San Pham Nay Khong Qua Ok",
                'rating' => '2',
                'status' => '0',
                'vendor_id' => 1,
                'product_id' => 1,
                'user_id' => 2,
            ],
        ]);
    }
}
