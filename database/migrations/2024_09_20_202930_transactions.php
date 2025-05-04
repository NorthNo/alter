<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up(): void
    {
        Schema::create('transactions', function(Blueprint $table){
            $table->bigIncrements('id')->unsigned()->autoIncrement();
            $table->string('product_name')->nullable();
            $table->enum('type', ['buy', 'sell']);
            $table->string('email');
            $table->string('price');
            $table->timestamps();
        });
    }

    public function down(): void
    {
        Schema::dropIfExists('transactions');
    }
};
