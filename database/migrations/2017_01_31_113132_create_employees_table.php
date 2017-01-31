<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateEmployeesTable extends Migration
{
    /**
    * Run the migrations.
    *
    * @return void
    */
    public function up()
    {
        Schema::create('employees', function (Blueprint $table) {
            $table->increments('id');
            $table->primary('id');
            $table->string('inf_name', 128);
            $table->string('inf_email', 64);
            $table->string('inf_phone', 17);
            $table->string('inf_phone2', 17);
            $table->string('inf_maritalstatus', 1);
            $table->string('add_street', 256);
            $table->string('add_number', 10);
            $table->string('add_complement', 64);
            $table->string('add_neighborhood', 64);
            $table->string('add_city', 64);
            $table->string('add_state', 64);
            $table->string('add_cep', 10);
            $table->string('pro_comments', 512);
            $table->string('curriculo_pdf');
            $table->integer('usuario_id')->unsigned();
            $table->foreign('usuario_id')->references('id')->on('usuario');
            $table->unique('id');
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
        Schema::drop('employees');
    }
}