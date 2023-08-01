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
        Schema::create('affiliate_stats', function (Blueprint $table) {
            $table->id();
            $table->integer('no_of_click')->default(0);
            $table->integer('no_of_order_item')->default(0);
            $table->integer('no_of_deliverede')->default(0);
            $table->integer('no_of_cancel')->default(0);
            $table->unsignedBigInteger('affiliate_user_id');
            $table->foreign('affiliate_user_id')->references('user_id')->on('affiliate_users')->onDelete('cascade');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('affiliate_stats');
    }
};
