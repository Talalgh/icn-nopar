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
        Schema::create('sellers', function (Blueprint $table) {
            $table->id();
            $table->foreign('user_id')->references('id')->on('users')->onDelete('cascade');
            $table->unsignedBigInteger('seller_package_id')->nullable();
            $table->integer('remaining_uploads')->default(0);
            $table->integer('remaining_digital_uploads')->default(0);
            $table->date('invalid_at')->nullable();
            $table->integer('remaining_auction_uploads')->default(0);
            $table->double('rating', 3, 2)->default(0.00);
            $table->integer('num_of_reviews')->default(0);
            $table->integer('num_of_sale')->default(0);
            $table->integer('verification_status')->default(0);
            $table->longText('verification_info')->collation('utf8_unicode_ci')->nullable();
            $table->integer('cash_on_delivery_status')->default(0);
            $table->double('admin_to_pay', 20, 2)->default(0.00);
            $table->string('bank_name', 255)->collation('utf8_unicode_ci')->nullable();
            $table->string('bank_acc_name', 200)->collation('utf8_unicode_ci')->nullable();
            $table->string('bank_acc_no', 50)->collation('utf8_unicode_ci')->nullable();
            $table->integer('bank_routing_no')->nullable();
            $table->integer('bank_payment_status')->default(0);
            $table->timestamps();

            $table->foreign('seller_package_id')->references('id')->on('seller_packages')->onDelete('cascade');

        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('sellers');
    }
};
