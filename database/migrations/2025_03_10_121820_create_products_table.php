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
            $table->string('product_name');
            $table->string('product_slug');
            $table->string('product_code');
            $table->integer('product_qty');
            $table->string('product_tags')->nullable();
            $table->decimal('selling_price', 10, 2);
            $table->decimal('discount_price', 10, 2)->default(NULL);
            $table->text('short_descp');
            $table->text('long_descp');
            $table->string('product_thumbnail');
            $table->integer('vendor_id')->default(NULL);
            $table->tinyInteger('status')->default(0);
            $table->foreignId('brand_id')->nullable()->constrained('brands')->onDelete('cascade');
            $table->foreignId('category_id')->constrained('categories')->onDelete('cascade');
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
