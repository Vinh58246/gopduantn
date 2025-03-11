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
        Schema::create('variant_name', function (Blueprint $table) {
            $table->id();
            $table->foreignId('idproduct')->constrained('products')->onDelete('cascade');
            $table->string('name',255);
            $table->timestamps();
        });
        Schema::create('variant_attribute', function (Blueprint $table) {
            $table->id();
            $table->foreignId('idvariantname')->constrained('variant_name')->onDelete('cascade');
            $table->string('value',255);
            $table->timestamps();
        });
        Schema::create('infor_option', function (Blueprint $table) {
            $table->id();
            $table->foreignId('idproduct')->constrained('products')->onDelete('cascade');
            $table->string('code',255);
            $table->double('price',8,2)->nullable();
            $table->integer('quantity');
            $table->timestamps();
        });
        Schema::create('variant_option', function (Blueprint $table) {
            $table->id();
            $table->foreignId('varant_attribute_id')->constrained('variant_attribute')->onDelete('cascade');
            $table->foreignId('infor_option_id')->constrained('infor_option')->onDelete('cascade');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('variant_name');
        Schema::dropIfExists('variant_attribute');
        Schema::dropIfExists('infor_option');
        Schema::dropIfExists('variant_option');
    }
};
