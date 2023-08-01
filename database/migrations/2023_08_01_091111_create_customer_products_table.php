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
        Schema::create('customer_products', function (Blueprint $table) {
            $table->id();
            $table->string('name',255);
            $table->integer('status');
            $table->integer('published');
            $table->string('added_by',50);
            $table->integer('subcategory_id');
            $table->integer('subsubcategory_id');
            $table->string('photos',255);
            $table->string('thumbnail_img',150);
            $table->string('conditon',50);
            $table->text('location');
            $table->string('video_provider',100);
            $table->string('video_link',200);
            $table->string('unit',200);
            $table->string('tags',255);
            $table->mediumText('description');
            $table->double('unit_price',20,2);
            $table->string('meta_title',200);
            $table->string('meta_description',500);
            $table->string('meta_img',150);
            $table->string('pdf',200);
            $table->string('slug',200);
            $table->unsignedBigInteger('brand_id');
            $table->foreign('brand_id')->references('id')->on('brands')->onDelete('cascade');
            $table->unsignedBigInteger('category_id');
            $table->foreign('category_id')->references('id')->on('categories')->onDelete('cascade');
            $table->unsignedBigInteger('user_id');
            $table->foreign('user_id')->references('id')->on('users')->onDelete('cascade');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('customer_products');
    }
};
