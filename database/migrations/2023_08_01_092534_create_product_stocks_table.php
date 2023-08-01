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
        Schema::create('product_stocks', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->integer('product_id');
            $table->string('variant', 255);
            $table->string('sku', 255)->nullable();
            $table->double('price', 20, 2)->default(0.00);
            $table->integer('qty')->default(0);
            $table->integer('stuck_qty')->default(0);
            $table->integer('image')->nullable();
            $table->timestamps();

            // foreign keys
            $table->foreign('product_id')->references('id')->on('products')->onDelete('cascade');

        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('product_stocks');
    }
};
