<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateGenresMoviesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('GenresMovies', function (Blueprint $table) {
            $table->increments('id');
            $table->timestamps();
            $table->integer('genre_id')->unsigned();
            $table->integer('movie_id')->unsigned();
            });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::drop('GenresMovies');
    }
}
