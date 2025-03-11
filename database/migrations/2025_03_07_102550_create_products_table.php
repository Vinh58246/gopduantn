<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('products', function (Blueprint $table) {
            $table->id();
            $table->foreignId('brand_id')->constrained('brands')->onDelete('restrict');
            $table->foreignId('category_id')->constrained('categories')->onDelete('restrict');
            $table->foreignId('sub_category_id')->constrained('categories')->onDelete('restrict');
            $table->string('product_name',255);
            $table->string('product_slug',255);
            $table->string('product_code',255);
            $table->integer('product_qty');
            $table->string('product_tags',255);
            $table->decimal('selling_price', 10, 2);
            $table->decimal('discount_price', 10, 2)->nullable();
            $table->text('short_descp');
            $table->text('long_descp',255);
            $table->string('product_thumnail',255);
            $table->integer('vendor_id')->nullable();
            $table->tinyInteger('status')->default(0);
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('products');
    }
};
