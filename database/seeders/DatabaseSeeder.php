<?php


namespace Database\Seeders;

use App\Models\Coupon;
use App\Models\Order;
use App\Models\User;
// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
         // Seed coupons trước
         Coupon::factory()->count(5)->create();

         // Sau đó mới seed orders
         Order::factory()->count(10)->create();



        // User::factory(10)->create();

        // $this->call(UsersTableSeeder::class);
        // User::factory()->create([
        //     'name' => 'Test User',
        //     'email' => 'test@example.com',
        // ]);
    }
}
