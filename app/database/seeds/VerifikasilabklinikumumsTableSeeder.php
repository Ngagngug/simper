<?php

// Composer: "fzaninotto/faker": "v1.3.0"
use Faker\Factory as Faker;

class VerifikasilabklinikumumsTableSeeder extends Seeder {

	public function run()
	{
		DB::table('verifikasilabklinikumums')->delete();

		$verifikasilabklinikumums = [
		    ['id'=>1, 'kelengkapan'=>'Surat Permohonan pemilik kepada Ka. Dinkes (bermeterai Rp. 6.000,-) 
			', 'created_at'=>'2016-04-18 11:15:22', 'updated_at'=>'2016-04-18 11:15:22'],
            ['id'=>2, 'kelengkapan'=>'FC Akte pendirian Badan Hukum pemilik (bagi yg berbadan hukum)
			', 'created_at'=>'2016-04-18 11:15:22', 'updated_at'=>'2016-04-18 11:15:22'],
            ['id'=>3, 'kelengkapan'=>'FC SK pengangkatan dari pemilik sebagai Penanggungjawab Laboratorium Klinik
			', 'created_at'=>'2016-04-18 11:15:22', 'updated_at'=>'2016-04-18 11:15:22'],
            ['id'=>4, 'kelengkapan'=>'Surat izin atasan (bagi penanggungjawab PNS, anggota TNI dan karyawan instansi pemerintah lainnya)
			', 'created_at'=>'2016-04-18 11:15:22', 'updated_at'=>'2016-04-18 11:15:22'],
			 ['id'=>5,'kelengkapan'=>'Surat Pernyataan kesanggupan sebagai Penanggungjawab Teknis (bermeterai Rp. 6.000,-) 
			', 'created_at'=>'2016-04-18 11:15:22', 'updated_at'=>'2016-04-18 11:15:22'],
			 ['id'=>6, 'kelengkapan'=>'Surat Pernyataan kesediaan mengikuti Program Pemantapan Mutu Quality Control dari ILKI (bermeterai Rp. 6.000,-) 
			', 'created_at'=>'2016-04-18 11:15:22', 'updated_at'=>'2016-04-18 11:15:22'],
			 ['id'=>7, 'kelengkapan'=>'Surat Pernyataan kesanggupan masing2 tenaga teknis / administrasi (bermeterai Rp. 6.000,-) 
			', 'created_at'=>'2016-04-18 11:15:22', 'updated_at'=>'2016-04-18 11:15:22'],
			 ['id'=>8, 'kelengkapan'=>'SIP di laboratorium bagi dokter penanggungjawab
			', 'created_at'=>'2016-04-18 11:15:22', 'updated_at'=>'2016-04-18 11:15:22'],
			 ['id'=>9, 'kelengkapan'=>'FC ijazah, KTP dan surat keterangan sehat dari dokter yg bekerja di RS pemerintah atau puskesmas bagi dokter penanggungjawab
			', 'created_at'=>'2016-04-18 11:15:22', 'updated_at'=>'2016-04-18 11:15:22'],
			 ['id'=>10, 'kelengkapan'=>'FC KTP dan NPWP pemohon (pemilik)
			', 'created_at'=>'2016-04-18 11:15:22', 'updated_at'=>'2016-04-18 11:15:22'],
			  ['id'=>11, 'kelengkapan'=>'Surat Pernyataan dari pemilik dan penanggungjawab laboratorium sanggup mentaati peraturan perundang-undangan yang berlaku (bermeterai Rp. 6.000,-) 
			', 'created_at'=>'2016-04-18 11:15:22', 'updated_at'=>'2016-04-18 11:15:22'],
			  ['id'=>12, 'kelengkapan'=>'Daftar ketenagaan sesuai kriteria dan kemampuan pemeriksaan (dilampiri FC ijazah, STR dan SIK tenaga laboratorium)
			', 'created_at'=>'2016-04-18 11:15:22', 'updated_at'=>'2016-04-18 11:15:22'],
			  ['id'=>13, 'kelengkapan'=>'Surat status bangunan : hak milik/sewa (dilampiri perjanjian sewa minimal 3 tahun) dan FC sertifikat tanah
			', 'created_at'=>'2016-04-18 11:15:22', 'updated_at'=>'2016-04-18 11:15:22'],
			  ['id'=>14, 'kelengkapan'=>'Denah situasi laboratorium terhadap sarana lain
			', 'created_at'=>'2016-04-18 11:15:22', 'updated_at'=>'2016-04-18 11:15:22'],
			  ['id'=>15, 'kelengkapan'=>'Denah lay-out laboratorium disertai dengan ukuran yg proporsional
			', 'created_at'=>'2016-04-18 11:15:22', 'updated_at'=>'2016-04-18 11:15:22'],
			  ['id'=>16, 'kelengkapan'=>'Daftar peralatan laboratorium (sarana dan prasarana ) sesuai peraturan perundang-undangan
			', 'created_at'=>'2016-04-18 11:15:22', 'updated_at'=>'2016-04-18 11:15:22'],
			  ['id'=>17, 'kelengkapan'=>'Daftar tarif dan jenis pelayanan
			', 'created_at'=>'2016-04-18 11:15:22', 'updated_at'=>'2016-04-18 11:15:22'],
			  ['id'=>18, 'kelengkapan'=>'FC izin HO
			', 'created_at'=>'2016-04-18 11:15:22', 'updated_at'=>'2016-04-18 11:15:22'],
			  ['id'=>19, 'kelengkapan'=>'FC hasil pemeriksaan kualitas air (bakteriologis dan kimiawi)
			', 'created_at'=>'2016-04-18 11:15:22', 'updated_at'=>'2016-04-18 11:15:22'],
			  ['id'=>20, 'kelengkapan'=>'FC Surat Pernyataan Kesanggupan Pengelolaan dan Pemantauan Lingkungan Hidup (SPPL)
			', 'created_at'=>'2016-04-18 11:15:22', 'updated_at'=>'2016-04-18 11:15:22'],
			  ['id'=>21, 'kelengkapan'=>'FC MoU pengelolaan limbah medis (bagi laboratorium klinik)
			', 'created_at'=>'2016-04-18 11:15:22', 'updated_at'=>'2016-04-18 11:15:22'],
			  ['id'=>22, 'kelengkapan'=>'Struktur organisasi laboratorium dan tupoksi setiap karyawan
			', 'created_at'=>'2016-04-18 11:15:22', 'updated_at'=>'2016-04-18 11:15:22'],
			  ['id'=>23, 'kelengkapan'=>'Pasfoto berwarna Uk. 4x6 = 5 lembar, uk. 3x4 = 1 lembar
			', 'created_at'=>'2016-04-18 11:15:22', 'updated_at'=>'2016-04-18 11:15:22'],
			  ['id'=>24, 'kelengkapan'=>'Asli dan FC Surat Izin Laboratorium yang lama (bagi yg mengajukan perpanjangan)
			', 'created_at'=>'2016-04-18 11:15:22', 'updated_at'=>'2016-04-18 11:15:22'],
			 ];

      DB::table('verifikasilabklinikumums')->insert($verifikasilabklinikumums);
	}

}