<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up(): void
    {
        Schema::create('product', function (Blueprint $table) {
            $table->id();
            $table->string('name');
            $table->string('content');
            $table->string('image_path');
            $table->string('creator');
            $table->string('sales_number');
            $table->longText('features');
            $table->string('price');
            $table->tinyInteger('active')->default(0);
            $table->string('last_update');
            $table->string('share_date');
        });
    }

    public function down(): void
    {
        Schema::dropIfExists('product');
    }
};
