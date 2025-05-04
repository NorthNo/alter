<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration {

    public function up(): void
    {
        Schema::create('contacts', function (Blueprint $table) {
            $table->bigInteger('id')->unsigned()->autoIncrement();
            $table->bigInteger('user_id')->nullable();
            $table->string('name')->default('İsimsiz Kullanıcı');
            $table->string('email');
            $table->string('title')->default('Başlıksız İleti');
            $table->string('content');
            $table->string('admin_response');
            $table->timestamps();
        });
    }

    public function down(): void
    {
        Schema::dropIfExists('contacts');
    }
};
