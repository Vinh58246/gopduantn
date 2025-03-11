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
        Schema::create('return_orders', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('order_id'); // Liên kết tới bảng orders
            $table->string('reason'); // Lý do trả lại
            $table->string('status')->default('pending'); // Trạng thái xử lý
            $table->text('note')->nullable(); // Ghi chú thêm
            $table->timestamps();
    
            $table->foreign('order_id')->references('id')->on('orders')->onDelete('cascade');
        });
    }
    

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('return_orders');
    }
};
