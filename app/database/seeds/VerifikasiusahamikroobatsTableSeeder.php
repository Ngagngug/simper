<?php

// Composer: "fzaninotto/faker": "v1.3.0"
use Faker\Factory as Faker;

class VerifikasiusahamikroobatsTableSeeder extends Seeder {

	public function run()
	{
		DB::table('verifikasiusahamikroobats')->delete();

		$verifikasiusahamikroobats = [
		    ['id'=>1, 'kelengkapan'=>'Permohonan izin dari penanggung jawab ditujukan kepada Kepala Dinas Kesehatan Kabupaten Boyolali (bermaterai Rp 6.000,-) 
			', 'created_at'=>'2016-04-18 11:15:22', 'updated_at'=>'2016-04-18 11:15:22'],
            ['id'=>2, 'kelengkapan'=>'FC akta pendirian badan usaha yang sah sesuai ketentuanperaturan perundang-undangan ( dalam hal permohonan bukan perseorangan)
			', 'created_at'=>'2016-04-18 11:15:22', 'updated_at'=>'2016-04-18 11:15:22'],
            ['id'=>3, 'kelengkapan'=>'Susunan Direksi/ Pengurus dan Komisaris/ Badan Pengawas ( dalam hal permohonan bukan perseorangan)
			', 'created_at'=>'2016-04-18 11:15:22', 'updated_at'=>'2016-04-18 11:15:22'],
            ['id'=>4, 'kelengkapan'=>'FC KTP/Identitas pemohon dan/atau Direksi pengurus dan Komisaris/Badan pengawas
			', 'created_at'=>'2016-04-18 11:15:22', 'updated_at'=>'2016-04-18 11:15:22'],
			 ['id'=>5,'kelengkapan'=>'Pasfoto berwarna pemohon uk. 4x6=4 lembar, uk. 2x3=1 lembar
			', 'created_at'=>'2016-04-18 11:15:22', 'updated_at'=>'2016-04-18 11:15:22'],
			 ['id'=>6, 'kelengkapan'=>'Daftar ketenagaan 
			', 'created_at'=>'2016-04-18 11:15:22', 'updated_at'=>'2016-04-18 11:15:22'],
			 ['id'=>7, 'kelengkapan'=>'Denah lokasi sarana
			', 'created_at'=>'2016-04-18 11:15:22', 'updated_at'=>'2016-04-18 11:15:22'],
			 ['id'=>8, 'kelengkapan'=>'Surat pernyataan pemohon dan/atau Direksi/Pengurus dan Komisaris/Badan Pengawas tidak pernah terlibat pelanggaran peraturan perundang-undangan di bidang farmasi (bermaterai Rp 6.000,-)
			', 'created_at'=>'2016-04-18 11:15:22', 'updated_at'=>'2016-04-18 11:15:22'],
			 ['id'=>9, 'kelengkapan'=>'FC Surat Tanda Daftar Perusahaan dalam hal permohonan bukan perseorangan
			', 'created_at'=>'2016-04-18 11:15:22', 'updated_at'=>'2016-04-18 11:15:22'],
			 ['id'=>10, 'kelengkapan'=>'FC Surat Izin Usaha Perdagangan dalam hal permohonan bukan perseorangan
			', 'created_at'=>'2016-04-18 11:15:22', 'updated_at'=>'2016-04-18 11:15:22'],
			  ['id'=>11, 'kelengkapan'=>'FC Surat Keterangan Domisili dari Kepala Desa / Kelurahan setempat
			', 'created_at'=>'2016-04-18 11:15:22', 'updated_at'=>'2016-04-18 11:15:22'],
			 ];

      DB::table('verifikasiusahamikroobats')->insert($verifikasiusahamikroobats);
	}

}