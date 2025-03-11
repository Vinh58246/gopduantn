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
            $table->id(); // ID tự tăng
            $table->string('name'); // Tên của coupon
            $table->string('code')->unique(); // Mã code của coupon
            $table->integer('discount'); // Giá trị giảm giá
            $table->date('expiry_date'); // Ngày hết hạn
            $table->timestamps(); // Các cột created_at và updated_at
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
