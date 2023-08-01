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
        Schema::create('countries_translations', function (Blueprint $table) {
            $table->id();
            $table->string('code',2);
            $table->string('name',100);
            $table->string('tags',255)->nullable();
            $table->string('lang',10);
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('countries_translations');
    }
};
