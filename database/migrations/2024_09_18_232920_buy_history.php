<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up(): void
    {
        Schema::create('buy_history', function(Blueprint $table){
            $table->bigInteger('id')->unsigned()->autoIncrement();
            $table->string('product_name');
            $table->string('email');
            $table->string('price');
            $table->timestamps();
        });
    }

    public function down(): void
    {
        Schema::dropIfExists('buy_history');
    }
};
