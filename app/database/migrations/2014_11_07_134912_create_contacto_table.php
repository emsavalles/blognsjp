<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateContactoTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('contactos',function($table){
            $table->increments('id');
            $table->string('nombre');
            $table->string('email');
            $table->string('telefono');
            $table->string('asunto');
            $table->text('mensaje');
                        
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
		Schema::drop('contactos');
	}

}
