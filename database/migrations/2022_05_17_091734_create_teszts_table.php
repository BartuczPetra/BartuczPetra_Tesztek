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
        Schema::create('teszts', function (Blueprint $table) {
            $table->id();
            $table->foreignId('kategoriaId')->references('id')->on('kategorias');
            $table->String("kerdes");
            $table->String("v1");
            $table->String("v2");
            $table->String("v3");
            $table->String("v4");
            $table->String("helyes");
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
        Schema::dropIfExists('teszts');
    }
};
