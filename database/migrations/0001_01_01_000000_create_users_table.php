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
            $table->bigInteger('id')->unsigned()->autoIncrement();
            $table->bigInteger('google_id')->unsigned()->nullable()->default(null);
            $table->string('first_name')->nullable()->default(null);
            $table->string('last_name')->nullable()->default(null);
            $table->string('email')->unique();
            $table->string('verification_code')->nullable()->default(null);
            $table->timestamp('email_verified_at')->nullable();
            $table->tinyInteger('email_verified');
            $table->string('password');
            $table->string('remember_token')->nullable()->default(null);
            $table->string('phone_number')->nullable()->default(null);
            $table->tinyInteger('mobile_verified')->default(0);
            $table->string('about')->nullable()->default(null);
            $table->string('balance')->default("0");
            $table->string('role')->default("user");
            $table->timestamps();
        });

        Schema::create('password_reset_tokens', function (Blueprint $table) {
            $table->string('email')->primary();
            $table->string('token');
            $table->timestamp('created_at')->nullable();
        });

        Schema::create('sessions', function (Blueprint $table) {
            $table->string('id')->primary();
            $table->foreignId('user_id')->nullable()->index();
            $table->string('ip_address', 45)->nullable();
            $table->text('user_agent')->nullable();
            $table->longText('payload');
            $table->integer('last_activity')->index();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('users');
        Schema::dropIfExists('password_reset_tokens');
        Schema::dropIfExists('sessions');
    }
};
