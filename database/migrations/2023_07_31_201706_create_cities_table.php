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
        Schema::create('cities', function (Blueprint $table) {
            $table->id();
            $table->string('name');
            $table->double('cost')->default(0.00);
            $table->integer('status')->default(1);
            $table->unsignedBigInteger('state_id')->default(1);
            $table->foreign('state_id')->references('id')->on('states')->onDelete('cascade');
            $table->timestamps();
            $table->softDeletes()->nullable(); // Add the softDeletes method to add 'deleted_at' column
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('cities');
    }
};
