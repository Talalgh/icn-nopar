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
        Schema::create('tickets', function (Blueprint $table) {
            $table->id();
            $table->integer('code');
            $table->foreign('user_id')->references('id')->on('users')->onDelete('cascade');
            $table->string('subject', 255)->collation('utf8_unicode_ci');
            $table->longText('details')->collation('utf8_unicode_ci')->nullable();
            $table->longText('files')->collation('utf8_unicode_ci')->nullable();
            $table->string('status', 10)->collation('utf8_unicode_ci')->default('pending');
            $table->integer('viewed')->default(0);
            $table->integer('client_viewed')->default(0);
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('tickets');
    }
};
