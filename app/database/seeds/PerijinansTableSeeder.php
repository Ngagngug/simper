<?php

// Composer: "fzaninotto/faker": "v1.3.0"
use Faker\Factory as Faker;

class PerijinansTableSeeder extends Seeder {

	public function run()
	{
		DB::table('perijinans')->delete();

		$perijinans = [
		['id'=>1, 'nama'=>'Ijin Apotek', 'created_at'=>'2016-03-18 11:15:22', 'updated_at'=>'2016-03-18 11:15:22'],
            ['id'=>2, 'nama'=>'Ijin Apotek Rakyat', 'created_at'=>'2016-03-18 11:15:22', 'updated_at'=>'2016-03-18 11:15:22'],
            ['id'=>3, 'nama'=>'Ijin Puskesmas', 'created_at'=>'2016-03-18 11:15:22', 'updated_at'=>'2016-03-18 11:15:22'],
            ['id'=>4, 'nama'=>'Ijin Klinik', 'created_at'=>'2016-03-18 11:15:22', 'updated_at'=>'2016-03-18 11:15:22'],
            ['id'=>5, 'nama'=>'Ijin Klinik Dialisis', 'created_at'=>'2016-03-18 11:15:22', 'updated_at'=>'2016-03-18 11:15:22'],
            ['id'=>6, 'nama'=>'Ijin Klinik Kecantikan Estetika', 'created_at'=>'2016-03-18 11:15:22', 'updated_at'=>'2016-03-18 11:15:22'],
            ['id'=>7, 'nama'=>'Ijin Laboratorium Klinik Umum Pratama', 'created_at'=>'2016-03-18 11:15:22', 'updated_at'=>'2016-03-18 11:15:22'],
            ['id'=>8, 'nama'=>'Ijin Laboratorium Optik', 'created_at'=>'2016-03-18 11:15:22', 'updated_at'=>'2016-03-18 11:15:22'],
            ['id'=>9, 'nama'=>'Ijin Optikal', 'created_at'=>'2016-03-18 11:15:22', 'updated_at'=>'2016-03-18 11:15:22'],
            ['id'=>10, 'nama'=>'Ijin Toko Obat', 'created_at'=>'2016-03-18 11:15:22', 'updated_at'=>'2016-03-18 11:15:22'],
            ['id'=>11, 'nama'=>'Ijin Pedagang Eceran Obat', 'created_at'=>'2016-03-18 11:15:22', 'updated_at'=>'2016-03-18 11:15:22'],
            ['id'=>12, 'nama'=>'Ijin Toko Alat Kesehatan', 'created_at'=>'2016-03-18 11:15:22', 'updated_at'=>'2016-03-18 11:15:22'],
            ['id'=>13, 'nama'=>'Ijin Rumah Sakit', 'created_at'=>'2016-03-18 11:15:22', 'updated_at'=>'2016-03-18 11:15:22'],
      ];

      DB::table('perijinans')->insert($perijinans);
	}

}