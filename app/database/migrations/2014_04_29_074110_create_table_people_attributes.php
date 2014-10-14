<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateTablePeopleAttributes extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('people_attributes', function($table){

			$table->increments('id');
			$table->integer('image_id')->unsigned();
			$table->string('ethnicity',100);
			$table->mediumInteger('number_of_people');
			$table->string('gender',100);
			$table->string('age',100);
			$table->text('people_attribute');

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
		Schema::drop('people_attributes');
	}

}
