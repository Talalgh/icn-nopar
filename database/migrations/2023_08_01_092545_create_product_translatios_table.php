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
        Schema::create('product_translatios', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->bigInteger('product_id');
            $table->string('name', 200)->nullable();
            $table->string('brand_text', 255)->nullable();
            $table->string('unit', 20)->nullable();
            $table->longText('description')->nullable();
            $table->string('return_policy', 255)->nullable();
            $table->string('warranty_policy', 255)->nullable();
            $table->string('features', 255)->nullable();
            $table->string('tags', 500)->nullable();
            $table->mediumText('meta_title')->nullable();
            $table->longText('meta_description')->nullable();
            $table->string('meta_img', 255)->nullable();
            $table->string('lang', 100);
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
        Schema::dropIfExists('product_translatios');
    }
};
