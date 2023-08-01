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
        Schema::create('banner_translations', function (Blueprint $table) {
            $table->id();
            $table->string('banner')->nullable();
            $table->string('banner_responsive')->nullable();
            $table->string('name')->nullable();
            $table->string('content')->nullable();
            $table->string('link')->nullable();
            $table->string('lang');
            $table->unsignedBigInteger('banner_id');
            $table->foreign('banner_id')->references('id')->on('banners')->onDelete('cascade');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('banner_translations');
    }
};
