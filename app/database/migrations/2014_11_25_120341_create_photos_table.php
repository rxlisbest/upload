<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreatePhotosTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		//
		Schema::create('photos', function($table){
                      	$table->increments('pid');
			$table->string('src', 255);
			$table->integer('aid');
			$table->text('description');
 
                     	$table->string('remember_token', 100)->nullable();
                 });
	}

	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		//
	}

}
