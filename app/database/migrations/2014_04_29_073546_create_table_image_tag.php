<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateTableImageTag extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('image_tag', function($table){

			$table->increments('id');
			$table->integer('image_id')->unsigned();
			$table->integer('tag_id')->unsigned();

			$table->index('image_id');
			$table->index('tag_id');
		});
	}

	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::drop('image_tag');	
	}

}
