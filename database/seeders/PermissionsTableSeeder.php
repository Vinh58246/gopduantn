<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class PermissionsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('permissions')->insert([
            // Brand
            [
                'name' => 'brand.menu',
                'guard_name' => 'brand',
            ],
            [
                'name' => 'brand.list',
                'guard_name' => 'brand',
            ],
            [
                'name' => 'brand.add',
                'guard_name' => 'brand',
            ],
            [
                'name' => 'brand.edit',
                'guard_name' => 'brand',
            ],
            [
                'name' => 'brand.delete',
                'guard_name' => 'brand',
            ],

            // Category
            [
                'name' => 'category.menu',
                'guard_name' => 'category',
            ],
            [
                'name' => 'category.list',
                'guard_name' => 'category',
            ],
            [
                'name' => 'category.add',
                'guard_name' => 'category',
            ],
            [
                'name' => 'category.edit',
                'guard_name' => 'category',
            ],
            [
                'name' => 'category.delete',
                'guard_name' => 'category',
            ],

            // Product
            [
                'name' => 'product.menu',
                'guard_name' => 'product',
            ],
            [
                'name' => 'product.list',
                'guard_name' => 'product',
            ],
            [
                'name' => 'product.add',
                'guard_name' => 'product',
            ],
            [
                'name' => 'product.edit',
                'guard_name' => 'product',
            ],
            [
                'name' => 'product.delete',
                'guard_name' => 'product',
            ],

            // Slider
            [
                'name' => 'slider.menu',
                'guard_name' => 'slider',
            ],
            [
                'name' => 'slider.list',
                'guard_name' => 'slider',
            ],
            [
                'name' => 'slider.add',
                'guard_name' => 'slider',
            ],
            [
                'name' => 'slider.edit',
                'guard_name' => 'slider',
            ],
            [
                'name' => 'slider.delete',
                'guard_name' => 'slider',
            ],

            // Banner
            [
                'name' => 'banner.menu',
                'guard_name' => 'banner',
            ],
            [
                'name' => 'banner.list',
                'guard_name' => 'banner',
            ],
            [
                'name' => 'banner.add',
                'guard_name' => 'banner',
            ],
            [
                'name' => 'banner.edit',
                'guard_name' => 'banner',
            ],
            [
                'name' => 'banner.delete',
                'guard_name' => 'banner',
            ],

            // Coupon
            [
                'name' => 'coupon.menu',
                'guard_name' => 'coupon',
            ],
            [
                'name' => 'coupon.list',
                'guard_name' => 'coupon',
            ],
            [
                'name' => 'coupon.add',
                'guard_name' => 'coupon',
            ],
            [
                'name' => 'coupon.edit',
                'guard_name' => 'coupon',
            ],
            [
                'name' => 'coupon.delete',
                'guard_name' => 'coupon',
            ],

            // Vendor
            [
                'name' => 'vendor.menu',
                'guard_name' => 'vendor',
            ],

            // Order
            [
                'name' => 'order.menu',
                'guard_name' => 'order',
            ],
            [
                'name' => 'order.list',
                'guard_name' => 'order',
            ],

            // Return
            [
                'name' => 'return.order.menu',
                'guard_name' => 'return',
            ],

            // User
            [
                'name' => 'user.management.menu',
                'guard_name' => 'user',
            ],

            // Review
            [
                'name' => 'review.menu',
                'guard_name' => 'review',
            ],

            // Blog
            [
                'name' => 'blog.menu',
                'guard_name' => 'blog',
            ],

            // Setting
            [
                'name' => 'site.menu',
                'guard_name' => 'setting',
            ],

            // Role
            [
                'name' => 'role.permission.menu',
                'guard_name' => 'role',
            ],

            // Admin
            [
                'name' => 'admin.user.menu',
                'guard_name' => 'admin',
            ],

            // Stock
            [
                'name' => 'stock.menu',
                'guard_name' => 'stock',
            ],

            // Report
            [
                'name' => 'report.menu',
                'guard_name' => 'report',
            ],
        ]);
    }
}
