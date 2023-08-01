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
        Schema::create('orders', function (Blueprint $table) {
            $table->increments('id');
            $table->unsignedInteger('combined_order_id')->nullable();
            $table->unsignedInteger('user_id')->nullable();
            $table->unsignedInteger('guest_id')->nullable();
            $table->unsignedInteger('seller_id')->nullable();
            $table->longText('shipping_address')->nullable();
            $table->string('additional_info', 255)->nullable();
            $table->string('shipping_type', 50);
            $table->unsignedInteger('pickup_point_id')->default(0);
            $table->string('delivery_status', 20)->default('pending');
            $table->string('payment_type', 20)->nullable();
            $table->integer('manual_payment')->default(0);
            $table->text('manual_payment_data')->nullable();
            $table->string('payment_status', 20)->default('unpaid');
            $table->longText('payment_details')->nullable();
            $table->double('grand_total', 20, 2)->nullable();
            $table->double('coupon_discount', 20, 2)->default(0.00);
            $table->mediumText('code')->nullable();
            $table->string('tracking_code', 255)->nullable();
            $table->integer('date');
            $table->integer('viewed')->default(0);
            $table->integer('delivery_viewed')->default(1);
            $table->integer('payment_status_viewed')->default(1);
            $table->integer('commission_calculated')->default(0);
            $table->tinyInteger('show_status')->default(0);
            $table->timestamps();
            $table->softDeletes();

            // foreign keys
            $table->foreign('combined_order_id')->references('id')->on('combined_orders')->onDelete('set null');
            $table->foreign('user_id')->references('id')->on('users')->onDelete('set null');
            $table->foreign('guest_id')->references('id')->on('users')->onDelete('set null');
            $table->foreign('seller_id')->references('id')->on('users')->onDelete('set null');
            $table->foreign('pickup_point_id')->references('id')->on('pickup_points')->onDelete('set default');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('orders');
    }
};
