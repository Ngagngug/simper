<?php

// Composer: "fzaninotto/faker": "v1.3.0"
use Faker\Factory as Faker;

class VerifikasialatkesehatansTableSeeder extends Seeder {

	public function run()
	{
		
		DB::table('verifikasialatkesehatans')->delete();

		$verifikasialatkesehatans = [
		    ['id'=>1, 'kelengkapan'=>'Surat Permohonan dari pemilik yang ditujukan kepada Ka. Dinkes (bermeterai Rp. 6.000,-) 
			', 'created_at'=>'2016-04-18 11:15:22', 'updated_at'=>'2016-04-18 11:15:22'],
            ['id'=>2, 'kelengkapan'=>'FC KTP pemohon (pemilik)
			', 'created_at'=>'2016-04-18 11:15:22', 'updated_at'=>'2016-04-18 11:15:22'],
            ['id'=>3, 'kelengkapan'=>'FC ijazah dan FC KTP bagi penanggung jawab teknis
			', 'created_at'=>'2016-04-18 11:15:22', 'updated_at'=>'2016-04-18 11:15:22'],
            ['id'=>4, 'kelengkapan'=>'Surat Pernyataan dari pemilik dan penanggung jawab sanggup mentaati peraturan perundang-undangan yang berlaku (bermeterai Rp. 6.000,-)
			', 'created_at'=>'2016-04-18 11:15:22', 'updated_at'=>'2016-04-18 11:15:22'],
			 ['id'=>5,'kelengkapan'=>'Daftar ketenagaan ( dilampiri FC ijazah dan sertifikat penunjang)
			', 'created_at'=>'2016-04-18 11:15:22', 'updated_at'=>'2016-04-18 11:15:22'],
			 ['id'=>6, 'kelengkapan'=>'Surat status bangunan : hak milik/sewa (dilampiri perjanjian sewa minimal 3 tahun) dan FC sertifikat tanah
			', 'created_at'=>'2016-04-18 11:15:22', 'updated_at'=>'2016-04-18 11:15:22'],
			 ['id'=>7, 'kelengkapan'=>'FC Surat Izin Usaha Perdagangan (SIUP)
			', 'created_at'=>'2016-04-18 11:15:22', 'updated_at'=>'2016-04-18 11:15:22'],
			 ['id'=>8, 'kelengkapan'=>'FC Tanda Daftar Perusahaan (TDP)
			', 'created_at'=>'2016-04-18 11:15:22', 'updated_at'=>'2016-04-18 11:15:22'],
			 ['id'=>9, 'kelengkapan'=>'Denah situasi terhadap sarana lain 
			', 'created_at'=>'2016-04-18 11:15:22', 'updated_at'=>'2016-04-18 11:15:22'],
			 ['id'=>10, 'kelengkapan'=>'Denah lay-out bangunan disertai dengan ukuran yang proporsional 
			', 'created_at'=>'2016-04-18 11:15:22', 'updated_at'=>'2016-04-18 11:15:22'],
			 ['id'=>11, 'kelengkapan'=>'FC izin HO
			', 'created_at'=>'2016-04-18 11:15:22', 'updated_at'=>'2016-04-18 11:15:22'],
			 ['id'=>12, 'kelengkapan'=>'Jenis/macam alat kesehatan yang akan diedarkan secara eceran
			', 'created_at'=>'2016-04-18 11:15:22', 'updated_at'=>'2016-04-18 11:15:22'],
			 ['id'=>13, 'kelengkapan'=>'Akte Notaris pendirian Badan Usaha (bagi yang berbadan usaha)
			', 'created_at'=>'2016-04-18 11:15:22', 'updated_at'=>'2016-04-18 11:15:22'],
			  ['id'=>14, 'kelengkapan'=>'Pasfoto berwarna Uk. 4x6 = 3 lembar, uk. 3x4 = 1 lembar
			', 'created_at'=>'2016-04-18 11:15:22', 'updated_at'=>'2016-04-18 11:15:22'],
			  ['id'=>15, 'kelengkapan'=>'Asli dan FC Surat Izin Toko Alat Kesehatan yang lama (bagi yang mengajukan perpanjangan)
			', 'created_at'=>'2016-04-18 11:15:22', 'updated_at'=>'2016-04-18 11:15:22'],
			  ['id'=>16, 'kelengkapan'=>'Perlengkapan administrasi : - KartuPersediaan; - Kartu Pembelian; - Kartu Gudang; - Kartu Barang;- Kartu Penjualan.
			', 'created_at'=>'2016-04-18 11:15:22', 'updated_at'=>'2016-04-18 11:15:22'],
			 ];

      DB::table('verifikasialatkesehatans')->insert($verifikasialatkesehatans);
	}

}