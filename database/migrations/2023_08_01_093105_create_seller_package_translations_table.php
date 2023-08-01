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
        Schema::create('seller_package_translations', function (Blueprint $table) {
            $table->id();
            $table->foreign('seller_package_id')->references('id')->on('seller_packages')->onDelete('cascade');
            $table->string('name', 50)->collation('utf8_unicode_ci');
            $table->string('lang', 100)->collation('utf8_unicode_ci');

            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('seller_package_translations');
    }
};
