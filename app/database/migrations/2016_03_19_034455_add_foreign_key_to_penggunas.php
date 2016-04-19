<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class AddForeignKeyToPenggunas extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::table('penggunas', function(Blueprint $table)
		{
			$table->foreign('perijinan_id')->references('id')->on('perijinans')
				->onDelete('restrict')
				->onUpdate('cascade');
		});
	}


	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::table('penggunas', function(Blueprint $table)
		{
			$table->dropForeign('penggunas_perijinan_id_foreign');
		});
	}

}
