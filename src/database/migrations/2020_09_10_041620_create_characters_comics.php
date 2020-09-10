<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateCharactersComics extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('characters_comics', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->unsignedBigInteger('characters_id');
            $table->foreign('characters_id')->references('id')->on('characters');
            $table->unsignedBigInteger('comics_id');
            $table->foreign('comics_id')->references('id')->on('comics');
            $table->timestamps();
            $table->softDeletes();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('characters_comics');
    }
}
