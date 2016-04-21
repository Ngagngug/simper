<?php

// Composer: "fzaninotto/faker": "v1.3.0"
use Faker\Factory as Faker;

class VerifikasioptikalsTableSeeder extends Seeder {

	public function run()
	{
		DB::table('verifikasioptikals')->delete();

		$verifikasioptikals = [
		    ['id'=>1, 'kelengkapan'=>'Surat Permohonan dari pemilik yang ditujukan kepada Ka. Dinkes (bermeterai Rp. 6.000,-) 
			', 'created_at'=>'2016-04-18 11:15:22', 'updated_at'=>'2016-04-18 11:15:22'],
            ['id'=>2, 'kelengkapan'=>'FC izin HO 
			', 'created_at'=>'2016-04-18 11:15:22', 'updated_at'=>'2016-04-18 11:15:22'],
            ['id'=>3, 'kelengkapan'=>'Surat status bangunan : hak milik/sewa (dilampiri perjanjian sewa minimal 3 tahun) dan FC sertifikat tanah
			', 'created_at'=>'2016-04-18 11:15:22', 'updated_at'=>'2016-04-18 11:15:22'],
            ['id'=>4, 'kelengkapan'=>'Rekomendasi dari GAPOPIN
			', 'created_at'=>'2016-04-18 11:15:22', 'updated_at'=>'2016-04-18 11:15:22'],
			 ['id'=>5,'kelengkapan'=>'Rekomendasi dari IROPIN
			', 'created_at'=>'2016-04-18 11:15:22', 'updated_at'=>'2016-04-18 11:15:22'],
			 ['id'=>6, 'kelengkapan'=>'FC KTP penanggung jawab teknis (RO) dan pemilik
			', 'created_at'=>'2016-04-18 11:15:22', 'updated_at'=>'2016-04-18 11:15:22'],
			 ['id'=>7, 'kelengkapan'=>'FC Surat Izin Usaha Perdagangan (SIUP)
			', 'created_at'=>'2016-04-18 11:15:22', 'updated_at'=>'2016-04-18 11:15:22'],
			 ['id'=>8, 'kelengkapan'=>'FC Tanda Daftar Perusahaan (TDP)
			', 'created_at'=>'2016-04-18 11:15:22', 'updated_at'=>'2016-04-18 11:15:22'],
			 ['id'=>9, 'kelengkapan'=>'Daftar tenaga (tenaga RO), dilampiri : - FC ijazah;- Surat Pernyataan kesanggupan sebagai RO (bermeterai Rp. 6.000,-);  - Surat keterangan sehat dari rumah sakit pemerintah /  puskesmas;  -  FC STR dan SIK.
			', 'created_at'=>'2016-04-18 11:15:22', 'updated_at'=>'2016-04-18 11:15:22'],
			 ['id'=>10, 'kelengkapan'=>'Daftar peralatan optik
			', 'created_at'=>'2016-04-18 11:15:22', 'updated_at'=>'2016-04-18 11:15:22'],
			 ['id'=>11, 'kelengkapan'=>'Denah situasi optik terhadap sarana lain 
			', 'created_at'=>'2016-04-18 11:15:22', 'updated_at'=>'2016-04-18 11:15:22'],
			 ['id'=>12, 'kelengkapan'=>'Denah lay-out optik disertai dengan ukuran yang proporsional 
			', 'created_at'=>'2016-04-18 11:15:22', 'updated_at'=>'2016-04-18 11:15:22'],
			 ['id'=>13, 'kelengkapan'=>'Surat Pernyataan sanggup bekerja penuh dan tidak bekerja di fasilitas pelayanan kesehatan lainnya bagi RO penanggungjawab (bermeterai Rp. 6.000,-)
			', 'created_at'=>'2016-04-18 11:15:22', 'updated_at'=>'2016-04-18 11:15:22'],
			  ['id'=>14, 'kelengkapan'=>'Surat Pernyataan kerjasama antara pemilikdan RO  (bermeterai Rp. 6.000,-)
			', 'created_at'=>'2016-04-18 11:15:22', 'updated_at'=>'2016-04-18 11:15:22'],
			  ['id'=>15, 'kelengkapan'=>'Surat Pernyataan kesanggupan dari pemilik dan RO untuk mentaati peraturan perundang-undangan yang berlaku (bermeterai Rp. 6.000,-)
			', 'created_at'=>'2016-04-18 11:15:22', 'updated_at'=>'2016-04-18 11:15:22'],
			  ['id'=>16, 'kelengkapan'=>'FC NPWP pemilik
			', 'created_at'=>'2016-04-18 11:15:22', 'updated_at'=>'2016-04-18 11:15:22'],
			  ['id'=>17, 'kelengkapan'=>'FC Surat Pernyataan Kesanggupan Pengelolaan dan Pemantauan Lingkungan Hidup (SPPL)
			', 'created_at'=>'2016-04-18 11:15:22', 'updated_at'=>'2016-04-18 11:15:22'],
			  ['id'=>18, 'kelengkapan'=>'Pasfoto berwarna Uk. 4x6 = 4 lembar, uk. 3x4 = 1 lembar
			', 'created_at'=>'2016-04-18 11:15:22', 'updated_at'=>'2016-04-18 11:15:22'],
			 ];

      DB::table('verifikasioptikals')->insert($verifikasioptikals);
	}

}