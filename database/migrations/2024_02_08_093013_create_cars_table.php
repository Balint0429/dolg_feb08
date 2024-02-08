<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up()
    {
        Schema::create('cars', function (Blueprint $table) {
            $table->id();
            $table->string('name', 20);
            $table->integer('amount');
            $table->unsignedBigInteger('type_id');
            $table->unsignedBigInteger('color_id');
            $table->foreign('type_id')->references('id')->on('types');
            $table->foreign('color_id')->references('id')->on('colors');
            $table->timestamps();
        });
    }
    public function down(): void
    {
        Schema::dropIfExists('cars');
    }
};
