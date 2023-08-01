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
        Schema::create('order_details', function (Blueprint $table) {
            $table->increments('id');
            $table->unsignedInteger('order_id');
            $table->unsignedInteger('seller_id')->nullable();
            $table->unsignedInteger('product_id');
            $table->longText('variation')->nullable();
            $table->double('price', 20, 2)->nullable();
            $table->double('tax', 20, 2)->default(0.00);
            $table->double('shipping_cost', 20, 2)->default(0.00);
            $table->integer('quantity')->nullable();
            $table->string('payment_status', 10)->default('unpaid');
            $table->string('delivery_status', 20)->default('pending');
            $table->string('shipping_type', 255)->nullable();
            $table->unsignedInteger('pickup_point_id')->nullable();
            $table->string('product_referral_code', 255)->nullable();
            $table->timestamps();
            $table->softDeletes();


            // foreign keys
            $table->foreign('order_id')->references('id')->on('orders')->onDelete('cascade');
            $table->foreign('seller_id')->references('id')->on('users')->onDelete('set null');
            $table->foreign('product_id')->references('id')->on('products')->onDelete('cascade');
            $table->foreign('pickup_point_id')->references('id')->on('pickup_points')->onDelete('set null');

        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('order_details');
    }
};
