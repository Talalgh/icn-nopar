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
        Schema::create('transactions', function (Blueprint $table) {
            $table->id();
            $table->foreign('user_id')->references('id')->on('users')->onDelete('cascade');
            $table->string('gateway', 255)->collation('latin1_swedish_ci')->nullable();
            $table->string('payment_type', 255)->collation('latin1_swedish_ci')->nullable();
            $table->text('additional_content')->collation('latin1_swedish_ci')->nullable();
            $table->string('mpesa_request', 255)->collation('latin1_swedish_ci')->nullable();
            $table->string('mpesa_receipt', 255)->collation('latin1_swedish_ci')->nullable();
            $table->integer('status')->default(0);
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('transactions');
    }
};
