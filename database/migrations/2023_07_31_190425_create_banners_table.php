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
        Schema::create('banners', function (Blueprint $table) {
            $table->id();
            $table->string('added_by')->default('admin');
            $table->integer('position')->nullable();
            $table->integer('order_level');
            $table->tinyInteger('approved')->default(1);
            $table->integer('flash_deal')->nullable();
            $table->tinyInteger('home_banner')->default(0);
            $table->tinyInteger('filter_banner')->default(0);
            $table->integer('place')->nullable();
            $table->integer('all_categories')->default(0); // Set the default value to 0
            $table->unsignedBigInteger('user_id')->nullable();
            $table->foreign('user_id')->references('id')->on('users')->onDelete('cascade');
            $table->unsignedBigInteger('category_id')->nullable();
            $table->foreign('category_id')->references('id')->on('categories')->onDelete('cascade');

            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('banners');
    }
};
