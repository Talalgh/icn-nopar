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
        Schema::create('combined_orders', function (Blueprint $table) {
            $table->id();
            $table->text('shipping_address')->nullable();
            $table->double('grand_total', 20, 2)->default(0.00);
            $table->mediumText('code')->unique();
            $table->string('password',60);
            $table->string('shipping_type',60);
            $table->integer('date');
            $table->integer('delivery_status')->default('pending');
            $table->integer('payment_status')->default('unpaid');
            $table->integer('payment_type');
            $table->integer('cash_on_delivery_code')->nullable();
            $table->tinyInteger('show_status');
            $table->longText('webhook')->nullable();
            $table->unsignedBigInteger('user_id');
            $table->foreign('user_id')->references('id')->on('users')->onDelete('cascade');
            $table->timestamps();
            $table->softDeletes();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('combined_orders');
    }
};
