<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateCardPaymentsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('card_payments', function (Blueprint $table) {
            $table->increments('id');
            $table->timestamps();
            $table->integer('payment_id')->unsigned();
            $table->integer('company')->nullable();
            $table->integer('number')->nullable();
            $table->foreign('payment_id')->references('id')->on('payments');
            });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::drop('card_payments');
    }
}
