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
            $table->id('product_id');
            $table->string('product_name');
            $table->string('product_brand');
            $table->string('product_category');
            $table->string('product_subcategory')->nullable();
            $table->string('product_supplier');
            $table->decimal('product_cmup', 8, 2);
            $table->decimal('product_price', 8, 2);
            $table->string('product_location')->nullable();
            $table->string('product_ean_code')->nullable();
            $table->integer('product_stock_1');
            $table->string('product_image_link')->nullable();
            $table->string('product_return_condition')->nullable();
            $table->decimal('product_discount', 5, 2)->default(0);
            $table->integer('product_points')->default(0);
            $table->boolean('product_in_partnership')->default(false);
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
