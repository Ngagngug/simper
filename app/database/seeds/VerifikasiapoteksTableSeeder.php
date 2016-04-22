<?php

// Composer: "fzaninotto/faker": "v1.3.0"
use Faker\Factory as Faker;

class VerifikasiapoteksTableSeeder extends Seeder {

	public function run()
	{
		DB::table('verifikasiapoteks')->delete();

		$verifikasiapoteks = [
		    ['id'=>1, 'kelengkapan'=>'Surat Permohonan perpanjangan SIA dari APA yang ditujukan kepada Ka. Dinkes (bermeterai Rp. 6.000,-) 
			', 'created_at'=>'2016-04-18 11:15:22', 'updated_at'=>'2016-04-18 11:15:22'],
            ['id'=>2, 'kelengkapan'=>'FC STRA dan SIPA 
			', 'created_at'=>'2016-04-18 11:15:22', 'updated_at'=>'2016-04-18 11:15:22'],
            ['id'=>3, 'kelengkapan'=>'Asli dan FC SIA lama
			', 'created_at'=>'2016-04-18 11:15:22', 'updated_at'=>'2016-04-18 11:15:22'],
            ['id'=>4, 'kelengkapan'=>'FC KTP APA
			', 'created_at'=>'2016-04-18 11:15:22', 'updated_at'=>'2016-04-18 11:15:22'],
			 ['id'=>5,'kelengkapan'=>'Denah bangunan apotek yang diketahui oleh IAI (apabila terjadi perubahan lay-out)
			', 'created_at'=>'2016-04-18 11:15:22', 'updated_at'=>'2016-04-18 11:15:22'],
			 ['id'=>6, 'kelengkapan'=>'Surat status bangunan : hak milik/sewa (dilampiri perjanjian sewa minimal 3 tahun) dan FC sertifikat tanah
			', 'created_at'=>'2016-04-18 11:15:22', 'updated_at'=>'2016-04-18 11:15:22'],
			 ['id'=>7, 'kelengkapan'=>'Daftar calon Tenaga Teknis Kefarmasian (nama, alamat, tgl lulus dan no. STRTTK) dengan dilampiri : - Surat lolos butuh dari tmpt kerja sebelumnya (bagi TTK pindahan dari Kab./Prov lain
			', 'created_at'=>'2016-04-18 11:15:22', 'updated_at'=>'2016-04-18 11:15:22'],
			 ['id'=>8, 'kelengkapan'=>'Daftar alat perlengkapan apotek (terperinci)
			', 'created_at'=>'2016-04-18 11:15:22', 'updated_at'=>'2016-04-18 11:15:22'],
			 ['id'=>9, 'kelengkapan'=>'Akte Notaris perjanjian kerjasama calon APA dengan PSA
			', 'created_at'=>'2016-04-18 11:15:22', 'updated_at'=>'2016-04-18 11:15:22'],
			 ['id'=>10, 'kelengkapan'=>'Surat keterangan sehat dari dokter yang bekerja di rumah sakit pemerintah atau puskesmas untuk melaksanakan tugas Apoteker
			', 'created_at'=>'2016-04-18 11:15:22', 'updated_at'=>'2016-04-18 11:15:22'],
			 ['id'=>11, 'kelengkapan'=>'Rekomendasi dari IAI
			', 'created_at'=>'2016-04-18 11:15:22', 'updated_at'=>'2016-04-18 11:15:22'],
			 ['id'=>12, 'kelengkapan'=>'FC izin HO
			', 'created_at'=>'2016-04-18 11:15:22', 'updated_at'=>'2016-04-18 11:15:22'],
			 ['id'=>13, 'kelengkapan'=>'Pasfoto berwarna APA Uk. 4x6 = 2 lembar, uk. 3x4 = 6 lembar
			', 'created_at'=>'2016-04-18 11:15:22', 'updated_at'=>'2016-04-18 11:15:22'],
      ];

      DB::table('verifikasiapoteks')->insert($verifikasiapoteks);
	}

}