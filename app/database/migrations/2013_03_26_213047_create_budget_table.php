<?php

use Illuminate\Database\Migrations\Migration;
/**
 *
 * Monujo
 *
 * @author Alessandro Arnodo
 *
 *
 */

class CreateBudgetTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('budget', function($table)
		{
			$table->increments('id');
		});
	}

	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::drop('budget');
	}

}