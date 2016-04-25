<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateVerifikasilabklinikumummadyasTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('verifikasilabklinikumummadyas', function(Blueprint $table)
		{
			$table->increments('id');
			$table->string('kelengkapan');
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
		Schema::drop('verifikasilabklinikumummadyas');
	}

}
