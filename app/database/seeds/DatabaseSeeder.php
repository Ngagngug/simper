<?php

class DatabaseSeeder extends Seeder {

	/**
	 * Run the database seeds.
	 *
	 * @return void
	 */
	public function run()
	{
		// disable foreign key checks
		DB::statement('SET FOREIGN_KEY_CHECKS=0;');
		Eloquent::unguard();

		// $this->call('UserTableSeeder');
		$this->call('SentrySeeder');
		$this->call('PerijinansTableSeeder');
		$this->call('PenggunasTableSeeder');
		$this->call('VerifikasiapoteksTableSeeder');
		$this->call('VerifikasikliniksTableSeeder');
		$this->call('VerifikasiklinikdialisisTableSeeder');
		$this->call('VerifikasiklinikkecantikansTableSeeder');
		$this->call('VerifikasilabklinikumumsTableSeeder');
		$this->call('VerifikasilaboptiksTableSeeder');
		$this->call('VerifikasioptikalsTableSeeder');
		$this->call('VerifikasitokoobatsTableSeeder');
		$this->call('VerifikasiapotekrakyatsTableSeeder');
		$this->call('VerifikasialatkesehatansTableSeeder');
		$this->call('VerifikasirumahsakitsTableSeeder');
		DB::statement('SET FOREIGN_KEY_CHECKS=1;');
	}

}
