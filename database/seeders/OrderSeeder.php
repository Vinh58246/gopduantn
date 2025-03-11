<?php

namespace Database\Seeders;

use App\Models\Coupon;
use App\Models\Order;
use App\Models\User;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Carbon\Carbon;

class OrderSeeder extends Seeder {
    public function run() {
        $users = User::pluck('id')->toArray();
        $coupons = Coupon::pluck('id')->toArray();

        Order::create([
            'user_id' => $users[array_rand($users)],
            'coupon_id' => count($coupons) > 0 ? $coupons[array_rand($coupons)] : null, // Chỉ lấy coupon_id nếu có
            'name' => 'Nguyễn Văn A',
            'email' => 'nguyenvana@example.com',
            'phone' => '0901234567',
            'address' => '123 Đường ABC, Hà Nội',
            'amount' => 500000,
            'discount_amount' => 50000,
            'order_number' => 'TvslEv3I1q',
            'invoice_no' => 'INV8979',
            'status' => 'pending',
            'date' => now(),
            'return_order' => 0,
        ]);
    }
}
