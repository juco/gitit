<?php

use Illuminate\Database\Migrations\Migration;

class CreateRepositoryTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('repository', function($table) {
			$table->increments('id');
			$table->string('name');
			$table->text('description');
			$table->integer('owner_id');
			$table->string('path');
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
		Schema::drop('repository');
	}

}