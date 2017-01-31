<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateSpecializationsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('specializations', function (Blueprint $table) {
            $table->increments('id');
            $table->primary('id');
            $table->string('deg_level', 128);
            $table->integer('deg_nlevel', 1);
            $table->string('spec_institution', 256);
            $table->string('spec_name', 256);
            $table->string('spec_city', 64);
            $table->string('spec_state', 64);
            $table->integer('spec_completedyear', 4);
            $table->string('spec_certificate');
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
        Schema::drop('specializations');
    }
}
