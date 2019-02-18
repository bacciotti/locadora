<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateDistributorsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('distributors', function (Blueprint $table) {
            $table->increments('id');
            $table->timestamps();
            $table->string('corporate_name')->nullable();
            $table->double('cnpj')->unsigned();
            $table->text('address')->nullable();
            $table->double('phone')->unsigned();
            $table->string('contact_person')->nullable();
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
        Schema::drop('distributors');
    }
}
