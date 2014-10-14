<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateUsersTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('user_meta', function($table){

			$table->increments('id');
			$table->integer('user_id')->unsigned();
			$table->string('first_name',100);
			$table->string('last_name',100);
			$table->string('address',250)->nullable();
			$table->string('city',150)->nullable();
			$table->integer('zip')->nullable();
			$table->string('state',100)->nullable();
			$table->integer('phone')->nullable();
			$table->string('website',150)->nullable();
			$table->string('gravitar',100)->nullable();
			$table->text('info')->nullable();
			$table->integer('payment_gateway_id')->unsigned()->nullable();
			$table->string('facebook',150)->nullable();
			$table->string('google_plus',150)->nullable();
			$table->string('twitter',150)->nullable();
			$table->string('youtube',150)->nullable();
			$table->string('linked_in',150)->nullable();
			$table->string('pinterest',150)->nullable();
			$table->string('instagram',150)->nullable();
			$table->integer('account_id')->unsigned()->nullable();
			$table->integer('invoice_id')->unsigned()->nullable();
			$table->timestamps();
			$table->index('payment_gateway_id');
			$table->index('invoice_id');
			$table->index('account_id');
			$table->index('user_id');
		});
	}

	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::drop('user_meta');
	}

}
