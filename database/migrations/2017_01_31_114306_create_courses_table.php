<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateCoursesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('courses', function (Blueprint $table) {
            $table->increments('id');
            $table->string('cou_name', 128);
            $table->integer('cou_hours', 4);
            $table->dateTime('cou_completeddate');
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
        Schema::drop('courses');
    }
}
