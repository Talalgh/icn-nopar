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
        Schema::create('payku_transactions', function (Blueprint $table) {
            $table->string('id', 191);
            $table->string('status', 191)->nullable();
            $table->string('order', 191)->nullable();
            $table->string('email', 191)->nullable();
            $table->string('subject', 191)->nullable();
            $table->text('url')->nullable();
            $table->unsignedBigInteger('amount')->nullable();
            $table->datetime('notified_at')->nullable();
            $table->timestamps();


            // foreign key
            $table->foreign('order')->references('id')->on('orders')->onDelete('cascade');

        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('payku_transactions');
    }
};
