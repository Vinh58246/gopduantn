<?php


namespace Database\Factories;

use App\Models\Coupon;
use Illuminate\Database\Eloquent\Factories\Factory;

class CouponFactory extends Factory
{
    protected $model = Coupon::class;

    public function definition(): array
    {
        return [
            'coupon_name' => $this->faker->word, // Fake tên mã giảm giá
            'coupon_discount' => $this->faker->numberBetween(5, 50), // ⚠ Đúng tên cột
            'coupon_validity' => $this->faker->date(), // Fake ngày hết hạn
            'status' => 1, // Mặc định là hoạt động
        ];
    }
}
