<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateMoviesBookingsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('MoviesBookings', function (Blueprint $table) {
            $table->increments('id');
            $table->timestamps();
            $table->integer('movie_id')->unsigned();
            $table->integer('booking_id')->unsigned();
            });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::drop('MoviesBookings');
    }
}
