<?php

// Composer: "fzaninotto/faker": "v1.3.0"
use Faker\Factory as Faker;

class VerifikasiunittransfusidarahsTableSeeder extends Seeder {

	public function run()
	{
		DB::table('verifikasiunittransfusidarahs')->delete();

		$verifikasiunittransfusidarahs = [
		    ['id'=>1, 'kelengkapan'=>'Surat permohonan izin dari pimpinan yang ditujukan kepada Ka. Dinkes (bermaterai Rp 6000,-)
			', 'created_at'=>'2016-04-18 11:15:22', 'updated_at'=>'2016-04-18 11:15:22'],
            ['id'=>2, 'kelengkapan'=>'FC KTP pemohon 
			', 'created_at'=>'2016-04-18 11:15:22', 'updated_at'=>'2016-04-18 11:15:22'],
            ['id'=>3, 'kelengkapan'=>'FC ijazah, STR dan SIP Dokter 
			', 'created_at'=>'2016-04-18 11:15:22', 'updated_at'=>'2016-04-18 11:15:22'],
            ['id'=>4, 'kelengkapan'=>'FC ijazah, STR dan SIK perawat
			', 'created_at'=>'2016-04-18 11:15:22', 'updated_at'=>'2016-04-18 11:15:22'],
			 ['id'=>5,'kelengkapan'=>'Pasfoto pemohon uk. 4x6=4 lbr, uk. 2x3=1 lbr
			', 'created_at'=>'2016-04-18 11:15:22', 'updated_at'=>'2016-04-18 11:15:22'],
			 ['id'=>6, 'kelengkapan'=>'Rekomendasi dari PMI Jateng
			', 'created_at'=>'2016-04-18 11:15:22', 'updated_at'=>'2016-04-18 11:15:22'],
			 ['id'=>7, 'kelengkapan'=>'Struktur Organisasi yang disahkan oleh pimpinan PMI
			', 'created_at'=>'2016-04-18 11:15:22', 'updated_at'=>'2016-04-18 11:15:22'],
			 ['id'=>8, 'kelengkapan'=>'Denah lay-out bangunan disertai dengan ukuran yang proporsional 
			', 'created_at'=>'2016-04-18 11:15:22', 'updated_at'=>'2016-04-18 11:15:22'],
			 ['id'=>9, 'kelengkapan'=>'Hasil pemeriksaan kualitas air yang memenuhi syarat
			', 'created_at'=>'2016-04-18 11:15:22', 'updated_at'=>'2016-04-18 11:15:22'],
			 ['id'=>10, 'kelengkapan'=>'Daftar tarif pelayanan
			', 'created_at'=>'2016-04-18 11:15:22', 'updated_at'=>'2016-04-18 11:15:22'],
			  ['id'=>11, 'kelengkapan'=>'Daftar ketenagakerjaan dan uraian tugas
			', 'created_at'=>'2016-04-18 11:15:22', 'updated_at'=>'2016-04-18 11:15:22'],
			   ['id'=>12, 'kelengkapan'=>'Daftar peralatan
			', 'created_at'=>'2016-04-18 11:15:22', 'updated_at'=>'2016-04-18 11:15:22'],
			   ['id'=>13, 'kelengkapan'=>'Standar Operasional Procedur (SOP) yang ditandatangani oleh penanggung jawab teknis medis
			', 'created_at'=>'2016-04-18 11:15:22', 'updated_at'=>'2016-04-18 11:15:22'],
			   ['id'=>14, 'kelengkapan'=>'FC surat pernyataan Kesangguapan Pengelolaan dan Pemantauan Lingkungan Hidup (SPPL)
			', 'created_at'=>'2016-04-18 11:15:22', 'updated_at'=>'2016-04-18 11:15:22'],
			    ['id'=>15, 'kelengkapan'=>'"Persyaratan administrasi penganggung jawab teknis media, meliputi:- Surat pengangkatan sebagai penanggungjawab teknis media; -Surat pernyataanbersedia sebagai penanggungjawab teknis media (bermaterai Rp 6.000,-)"
			', 'created_at'=>'2016-04-18 11:15:22', 'updated_at'=>'2016-04-18 11:15:22'],
			 ];

      DB::table('verifikasiunittransfusidarahs')->insert($verifikasiunittransfusidarahs);
	}

}