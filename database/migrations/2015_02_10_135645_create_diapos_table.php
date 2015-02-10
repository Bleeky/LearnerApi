<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateDiaposTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('diapos', function(Blueprint $table)
		{
			$table->increments('id');
			$table->text('content');
			$table->integer('module_id')->unsigned();
			$table->foreign('module_id')->references('id')->on('modules');
			$table->integer('prev_id')->unsigned();
			$table->foreign('prev_id')->references('id')->on('diapos');
			$table->integer('next_id')->unsigned();
			$table->foreign('next_id')->references('id')->on('diapos');
		});
	}

	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::drop('diapos');
	}

}
