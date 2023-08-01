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
        Schema::create('seller_package_payments', function (Blueprint $table) {
            $table->id();
            $table->foreign('user_id')->references('id')->on('users')->onDelete('cascade');
            $table->foreign('seller_package_id')->references('id')->on('seller_packages')->onDelete('cascade');
            $table->string('payment_method', 255)->collation('utf8_unicode_ci');
            $table->longText('payment_details')->collation('utf8_unicode_ci');
            $table->integer('approval');
            $table->integer('offline_payment')->comment('1=offline payment 2=online payment');
            $table->string('receipt', 150)->collation('utf8_unicode_ci');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('seller_package_payments');
    }
};
