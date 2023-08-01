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
        Schema::create('customer_package_translations', function (Blueprint $table) {
            $table->id();
            $table->string('name',50);
            $table->string('lang',100);
            $table->bigInteger('customer_package_id');
            $table->foreign('customer_package_id')->references('id')->on('customer_packages')->onDelete('cascade');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('customer_package_translations');
    }
};
