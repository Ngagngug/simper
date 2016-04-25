<?php

// Composer: "fzaninotto/faker": "v1.3.0"
use Faker\Factory as Faker;

class VerifikasilabklinikumummadyasTableSeeder extends Seeder {

	public function run()
	{
		DB::table('verifikasilabklinikumummadyas')->delete();

		$verifikasilabklinikumummadyas = [
		    ['id'=>1, 'kelengkapan'=>'Surat permohonan pemilik kepada Kepala Dinas Kesehatan Kab. Boyolali untuk rekomendasi izin
			', 'created_at'=>'2016-04-18 11:15:22', 'updated_at'=>'2016-04-18 11:15:22'],
            ['id'=>2, 'kelengkapan'=>'FC akta pendirian Badan Hukum (bagi penyelenggara/ pemohon dari swasta)
			', 'created_at'=>'2016-04-18 11:15:22', 'updated_at'=>'2016-04-18 11:15:22'],
            ['id'=>3, 'kelengkapan'=>'FC akta pembentukan Unit Pelaksana Teknis di bidang kesehatan/instansi pemerintah/lembaga Teknis Daerah ( bagi penyelenggara/pemohon dari pemerintah/pemerintah daaerah)
			', 'created_at'=>'2016-04-18 11:15:22', 'updated_at'=>'2016-04-18 11:15:22'],
            ['id'=>4, 'kelengkapan'=>'FC SK pengangkatan dari pemilik sebagian Penanggungjawab  Laboratorium Klinik
			', 'created_at'=>'2016-04-18 11:15:22', 'updated_at'=>'2016-04-18 11:15:22'],
			 ['id'=>5,'kelengkapan'=>'Fotokopi SIP di laboratorium bagi dokter penanggung jawab
			', 'created_at'=>'2016-04-18 11:15:22', 'updated_at'=>'2016-04-18 11:15:22'],
			 ['id'=>6, 'kelengkapan'=>'FC ijasah, KTP dan surat keterangan sehat dari dokter yang bekerja di RS pemerintah atau puskesmas bagi doker penanggungjawab
			', 'created_at'=>'2016-04-18 11:15:22', 'updated_at'=>'2016-04-18 11:15:22'],
			 ['id'=>7, 'kelengkapan'=>'Surat izin atasan (bagi penanggungjawab PNS, anggota TNI dan karyawan instansi Pemerintah lainnya)
			', 'created_at'=>'2016-04-18 11:15:22', 'updated_at'=>'2016-04-18 11:15:22'],
			 ['id'=>8, 'kelengkapan'=>'Surat Pernyataan Kesanggupan sebagai Penanggungjawab Teknis (bermaterai Rp 6.000,-)
			', 'created_at'=>'2016-04-18 11:15:22', 'updated_at'=>'2016-04-18 11:15:22'],
			 ['id'=>9, 'kelengkapan'=>'Surat Pernyataan kesediaan mengikuti Program Pemantapan mutu eksternal (bermaterai Rp 6.000,-)
			', 'created_at'=>'2016-04-18 11:15:22', 'updated_at'=>'2016-04-18 11:15:22'],
			 ['id'=>10, 'kelengkapan'=>'Surat Pernyataan kesanggupan masing2 tenaga teknis/administrasi (bermaterai Rp 6.000,-)
			', 'created_at'=>'2016-04-18 11:15:22', 'updated_at'=>'2016-04-18 11:15:22'],
			  ['id'=>11, 'kelengkapan'=>'Fotokopi KTP pemohon
			', 'created_at'=>'2016-04-18 11:15:22', 'updated_at'=>'2016-04-18 11:15:22'],
			  ['id'=>12, 'kelengkapan'=>'surat prnyataan dari pemilik dan penanggung jawab laboratorium sanggup mentaati peraturan perundang-undangan yang berlaku (bermaterai Rp 6.000,-)
			', 'created_at'=>'2016-04-18 11:15:22', 'updated_at'=>'2016-04-18 11:15:22'],
			  ['id'=>13, 'kelengkapan'=>'Fotokopi Surat Pernyataan Kesanggupan Pengelolaan dan Pemantauan Lingkungan Hidup (SPPL)
			', 'created_at'=>'2016-04-18 11:15:22', 'updated_at'=>'2016-04-18 11:15:22'],
			  ['id'=>14, 'kelengkapan'=>'Ketenagaan sesuai krteria dan kemampuan pemeriksaan  (dilengkapi daftar ketenagaan, FC ijasah, STR dan SIK dari tenaga laboratorium)
			', 'created_at'=>'2016-04-18 11:15:22', 'updated_at'=>'2016-04-18 11:15:22'],
			  ['id'=>15, 'kelengkapan'=>'Surat status bangunan : hak  milik/ sewa (dilampiri perjanjian sewa) dan FC sertifikat tanah
			', 'created_at'=>'2016-04-18 11:15:22', 'updated_at'=>'2016-04-18 11:15:22'],
			  ['id'=>16, 'kelengkapan'=>'Denah situasi laboratorium terhadap sarana lain
			', 'created_at'=>'2016-04-18 11:15:22', 'updated_at'=>'2016-04-18 11:15:22'],
			  ['id'=>17, 'kelengkapan'=>'Denah lay-out laboratorium disertai dengan ukuran yang proporsional 
			', 'created_at'=>'2016-04-18 11:15:22', 'updated_at'=>'2016-04-18 11:15:22'],
			  ['id'=>18, 'kelengkapan'=>'Daftar perlatan laboratorium (sarana dan prasarana) sesuai peraturan Perundang-undangan
			', 'created_at'=>'2016-04-18 11:15:22', 'updated_at'=>'2016-04-18 11:15:22'],
			  ['id'=>19, 'kelengkapan'=>'FC izin HO
			', 'created_at'=>'2016-04-18 11:15:22', 'updated_at'=>'2016-04-18 11:15:22'],
			  ['id'=>20, 'kelengkapan'=>'FC hasil pemeriksaan kualitas air
			', 'created_at'=>'2016-04-18 11:15:22', 'updated_at'=>'2016-04-18 11:15:22'],
			  ['id'=>21, 'kelengkapan'=>'FC MoU pengelolaan limbah medis
			', 'created_at'=>'2016-04-18 11:15:22', 'updated_at'=>'2016-04-18 11:15:22'],
			  ['id'=>22, 'kelengkapan'=>'FC NPWP pemilik
			', 'created_at'=>'2016-04-18 11:15:22', 'updated_at'=>'2016-04-18 11:15:22'],
			  ['id'=>23, 'kelengkapan'=>'Struktur organisasi laboratorium dan tupoksi setiap karyawan
			', 'created_at'=>'2016-04-18 11:15:22', 'updated_at'=>'2016-04-18 11:15:22'],
			  ['id'=>24, 'kelengkapan'=>'pas foto berwarna ukuran 4x6 = 3 lbr, uk. 3x4 = 2 lbr
			', 'created_at'=>'2016-04-18 11:15:22', 'updated_at'=>'2016-04-18 11:15:22'],
			   ['id'=>25, 'kelengkapan'=>'Asli dan fotokopi Surat Izin Laboratorium yang lama (bagi yang mengajukan perpanjangan)
			', 'created_at'=>'2016-04-18 11:15:22', 'updated_at'=>'2016-04-18 11:15:22'],
			 ];

      DB::table('verifikasilabklinikumummadyas')->insert($verifikasilabklinikumummadyas);
	}

}