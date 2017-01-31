<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateDegreesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('degrees', function (Blueprint $table) {
            $table->increments('id');
            $table->primary('id');
            $table->string('deg_level', 128);
            $table->integer('deg_nlevel', 1);
            $table->string('cou_institution', 128);
            $table->integer('cou_hours', 10);
            $table->integer('cou_completedyear', 4);
            $table->string('cou_certificate');
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
        Schema::drop('degrees');
    }
}
