<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration {
    public function up()
    {
        Schema::create('orders', function (Blueprint $table) {
            $table->id();
            $table->foreignId('user_id')->constrained('users')->onDelete('cascade'); // Liên kết với bảng users
            $table->foreignId('coupon_id')->nullable()->constrained('coupons')->onDelete('set null'); // Mã giảm giá
            $table->string('name');
            $table->string('email');
            $table->string('phone');
            $table->string('address')->nullable();
            $table->text('notes')->nullable();
            $table->string('payment_method')->nullable();
            $table->string('transaction_id')->nullable();
            $table->double('amount');
            $table->double('discount_amount')->nullable();
            $table->string('order_number')->nullable();
            $table->string('invoice_no');
            $table->enum('status', ['pending', 'confirmed', 'processing', 'picked', 'shipped', 'delivered'])->default('pending');
            $table->date('date');
            $table->text('return_reason')->nullable();
            $table->boolean('return_order')->default(0);
            $table->timestamps();
        });
    }

    public function down()
    {
        Schema::dropIfExists('orders');
    }
};


