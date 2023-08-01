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
        Schema::create('customer_product_translations', function (Blueprint $table) {
            $table->id();
            $table->string('name',200)->nullable();
            $table->string('unit',20)->nullable();
            $table->longText('description')->nullable();
            $table->string('lang',100);
            $table->unsignedBigInteger('customer_product_id');
            $table->foreign('customer_product_id')->references('id')->on('customer_products')->onDelete('cascade');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('customer_product_translations');
    }
};
