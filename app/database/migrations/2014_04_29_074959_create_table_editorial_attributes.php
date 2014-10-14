<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateTableEditorialAttributes extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('editorial_attributes', function($table){

			$table->increments('id');
			$table->integer('image_id')->unsigned();
			$table->text('editorial_attribute');

			$table->index('image_id');
		});
	}

	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::drop('editorial_attributes');
	}

}
