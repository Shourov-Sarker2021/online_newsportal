<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('namaz', function (Blueprint $table) {
            $table->id();
            $table->string('Fajor')->nullable();
            $table->string('Johor')->nullable();
            $table->string('Asor')->nullable();
            $table->string('Magrib')->nullable();
            $table->string('Esar')->nullable();
            $table->string('Jummah')->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('namaz');
    }
};
