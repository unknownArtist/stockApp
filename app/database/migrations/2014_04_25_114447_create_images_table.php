<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateImagesTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('images', function($table){

			$table->increments('id');
			$table->string('image_name',150);
            $table->string('slug',200);
			$table->text('description');
			$table->string('image_type',50);
			$table->integer('user_id')->unsigned();
			// $table->integer('category_id')->unsigned()->nullable();;
			// $table->integer('image_tag_id')->unsigned()->nullable();
			// $table->integer('people_attribute_id')->unsigned()->nullable();
			// $table->integer('editorial_attribute_id')->unsigned()->nullable();
			// $table->integer('color_attribute_id')->unsigned()->nullable();
			$table->string('orientation',50)->nullable();
			$table->integer('height')->nullable();
			$table->integer('width')->nullable();
			$table->integer('image_size')->nullable();
            $table->string('color',50);
            $table->boolean('editorial')->default(0);
			$table->integer('downloaded')->nullable();
			$table->timestamps();
			

			$table->index('user_id');
			// $table->index('category_id');
			// $table->index('image_tag_id');
			// $table->index('people_attribute_id');
			// $table->index('editorial_attribute_id');
			// $table->index('download_id');
			// $table->index('view_id');
			// $table->index('color_attribute_id');

		});
	}

	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::drop('images');
	}

}
