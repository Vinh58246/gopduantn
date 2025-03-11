<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up()
    {
        Schema::create('coupons', function (Blueprint $table) {
            $table->id(); // ID tự động tăng
            $table->string('coupon_name', 255); // Tên mã giảm giá
            $table->integer('coupon_discount'); // Giá trị giảm giá
            $table->string('coupon_validity', 255); // Thời hạn sử dụng
            $table->integer('status')->default(1); // Trạng thái (1: Hoạt động, 0: Hết hạn)
            $table->timestamps(); // created_at & updated_at
        });
    }


    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('coupons');
    }
};
