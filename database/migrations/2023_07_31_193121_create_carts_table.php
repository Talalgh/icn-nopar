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
        Schema::create('carts', function (Blueprint $table) {
            $table->id();
            $table->text('variation')->nullable();
            $table->double('price')->default(0.00);
            $table->double('tax')->default(0.00);
            $table->double('shipping_cost')->default(0.00);
            $table->string('shipping_type');
            $table->integer('pickup_point')->nullable();
            $table->double('discount')->default(0.00);
            $table->string('product_referral_code')->nullable();
            $table->string('coupon_code')->nullable();  
            $table->tinyInteger('coupon_applied')->default(0);
            $table->integer('quantity')->default(0);
            $table->integer('owner_id')->nullable();
            $table->integer('temp_user_id')->nullable();
            $table->unsignedBigInteger('user_id')->nullable();
            $table->foreign('user_id')->references('id')->on('users')->onDelete('cascade');
            $table->unsignedBigInteger('address_id')->default(0);
            $table->foreign('address_id')->references('id')->on('addresses')->onDelete('cascade');
            $table->unsignedBigInteger('product_id')->nullable();
            $table->foreign('product_id')->references('id')->on('products')->onDelete('cascade');

            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('carts');
    }
};
