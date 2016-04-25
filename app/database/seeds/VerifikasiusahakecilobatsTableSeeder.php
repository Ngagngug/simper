<?php

// Composer: "fzaninotto/faker": "v1.3.0"
use Faker\Factory as Faker;

class VerifikasiusahakecilobatsTableSeeder extends Seeder {

	public function run()
	{
		DB::table('verifikasiusahakecilobats')->delete();

		$verifikasiusahakecilobats = [
		    ['id'=>1, 'kelengkapan'=>'Surat permohonan rekomendasi kepada Kepala Dinas Kesehatan Kabupaten Boyolali
			', 'created_at'=>'2016-04-18 11:15:22', 'updated_at'=>'2016-04-18 11:15:22'],
            ['id'=>2, 'kelengkapan'=>'Fotokopi akta pendirian badan usaha
			', 'created_at'=>'2016-04-18 11:15:22', 'updated_at'=>'2016-04-18 11:15:22'],
            ['id'=>3, 'kelengkapan'=>'Susunan Direksi/Pengurus dan Komisaris/Badan Pengawas
			', 'created_at'=>'2016-04-18 11:15:22', 'updated_at'=>'2016-04-18 11:15:22'],
            ['id'=>4, 'kelengkapan'=>'FC KTP/Identitas Direksi/Pengurus dan Komisaris/Badan Pengawas
			', 'created_at'=>'2016-04-18 11:15:22', 'updated_at'=>'2016-04-18 11:15:22'],
			 ['id'=>5,'kelengkapan'=>'Surat Pernyataan Direksi/Pengurus dan Komisaris/Badan Pengawas tidak pernah terlibat pelanggaran peraturan perundang-undangan di bidang farmasi (Bermaterai Rp 6.000,-)
			', 'created_at'=>'2016-04-18 11:15:22', 'updated_at'=>'2016-04-18 11:15:22'],
			 ['id'=>6, 'kelengkapan'=>'Fotocopi sertifikat tanah 
			', 'created_at'=>'2016-04-18 11:15:22', 'updated_at'=>'2016-04-18 11:15:22'],
			 ['id'=>7, 'kelengkapan'=>'Fotocopi Surat Pernyataan Kesanggupan Pengelolaan dan Pemantauan Lingkungan Hidup (SPPL)
			', 'created_at'=>'2016-04-18 11:15:22', 'updated_at'=>'2016-04-18 11:15:22'],
			 ['id'=>8, 'kelengkapan'=>'FC Surat Tanda Daftar Perusahaan (TDP)
			', 'created_at'=>'2016-04-18 11:15:22', 'updated_at'=>'2016-04-18 11:15:22'],
			 ['id'=>9, 'kelengkapan'=>'FC Surat Izin Perdagangan (SIUP)
			', 'created_at'=>'2016-04-18 11:15:22', 'updated_at'=>'2016-04-18 11:15:22'],
			 ['id'=>10, 'kelengkapan'=>'FC izin HO 
			', 'created_at'=>'2016-04-18 11:15:22', 'updated_at'=>'2016-04-18 11:15:22'],
			  ['id'=>11, 'kelengkapan'=>'FC NPWP pemilik
			', 'created_at'=>'2016-04-18 11:15:22', 'updated_at'=>'2016-04-18 11:15:22'],
			  ['id'=>12, 'kelengkapan'=>'Surat Pernyataan sanggup bekerja penuh dari Tenaga Teknis Kefarmasian sebagai penanggung jawab (Bermaterai Rp 6.000,-)
			', 'created_at'=>'2016-04-18 11:15:22', 'updated_at'=>'2016-04-18 11:15:22'],
			  ['id'=>13, 'kelengkapan'=>'FC surat pengangkatan penanggunag jawab dari pimpinan perusahaan 
			', 'created_at'=>'2016-04-18 11:15:22', 'updated_at'=>'2016-04-18 11:15:22'],
			  ['id'=>14, 'kelengkapan'=>'FC STR dan SIK TTK
			', 'created_at'=>'2016-04-18 11:15:22', 'updated_at'=>'2016-04-18 11:15:22'],
			  ['id'=>15, 'kelengkapan'=>'Daftar perlatan dan mesin-mesin yang digunakan 
			', 'created_at'=>'2016-04-18 11:15:22', 'updated_at'=>'2016-04-18 11:15:22'],
			  ['id'=>16, 'kelengkapan'=>'Diagram / alur proses produksi masing-masing bentuk sediaan obat tradisional yang akan dibuat 
			', 'created_at'=>'2016-04-18 11:15:22', 'updated_at'=>'2016-04-18 11:15:22'],
			  ['id'=>17, 'kelengkapan'=>'Daftar jumlah tenaga kerja dan tupoksi masing-masing
			', 'created_at'=>'2016-04-18 11:15:22', 'updated_at'=>'2016-04-18 11:15:22'],
			  ['id'=>18, 'kelengkapan'=>'Rekomendasi dari Kepala Balai POM setempat
			', 'created_at'=>'2016-04-18 11:15:22', 'updated_at'=>'2016-04-18 11:15:22'],
			  ['id'=>19, 'kelengkapan'=>'Memiliki apoteker sebagi penanggung jawab yang bekerja penuh (jika memproduksi bentuk sediaan kapsul dan/atau cairan obat dalam)
			', 'created_at'=>'2016-04-18 11:15:22', 'updated_at'=>'2016-04-18 11:15:22'],
			  ['id'=>20, 'kelengkapan'=>'Memenuhi persyaratan Cara Pembuatan Obat Tradisional yang Baik (CPOTB) jika memproduksi bentuk sediaan kapsul dan/atau cairan obat dalam
			', 'created_at'=>'2016-04-18 11:15:22', 'updated_at'=>'2016-04-18 11:15:22'],
			 ];

      DB::table('verifikasiusahakecilobats')->insert($verifikasiusahakecilobats);
	}

}