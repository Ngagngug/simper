<?php

// Composer: "fzaninotto/faker": "v1.3.0"
use Faker\Factory as Faker;

class VerifikasitokoobatsTableSeeder extends Seeder {

	public function run()
	{
		DB::table('verifikasitokoobats')->delete();

		$verifikasitokoobats = [
		    ['id'=>1, 'kelengkapan'=>'Surat permohonan dari pemilik yang ditujukan kepada Ka. Dinkes (bermeterai Rp. 6.000,-)
			', 'created_at'=>'2016-04-18 11:15:22', 'updated_at'=>'2016-04-18 11:15:22'],
            ['id'=>2, 'kelengkapan'=>'FC KTP pemohon (pemilik)
			', 'created_at'=>'2016-04-18 11:15:22', 'updated_at'=>'2016-04-18 11:15:22'],
            ['id'=>3, 'kelengkapan'=>'FC ijazah, STRTTK dan SIKTTK
			', 'created_at'=>'2016-04-18 11:15:22', 'updated_at'=>'2016-04-18 11:15:22'],
            ['id'=>4, 'kelengkapan'=>'Surat Pernyataan TTK bersedia bekerja sebagai penanggung jawab (bermeterai Rp. 6.000,-)
			', 'created_at'=>'2016-04-18 11:15:22', 'updated_at'=>'2016-04-18 11:15:22'],
			 ['id'=>5,'kelengkapan'=>'Daftar tenaga yang menangani dengan mencantumkan nama dan alamat
			', 'created_at'=>'2016-04-18 11:15:22', 'updated_at'=>'2016-04-18 11:15:22'],
			 ['id'=>6, 'kelengkapan'=>'Lolos butuh dari Ka. Dinkes Prov (bagi TTK yg pindah dari Prov. Lain) dan dari Ka. Dinkes Kab/Kot bagi yang pindah dari kabupaten//kota lain
			', 'created_at'=>'2016-04-18 11:15:22', 'updated_at'=>'2016-04-18 11:15:22'],
			 ['id'=>7, 'kelengkapan'=>'Denah situasi terhadap sarana lain
			', 'created_at'=>'2016-04-18 11:15:22', 'updated_at'=>'2016-04-18 11:15:22'],
			 ['id'=>8, 'kelengkapan'=>'Denah lay-out bangunan disertai dengan ukuran yang proporsional
			', 'created_at'=>'2016-04-18 11:15:22', 'updated_at'=>'2016-04-18 11:15:22'],
			 ['id'=>9, 'kelengkapan'=>'FC Surat Izin Usaha Perdagangan (SIUP)
			', 'created_at'=>'2016-04-18 11:15:22', 'updated_at'=>'2016-04-18 11:15:22'],
			 ['id'=>10, 'kelengkapan'=>'FC Tanda Daftar Perusahaan (TDP)
			', 'created_at'=>'2016-04-18 11:15:22', 'updated_at'=>'2016-04-18 11:15:22'],
			 ['id'=>11, 'kelengkapan'=>'Surat status bangunan : hak milik/sewa (dilampiri perjanjian sewa minimal 3 tahun) dan FC sertifikat tanah
			', 'created_at'=>'2016-04-18 11:15:22', 'updated_at'=>'2016-04-18 11:15:22'],
			 ['id'=>12, 'kelengkapan'=>'FC izin HO
			', 'created_at'=>'2016-04-18 11:15:22', 'updated_at'=>'2016-04-18 11:15:22'],
			 ['id'=>13, 'kelengkapan'=>'Surat Pernyataan bersedia mentaati ketentuan dan peraturan perundang-undangan tang berlaku (bermeterai Rp. 6.000,-)  
			', 'created_at'=>'2016-04-18 11:15:22', 'updated_at'=>'2016-04-18 11:15:22'],
			  ['id'=>14, 'kelengkapan'=>'Pasfoto berwarna Uk. 4x6 = 3 lembar, uk. 2x3 = 1 lembar
			', 'created_at'=>'2016-04-18 11:15:22', 'updated_at'=>'2016-04-18 11:15:22'],
			 ];

	      DB::table('verifikasitokoobats')->insert($verifikasitokoobats);
	}

}