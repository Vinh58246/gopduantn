<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use App\Models\Order;
use App\Models\User;
use App\Models\Coupon;

class OrderFactory extends Factory
{
    protected $model = Order::class;

    public function definition()
    {
        return [
            'user_id' => User::factory(),
            'coupon_id' => Coupon::factory(),
            'name' => $this->faker->name,
            'email' => $this->faker->email,
            'phone' => $this->faker->phoneNumber,
            'address' => $this->faker->address,
            'notes' => $this->faker->sentence,
            'payment_method' => $this->faker->randomElement(['COD', 'VNPay', 'Momo']),
            'transaction_id' => $this->faker->uuid,
            'amount' => $this->faker->randomFloat(2, 100, 500),
            'discount_amount' => $this->faker->randomFloat(2, 10, 50),
            'order_number' => strtoupper($this->faker->unique()->bothify('ORD###')),
            'invoice_no' => strtoupper($this->faker->unique()->bothify('INV###')),
            'status' => 'pending',
            'date' => now(),
            'return_reason' => null,
            'return_order' => 0,
            'created_at' => now(),
            'updated_at' => now(),
        ];
    }
}
