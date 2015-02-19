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
			$table->foreign('module_id')->references('id')->on('modules')->onDelete('cascade');
			$table->integer('prev_id')->unsigned()->nullable();
			$table->foreign('prev_id')->references('id')->on('diapos')->onDelete('cascade');
			$table->integer('next_id')->unsigned()->nullable();
			$table->foreign('next_id')->references('id')->on('diapos')->onDelete('cascade');
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
