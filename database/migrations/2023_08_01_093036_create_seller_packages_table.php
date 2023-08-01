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
        Schema::create('seller_packages', function (Blueprint $table) {
            $table->id();
            $table->string('name', 255)->collation('utf8_unicode_ci')->nullable();
            $table->double('amount', 11, 2)->default(0.00);
            $table->integer('product_upload_limit')->default(0);
            $table->string('logo', 255)->collation('utf8_unicode_ci')->nullable();
            $table->integer('duration')->default(0);
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('seller_packages');
    }
};
