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
        Schema::create('used_uploads', function (Blueprint $table) {
            $table->id();
            $table->integer('id_uploads')->unsigned();
            $table->string('entities_type', 100)->collation('utf8mb4_general_ci');
            $table->integer('entities_id');
            $table->timestamp('created_at')->default(DB::raw('CURRENT_TIMESTAMP'));
            $table->string('file_type', 70)->collation('utf8mb4_general_ci');

            $table->foreign('id_uploads')->references('id')->on('uploads')->onDelete('cascade');

            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('used_uploads');
    }
};
