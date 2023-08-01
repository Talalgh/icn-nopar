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
        Schema::create('shops', function (Blueprint $table) {
            $table->id();
            $table->foreign('user_id')->references('id')->on('users')->onDelete('cascade');
            $table->string('name', 200)->nullable();
            $table->string('logo', 255)->nullable();
            $table->longText('sliders')->nullable();
            $table->string('phone', 255)->nullable();
            $table->string('address', 500)->nullable();
            $table->double('rating', 3, 2)->default(0.00);
            $table->integer('num_of_reviews')->default(0);
            $table->integer('num_of_sale')->default(0);
            $table->foreign('seller_package_id')->references('id')->on('seller_packages')->onDelete('cascade');
            $table->integer('product_upload_limit')->default(0);
            $table->date('package_invalid_at')->nullable();
            $table->integer('verification_status')->default(0);
            $table->longText('verification_info')->nullable();
            $table->integer('cash_on_delivery_status')->default(0);
            $table->double('admin_to_pay', 20, 2)->default(0.00);
            $table->string('facebook', 255)->nullable();
            $table->string('instagram', 255)->nullable();
            $table->string('google', 255)->nullable();
            $table->string('twitter', 255)->nullable();
            $table->string('youtube', 255)->nullable();
            $table->string('slug', 255)->nullable();
            $table->string('meta_title', 255)->nullable();
            $table->text('meta_description')->nullable();
            $table->text('pick_up_point_id')->nullable();
            $table->double('shipping_cost', 20, 2)->default(0.00);
            $table->float('delivery_pickup_latitude')->nullable();
            $table->float('delivery_pickup_longitude')->nullable();
            $table->string('bank_name', 255)->nullable();
            $table->string('bank_acc_name', 200)->nullable();
            $table->string('bank_acc_no', 50)->nullable();
            $table->integer('bank_routing_no')->nullable();
            $table->integer('bank_payment_status')->default(0);
            $table->string('bank_iban', 50)->nullable();
            $table->string('bank_bic', 50)->nullable();
            $table->string('card_name', 50)->nullable();
            $table->string('card_number', 50)->nullable();
            $table->string('card_expiry', 50)->nullable();
            $table->string('video_provider', 20)->nullable();
            $table->string('video_link', 100)->nullable();
            $table->string('country_code', 20)->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('shops');
    }
};
