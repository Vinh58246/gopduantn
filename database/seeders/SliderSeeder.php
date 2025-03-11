<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Slider;
class SliderSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Slider::create([
            'title' => 'Khuyến mãi đặc biệt!',
            'short_title' => 'Giảm giá 50% cho đơn hàng đầu tiên',
            'image' => 'sliders/sample.jpg'
        ]);
    }
}
