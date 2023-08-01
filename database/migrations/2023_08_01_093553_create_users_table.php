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
        Schema::create('users', function (Blueprint $table) {
            $table->id();
            $table->integer('referred_by')->nullable();
            $table->string('provider_id', 50)->nullable();
            $table->integer('is_entity')->default(0);
            $table->string('user_type', 20)->default('customer');
            $table->string('name', 191);
            $table->string('last_name', 255)->nullable();
            $table->string('email', 191)->nullable()->index();
            $table->timestamp('email_verified_at')->nullable();
            $table->timestamp('phone_verified_at')->nullable();
            $table->text('verification_code')->nullable();
            $table->string('verification_phone_code', 20)->nullable();
            $table->timestamp('phone_verified_expired')->nullable();
            $table->text('new_email_verification_code')->nullable();
            $table->string('password', 191)->nullable();
            $table->string('remember_token', 100)->nullable();
            $table->string('device_token', 255)->nullable();
            $table->string('avatar', 256)->nullable();
            $table->string('avatar_original', 256)->nullable();
            $table->string('address', 300)->nullable();
            $table->string('country', 30)->nullable();
            $table->string('state', 30)->nullable();
            $table->string('city', 30)->nullable();
            $table->string('postal_code', 20)->nullable();
            $table->string('country_code', 20)->nullable();
            $table->string('phone', 20)->nullable();
            $table->double('balance', 20, 2)->default(0.00);
            $table->tinyInteger('banned')->default(0);
            $table->string('referral_code', 255)->nullable();
            $table->integer('customer_package_id')->nullable();
            $table->integer('remaining_uploads')->default(0);
            $table->tinyInteger('signed_declaration')->default(0);
            $table->integer('open_form_verify')->default(0);
            $table->string('lang', 2)->default('sa');
            $table->timestamp('deleted_at')->nullable();
            $table->timestamps();

            $table->foreign('customer_package_id')->references('id')->on('customer_packages')->onDelete('cascade');

        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('users');
    }
};
