<?php

// Composer: "fzaninotto/faker": "v1.3.0"
use Faker\Factory as Faker;

class AuthorsTableSeeder extends Seeder {

	public function run()
	{
		DB::table('authors')->delete();

		$authors = [
		    ['id'=>1, 'name'=>'Aunur Rofiq Mulyanto', 'created_at'=>'2015-05-01 11:15:22', 'updated_at'=>'2015-05-01 11:15:22'],
            ['id'=>2, 'name'=>'Pramudi Utomo', 'created_at'=>'2015-05-01 11:15:22', 'updated_at'=>'2015-05-01 11:15:22'],
            ['id'=>3, 'name'=>'Nur Wahyu Rochmadi', 'created_at'=>'2015-05-01 11:15:22', 'updated_at'=>'2015-05-01 11:15:22'],
      ];

      DB::table('authors')->insert($authors);
      
	}

}