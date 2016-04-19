<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreatePenggunasTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('penggunas', function(Blueprint $table)
		{
			$table->increments('id');
			$table->integer('perijinan_id')->unsigned();
			$table->string('lokasi', 30);
			$table->string('nama', 50);
			$table->string('noktp', 30);
			$table->string('berlaku', 30);
			$table->string('tempatlahir', 30);
			$table->string('tanggallahir', 30);
			$table->string('jeniskelamin', 30);
			$table->string('pekerjaan', 30);
			$table->string('provinsi', 30);
			$table->string('kabupaten', 30);
			$table->string('kecamatan', 30);
			$table->string('desa', 30);
			$table->string('alamat', 100);
			$table->string('kodepos', 30);
			$table->string('nohp', 30);
			$table->string('email', 30);
			$table->string('verifikasi', 30);
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
		Schema::drop('penggunas');
	}

}
