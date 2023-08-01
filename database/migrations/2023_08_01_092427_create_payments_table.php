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
        Schema::create('payments', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('seller_id');
            $table->double('amount', 20, 2)->default(0.00);
            $table->longText('payment_details')->nullable();
            $table->string('payment_method', 255)->nullable();
            $table->string('txn_code', 100)->nullable();
            $table->timestamps();

            // foreign key
            $table->foreign('seller_id')->references('id')->on('sellers')->onDelete('cascade');

        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('payments');
    }
};
