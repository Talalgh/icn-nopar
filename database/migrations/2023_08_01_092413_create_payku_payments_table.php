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
        Schema::create('payku_payments', function (Blueprint $table) {
            $table->string('transaction_id', 191)->primary();
            $table->date('start');
            $table->date('end');
            $table->string('media', 191);
            $table->string('transaction_key', 255)->nullable();
            $table->string('payment_key', 255)->nullable();
            $table->string('verification_key', 191);
            $table->string('authorization_code', 191);
            $table->unsignedBigInteger('last_4_digits')->nullable();
            $table->string('installments', 191)->nullable();
            $table->string('card_type', 191)->nullable();
            $table->string('additional_parameters', 191)->nullable();
            $table->string('currency', 191);
            $table->timestamps();

            // foreign key
            $table->foreign('transaction_id')->references('id')->on('transactions')->onDelete('cascade');

        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('payku_payments');
    }
};
