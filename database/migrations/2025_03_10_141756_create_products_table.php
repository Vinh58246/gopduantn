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
            $table->bigIncrements('id');
            $table->unsignedInteger('brand_id')->notNullable();
            $table->unsignedInteger('category_id')->notNullable();
            $table->unsignedInteger('subcategory_id')->notNullable();
            $table->string('product_name', 255)->notNullable();
            $table->string('product_slug', 255)->notNullable();
            $table->string('product_code', 255)->notNullable();
            $table->integer('product_qty')->notNullable();
            $table->decimal('selling_price', 10, 2)->notNullable();
            $table->decimal('discount_price', 10, 2)->nullable();
            $table->text('short_descp')->notNullable();
            $table->text('long_descp')->notNullable();
            $table->string('product_thumbnail', 255)->notNullable();
            $table->unsignedInteger('vendor_id')->nullable();
            $table->tinyInteger('status')->default(0)->notNullable();
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