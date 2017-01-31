<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateExperiencesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('experiences', function (Blueprint $table) {
            $table->increments('id');
            $table->primary('id');
            $table->string('exp_office', 128);
            $table->string('exp_occupationarea', 256);
            $table->dateTime('exp_initialdate');
            $table->dateTime('exp_enddate');
            $table->string('exp_certificate');
            $table->integer('emploeey_id')->unsigned();
            $table->foreign('emploeey_id')->references('id')->on('emploeeys');
            $table->softDeletes();
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
        Schema::drop('experiences');
    }
}
