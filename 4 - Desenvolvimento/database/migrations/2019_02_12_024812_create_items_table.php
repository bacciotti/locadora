<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateItemsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('items', function (Blueprint $table) {
            $table->increments('id');
            $table->timestamps();
            $table->date('date_acquisition')->nullable();
            $table->string('serial_number')->nullable();
            $table->integer('media_type_id')->unsigned();
            $table->integer('movie_id')->unsigned();
            $table->integer('distributor_id')->unsigned();
            $table->foreign('media_type_id')->references('id')->on('media_types')->onDelete('cascade')->onUpdate('cascade');
            $table->foreign('movie_id')->references('id')->on('movies')->onDelete('cascade')->onUpdate('cascade');
            $table->foreign('distributor_id')->references('id')->on('distributors')->onDelete('cascade')->onUpdate('cascade');
            });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::drop('items');
    }
}
