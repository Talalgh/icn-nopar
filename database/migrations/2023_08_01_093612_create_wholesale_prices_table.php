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
        Schema::create('wholesale_prices', function (Blueprint $table) {
            $table->id();
            $table->integer('product_stock_id')->unsigned();
            $table->integer('min_qty')->default(0);
            $table->integer('max_qty')->default(0);
            $table->double('price', 20, 2)->default(0.00);
            $table->timestamps();

            $table->foreign('product_stock_id')->references('id')->on('product_stocks')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('wholesale_prices');
    }
};
