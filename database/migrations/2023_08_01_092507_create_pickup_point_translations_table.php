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
        Schema::create('pickup_point_translations', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->bigInteger('pickup_point_id')->unsigned();
            $table->string('name', 50);
            $table->text('address');
            $table->string('lang', 100);
            $table->timestamps();

            // foreign key
            $table->foreign('pickup_point_id')->references('id')->on('pickup_points')->onDelete('cascade');

        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('pickup_point_translations');
    }
};
