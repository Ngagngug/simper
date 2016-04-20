<?php

// Composer: "fzaninotto/faker": "v1.3.0"
use Faker\Factory as Faker;

class VerifikasiklinikkecantikansTableSeeder extends Seeder {

	public function run()
	{
		DB::table('verifikasiklinikkecantikans')->delete();

		$verifikasiklinikkecantikans = [
		    ['id'=>1, 'kelengkapan'=>'Surat Permohonan izin dari pemilik  yang ditujukan kepada Ka. Dinkes (bermeterai Rp. 6.000,-) 
			', 'created_at'=>'2016-04-18 11:15:22', 'updated_at'=>'2016-04-18 11:15:22'],
            ['id'=>2, 'kelengkapan'=>'FC KTP (pemohon perorangan) / FC akte pendirian (pemohon yang berbentuk Badan Hukum)
			', 'created_at'=>'2016-04-18 11:15:22', 'updated_at'=>'2016-04-18 11:15:22'],
            ['id'=>3, 'kelengkapan'=>'FC NPWP pemohon
			', 'created_at'=>'2016-04-18 11:15:22', 'updated_at'=>'2016-04-18 11:15:22'],
            ['id'=>4, 'kelengkapan'=>'Pasfoto pemohon uk. 4x6 = 4 lbr, uk. 2x3 = 1 lbr
			', 'created_at'=>'2016-04-18 11:15:22', 'updated_at'=>'2016-04-18 11:15:22'],
			 ['id'=>5,'kelengkapan'=>'FC izin HO
			', 'created_at'=>'2016-04-18 11:15:22', 'updated_at'=>'2016-04-18 11:15:22'],
			 ['id'=>6, 'kelengkapan'=>'Surat status bangunan : hak milik/sewa (dilampiri perjanjian sewa minimal 5 tahun) dan FC sertifikat tanah
			', 'created_at'=>'2016-04-18 11:15:22', 'updated_at'=>'2016-04-18 11:15:22'],
			 ['id'=>7, 'kelengkapan'=>'FC surat perjanjian kerjasama (MoU) pengelolaan limbah medis
			', 'created_at'=>'2016-04-18 11:15:22', 'updated_at'=>'2016-04-18 11:15:22'],
			 ['id'=>8, 'kelengkapan'=>'FC dokumen UKL-UPL
			', 'created_at'=>'2016-04-18 11:15:22', 'updated_at'=>'2016-04-18 11:15:22'],
			 ['id'=>9, 'kelengkapan'=>'Rekomendasi dari Puskesmas setempat
			', 'created_at'=>'2016-04-18 11:15:22', 'updated_at'=>'2016-04-18 11:15:22'],
			 ['id'=>10, 'kelengkapan'=>'Surat Pernyataan dari pemilik dan penanggung jawab bersedia mentaati ketentuan dan peraturan perundang-undangan yang berlaku (bermeterai Rp. 6.000,-) 
			', 'created_at'=>'2016-04-18 11:15:22', 'updated_at'=>'2016-04-18 11:15:22'],
			 ['id'=>11, 'kelengkapan'=>'Surat Pernyataan dari pemilik dan penanggung jawab bersedia mentaati ketentuan dan peraturan perundang-undangan yang berlaku (bermeterai Rp. 6.000,-) 
			', 'created_at'=>'2016-04-18 11:15:22', 'updated_at'=>'2016-04-18 11:15:22'],
			 ['id'=>12, 'kelengkapan'=>'Struktur Organisasi
			', 'created_at'=>'2016-04-18 11:15:22', 'updated_at'=>'2016-04-18 11:15:22'],
			 ['id'=>13, 'kelengkapan'=>'Denah situasi  terhadap sarana lain 
			', 'created_at'=>'2016-04-18 11:15:22', 'updated_at'=>'2016-04-18 11:15:22'],
			 ['id'=>14, 'kelengkapan'=>'Denah lay-out bangunan disertai dengan ukuran yang proporsional 
			', 'created_at'=>'2016-04-18 11:15:22', 'updated_at'=>'2016-04-18 11:15:22'],
			 ['id'=>15, 'kelengkapan'=>'Hasil pemeriksaan kualitas air yang memenuhi syarat
			', 'created_at'=>'2016-04-18 11:15:22', 'updated_at'=>'2016-04-18 11:15:22'],
			 ['id'=>16, 'kelengkapan'=>'Daftar tarif dan jenis pelayanan
			', 'created_at'=>'2016-04-18 11:15:22', 'updated_at'=>'2016-04-18 11:15:22'],
			 ['id'=>17, 'kelengkapan'=>'Daftar ketenagaan dan uraian tugas
			', 'created_at'=>'2016-04-18 11:15:22', 'updated_at'=>'2016-04-18 11:15:22'],
			 ['id'=>18, 'kelengkapan'=>'Daftar obat-obatan yang digunakan
			', 'created_at'=>'2016-04-18 11:15:22', 'updated_at'=>'2016-04-18 11:15:22'],
			 ['id'=>19, 'kelengkapan'=>'Daftar peralatan medis dan non medis
			', 'created_at'=>'2016-04-18 11:15:22', 'updated_at'=>'2016-04-18 11:15:22'],
			 ['id'=>20, 'kelengkapan'=>'Standar Operation Procedur (SOP) yang ditandatangani oleh penanggung jawab teknis medis
			', 'created_at'=>'2016-04-18 11:15:22', 'updated_at'=>'2016-04-18 11:15:22'],
			 ['id'=>21, 'kelengkapan'=>'Persyaratan administrasi penanggung jawab teknis medis, meliputi : - Surat pengangkatan sebagai penanggungjawab teknis medis; - Surat Pernyataan bersedia sebagai penanggungjawab teknis medis (bermeterai Rp. 6.000,-); - FC KTP dan SIP; - FC sertifikat pelatihan bidang estetika medik yang diselenggarakan institusi pendidikan nasional / internasional atau organisasi profesi yang diakui pemerintah
			', 'created_at'=>'2016-04-18 11:15:22', 'updated_at'=>'2016-04-18 11:15:22'],
			 ];

      DB::table('verifikasiklinikkecantikans')->insert($verifikasiklinikkecantikans);
	}

}