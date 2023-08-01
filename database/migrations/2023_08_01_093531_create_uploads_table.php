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
        Schema::create('uploads', function (Blueprint $table) {
            $table->id();
            $table->id();
            $table->string('file_original_name', 255)->collation('utf8_unicode_ci')->nullable();
            $table->string('file_name', 255)->collation('utf8_unicode_ci')->nullable();
            $table->foreign('user_id')->references('id')->on('users')->onDelete('cascade');
            $table->integer('file_size')->nullable();
            $table->string('extension', 10)->collation('utf8_unicode_ci')->nullable();
            $table->string('type', 15)->collation('utf8_unicode_ci')->nullable();
            $table->string('external_link', 500)->collation('utf8_unicode_ci')->nullable();
            $table->timestamp('deleted_at')->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('uploads');
    }
};
