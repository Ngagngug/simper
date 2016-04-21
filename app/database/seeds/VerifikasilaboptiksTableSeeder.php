<?php

// Composer: "fzaninotto/faker": "v1.3.0"
use Faker\Factory as Faker;

class VerifikasilaboptiksTableSeeder extends Seeder {

	public function run()
	{
		DB::table('verifikasilaboptiks')->delete();

		$verifikasilaboptiks = [
		    ['id'=>1, 'kelengkapan'=>'Surat Permohonan dari pemilik yang ditujukan kepada Ka. Dinkes (bermeterai Rp. 6.000,-) 
			', 'created_at'=>'2016-04-18 11:15:22', 'updated_at'=>'2016-04-18 11:15:22'],
            ['id'=>2, 'kelengkapan'=>'FC KTP pemohon (pemilik)
			', 'created_at'=>'2016-04-18 11:15:22', 'updated_at'=>'2016-04-18 11:15:22'],
            ['id'=>3, 'kelengkapan'=>'FC ijazah, KTP dan surat keterangan sehat dari dokter yang bekerja di RS pemerintah atau puskesmas bagi penanggungjawab teknis (RO)
			', 'created_at'=>'2016-04-18 11:15:22', 'updated_at'=>'2016-04-18 11:15:22'],
            ['id'=>4, 'kelengkapan'=>'Surat Pernyataan dari pemilik dan penanggung jawab laboratorium sanggup mentaati  dan peraturan perundang-undangan yang berlaku (bermeterai Rp. 6.000,-)  
			', 'created_at'=>'2016-04-18 11:15:22', 'updated_at'=>'2016-04-18 11:15:22'],
			 ['id'=>5,'kelengkapan'=>'Daftar ketenagaan dilampiri FC ijazah, STR, dan SIK dari tenaga laboratorium optik
			', 'created_at'=>'2016-04-18 11:15:22', 'updated_at'=>'2016-04-18 11:15:22'],
			 ['id'=>6, 'kelengkapan'=>'Surat status bangunan : hak milik/sewa (dilampiri perjanjian sewa minimal 3 tahun) dan FC sertifikat tanah
			', 'created_at'=>'2016-04-18 11:15:22', 'updated_at'=>'2016-04-18 11:15:22'],
			 ['id'=>7, 'kelengkapan'=>'Denah situasi laboratorium optik terhadap sarana lain 
			', 'created_at'=>'2016-04-18 11:15:22', 'updated_at'=>'2016-04-18 11:15:22'],
			 ['id'=>8, 'kelengkapan'=>'Denah lay-out laboratorium optik disertai dengan ukuran yang proporsional 
			', 'created_at'=>'2016-04-18 11:15:22', 'updated_at'=>'2016-04-18 11:15:22'],
			 ['id'=>9, 'kelengkapan'=>'Daftar peralatan laboratorium optik (sarana dan prasarana) sesuai peraturan perundang-undangan 
			', 'created_at'=>'2016-04-18 11:15:22', 'updated_at'=>'2016-04-18 11:15:22'],
			 ['id'=>10, 'kelengkapan'=>'Surat Pernyataan kepemilikan perlengkapan calon apotek (bermeterai Rp. 6.000,-) 
			', 'created_at'=>'2016-04-18 11:15:22', 'updated_at'=>'2016-04-18 11:15:22'],
			  ['id'=>11, 'kelengkapan'=>'FC izin HO
			', 'created_at'=>'2016-04-18 11:15:22', 'updated_at'=>'2016-04-18 11:15:22'],
			  ['id'=>12, 'kelengkapan'=>'Pasfoto berwarna Uk. 4x6 = 4 lembar, uk. 3x4 = 1 lembar
			', 'created_at'=>'2016-04-18 11:15:22', 'updated_at'=>'2016-04-18 11:15:22'],
			  ['id'=>13, 'kelengkapan'=>'Asli dan FC Surat Izin Laboratorium Optik yang lama (bagi yang mengajukan perpanjangan)
			', 'created_at'=>'2016-04-18 11:15:22', 'updated_at'=>'2016-04-18 11:15:22'],
			 ];

      DB::table('verifikasilaboptiks')->insert($verifikasilaboptiks);
	}

}