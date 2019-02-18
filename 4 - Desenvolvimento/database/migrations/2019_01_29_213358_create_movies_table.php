<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateMoviesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('movies', function (Blueprint $table) {
            $table->increments('id');
            $table->timestamps();
            $table->string('original_title')->nullable();
            $table->string('pt_br_tittle')->nullable();
            $table->text('sinopse')->nullable();
            $table->string('duration')->nullable();
            $table->integer('year')->nullable();
            $table->string('countries')->nullable();
            $table->string('director')->nullable();
            $table->text('cast')->nullable();
            $table->tinyInteger('status')->default('1');
            });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::drop('movies');
    }
}
