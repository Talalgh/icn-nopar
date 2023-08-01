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
        Schema::create('categories', function (Blueprint $table) {
            $table->id();
            $table->string('parent_star')->nullable();
            $table->integer('level')->default(0);
            $table->string('name');
            $table->integer('parent_id')->nullable()->default(0);
            $table->integer('order_level')->default(0);
            $table->double('commision_rate')->default(0.00);
            $table->string('banner')->nullable();
            $table->string('icon')->nullable();
            $table->integer('featured')->default(0);
            $table->integer('top')->default(0);
            $table->integer('digital')->default(0);
            $table->string('slug')->nullable();
            $table->string('meta_title')->nullable();
            $table->text('meta_description')->nullable();
            $table->integer('published')->default(1);
            $table->string('bg_icon')->nullable();
            $table->string('bg_slider')->nullable();
            $table->string('color_banner')->nullable();
            $table->integer('show_home')->nullable()->default(0);
            $table->integer('order_home')->nullable()->default(0);
            $table->integer('order_category')->nullable()->default(0);
            $table->integer('show_category')->nullable()->default(0);
            $table->integer('show_subcategory')->nullable()->default(0);
            $table->integer('order_subcategory')->nullable()->default(0);
            $table->integer('show_shop')->nullable();
            $table->integer('order_shop')->nullable();
            $table->integer('shop_used')->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('categories');
    }
};
