<?php

// Composer: "fzaninotto/faker": "v1.3.0"
use Faker\Factory as Faker;

class VerifikasiklinikdialisisTableSeeder extends Seeder {

	public function run()
	{

		DB::table('verifikasiklinikdialises')->delete();

		$verifikasiklinikdialises = [
   		   ['id'=>1, 'kelengkapan'=>'Surat Permohonan izin dari pemilik  yang ditujukan kepada Ka. Dinkes (bermeterai Rp. 6.000,-) 
			', 'created_at'=>'2016-04-18 11:15:22', 'updated_at'=>'2016-04-18 11:15:22'],
            ['id'=>2, 'kelengkapan'=>'FC KTP (pemohon perorangan) / FC akte pendirian (pemohon yang berbentuk Badan Hukum)
			', 'created_at'=>'2016-04-18 11:15:22', 'updated_at'=>'2016-04-18 11:15:22'],
            ['id'=>3, 'kelengkapan'=>'FC ijazah, STR dan SIP dokter
			', 'created_at'=>'2016-04-18 11:15:22', 'updated_at'=>'2016-04-18 11:15:22'],
            ['id'=>4, 'kelengkapan'=>'FC ijazah, STR dan SIK perawat
			', 'created_at'=>'2016-04-18 11:15:22', 'updated_at'=>'2016-04-18 11:15:22'],
			 ['id'=>5,'kelengkapan'=>'FC NPWP pemohon
			', 'created_at'=>'2016-04-18 11:15:22', 'updated_at'=>'2016-04-18 11:15:22'],
			 ['id'=>6, 'kelengkapan'=>'Pasfoto pemohon uk. 4x6 = 4 lbr, uk. 2x3 = 1 lbr
			', 'created_at'=>'2016-04-18 11:15:22', 'updated_at'=>'2016-04-18 11:15:22'],
			 ['id'=>7, 'kelengkapan'=>'FC izin HO
			', 'created_at'=>'2016-04-18 11:15:22', 'updated_at'=>'2016-04-18 11:15:22'],
			 ['id'=>8, 'kelengkapan'=>'Proposal / Study Kelayakan
			', 'created_at'=>'2016-04-18 11:15:22', 'updated_at'=>'2016-04-18 11:15:22'],
			 ['id'=>9, 'kelengkapan'=>'Surat status bangunan : hak milik/sewa (dilampiri perjanjian sewa minimal 5 tahun) dan FC sertifikat tanah
			', 'created_at'=>'2016-04-18 11:15:22', 'updated_at'=>'2016-04-18 11:15:22'],
			 ['id'=>10, 'kelengkapan'=>'FC surat perjanjian kerjasama (MoU) pengelolaan limbah medis
			', 'created_at'=>'2016-04-18 11:15:22', 'updated_at'=>'2016-04-18 11:15:22'],
			 ['id'=>11, 'kelengkapan'=>'FC dokumen UKL-UPL
			', 'created_at'=>'2016-04-18 11:15:22', 'updated_at'=>'2016-04-18 11:15:22'],
			 ['id'=>12, 'kelengkapan'=>'Rekomendasi dari Dinas Kesehatan Provinsi
			', 'created_at'=>'2016-04-18 11:15:22', 'updated_at'=>'2016-04-18 11:15:22'],
			 ['id'=>13, 'kelengkapan'=>'Rekomendasi dari organisasi profesi (PERNEFRI)
			', 'created_at'=>'2016-04-18 11:15:22', 'updated_at'=>'2016-04-18 11:15:22'],
			 ['id'=>14, 'kelengkapan'=>'Rekomendasi dari Puskesmas setempat
			', 'created_at'=>'2016-04-18 11:15:22', 'updated_at'=>'2016-04-18 11:15:22'],
			 ['id'=>15, 'kelengkapan'=>'Surat Pernyataan dari pemilik dan penanggung jawab bersedia mentaati ketentuan dan peraturan perundang-undangan yang berlaku (bermeterai Rp. 6.000,-) 
			', 'created_at'=>'2016-04-18 11:15:22', 'updated_at'=>'2016-04-18 11:15:22'],
			 ['id'=>16, 'kelengkapan'=>'Surat Pernyataan penanggung jawab bersedia mengirim laporan kunjungan pasien ke Dinas Kesehatan (bermeterai Rp. 6.000,-) 
			', 'created_at'=>'2016-04-18 11:15:22', 'updated_at'=>'2016-04-18 11:15:22'],
			 ['id'=>17, 'kelengkapan'=>'Struktur Organisasi
			', 'created_at'=>'2016-04-18 11:15:22', 'updated_at'=>'2016-04-18 11:15:22'],
			 ['id'=>18, 'kelengkapan'=>'Denah situasi  terhadap sarana lain 
			', 'created_at'=>'2016-04-18 11:15:22', 'updated_at'=>'2016-04-18 11:15:22'],
			 ['id'=>19, 'kelengkapan'=>'Denah lay-out bangunan disertai dengan ukuran yang proporsional 
			', 'created_at'=>'2016-04-18 11:15:22', 'updated_at'=>'2016-04-18 11:15:22'],
			 ['id'=>20, 'kelengkapan'=>'Hasil pemeriksaan kualitas air yang memenuhi syarat
			', 'created_at'=>'2016-04-18 11:15:22', 'updated_at'=>'2016-04-18 11:15:22'],
			 ['id'=>21, 'kelengkapan'=>'Daftar tarif pelayanan
			', 'created_at'=>'2016-04-18 11:15:22', 'updated_at'=>'2016-04-18 11:15:22'],
			 ['id'=>22, 'kelengkapan'=>'Daftar ketenagaan dan uraian tugas
			', 'created_at'=>'2016-04-18 11:15:22', 'updated_at'=>'2016-04-18 11:15:22'],
			 ['id'=>23, 'kelengkapan'=>'Daftar peralatan 
			', 'created_at'=>'2016-04-18 11:15:22', 'updated_at'=>'2016-04-18 11:15:22'],
			 ['id'=>24, 'kelengkapan'=>'Standar Operation Procedur (SOP) yang ditandatangani oleh penanggung jawab teknis medis
			', 'created_at'=>'2016-04-18 11:15:22', 'updated_at'=>'2016-04-18 11:15:22'],
			 ['id'=>25, 'kelengkapan'=>'Persyaratan administrasi penanggung jawab teknis medis, meliputi :- Surat pengangkatan sebagai penanggungjawab teknis medis; - Surat Pernyataan bersedia sebagai penanggungjawab teknis medis (bermeterai Rp. 6.000,-); - FC KTP dan SIP; - FC sertifikat pelatihan yang diakui PERNEFRI
			', 'created_at'=>'2016-04-18 11:15:22', 'updated_at'=>'2016-04-18 11:15:22'],
			 ];

      	DB::table('verifikasiklinikdialises')->insert($verifikasiklinikdialises);

	}

}