<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateCheckPaymentsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('check_payments', function (Blueprint $table) {
            $table->increments('id');
            $table->timestamps();
            $table->integer('payment_id')->unsigned();
            $table->integer('bank')->nullable();
            $table->integer('agency')->nullable();
            $table->integer('account_number')->nullable();
            $table->integer('check_number')->nullable();
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
        Schema::drop('check_payments');
    }
}
