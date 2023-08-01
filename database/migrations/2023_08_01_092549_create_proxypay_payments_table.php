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
        Schema::create('proxypay_payments', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('payment_type', 20);
            $table->string('reference_id', 20);
            $table->bigInteger('order_id')->nullable();
            $table->bigInteger('package_id')->nullable();
            $table->bigInteger('user_id');
            $table->double('amount', 25, 2)->default(0.00);
            $table->timestamps();

            // foreign keys
            $table->foreign('order_id')->references('id')->on('orders')->onDelete('cascade');
            $table->foreign('package_id')->references('id')->on('packages')->onDelete('cascade');
            $table->foreign('user_id')->references('id')->on('users')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('proxypay_payments');
    }
};
