<?php

use Illuminate\Database\Migrations\Migration;

class CreateCommitTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('commit', function($table) {
			$table->increments('id');
			$table->text('hash');
			$table->integer('repository_id');
			$table->integer('owner_id');
			$table->text('message');
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
		Schema::drop('commit');
	}

}