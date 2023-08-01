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
        Schema::create('payment_page_translations', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('payment_page_id')->nullable();
            $table->string('image', 255)->nullable();
            $table->string('image_responsive', 255)->nullable();
            $table->string('title', 255)->nullable();
            $table->longText('content')->nullable();
            $table->string('link', 255)->nullable();
            $table->string('lang', 100);
            $table->timestamps();


            // foreign key
            $table->foreign('payment_page_id')->references('id')->on('payment_pages')->onDelete('set null');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('payment_page_translations');
    }
};
