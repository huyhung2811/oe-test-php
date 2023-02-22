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
            $table->string('name');
            $table->float('price');
            $table->string('toppings');
        });

        Schema::create('stores', function (Blueprint $table) {
            $table->id();
            $table->string('name');
        });

        Schema::create('store_products', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('shop');
            $table->unsignedBigInteger('product');
            $table->foreign('shop')->references('id')->on('stores');
            $table->foreign('product')->references('id')->on('products');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('products');
        Schema::dropIfExists('stores');
        Schema::dropIfExists('store_products');
    }
};
