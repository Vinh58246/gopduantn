<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateOrdersTable extends Migration
{
    public function up()
    {
        Schema::create('orders', function (Blueprint $table) {
            $table->id();
            $table->bigInteger('user_id')->unsigned();
            $table->bigInteger('coupon_id')->unsigned()->nullable();
            $table->string('name', 255);
            $table->string('email', 255);
            $table->string('phone', 255);
            $table->string('address', 255)->nullable();
            $table->text('notes')->nullable();
            $table->string('payment_method', 255)->nullable();
            $table->string('transaction_id', 255)->nullable();
            $table->string('currency', 255);
            $table->decimal('amount', 10, 2);
            $table->decimal('discount_amount', 10, 2)->nullable();
            $table->string('order_number', 255)->nullable();
            $table->string('invoice_no', 255);
            $table->enum('status', ['pending', 'confirmed', 'processing', 'picked', 'shipped', 'delivered'])->default('pending');
            $table->date('date')->nullable();
            $table->text('return_reason')->nullable();
            $table->tinyInteger('return_order')->default(0);
            $table->timestamps();

            // Khóa ngoại
            $table->foreign('user_id')->references('id')->on('users')->onDelete('cascade');
            $table->foreign('coupon_id')->references('id')->on('coupons')->onDelete('set null');
        });
    }

    public function down()
    {
        Schema::dropIfExists('orders');
    }
}
