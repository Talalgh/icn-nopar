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
        Schema::create('refund_requests', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->bigInteger('user_id');
            $table->bigInteger('order_id');
            $table->bigInteger('order_detail_id');
            $table->bigInteger('seller_id');
            $table->integer('seller_approval')->default(0);
            $table->integer('admin_approval')->default(0);
            $table->double('refund_amount', 8, 2)->default(0.00);
            $table->longText('reason')->nullable();
            $table->integer('admin_seen');
            $table->integer('refund_status')->default(0);
            $table->longText('reject_reason')->nullable();
            $table->timestamps();


            // foreign keys
            $table->foreign('user_id')->references('id')->on('users')->onDelete('cascade');
            $table->foreign('order_id')->references('id')->on('orders')->onDelete('cascade');
            $table->foreign('order_detail_id')->references('id')->on('order_details')->onDelete('cascade');
            $table->foreign('seller_id')->references('id')->on('sellers')->onDelete('cascade');
            });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('refund_requests');
    }
};
