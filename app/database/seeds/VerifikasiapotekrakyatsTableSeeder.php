<?php

// Composer: "fzaninotto/faker": "v1.3.0"
use Faker\Factory as Faker;

class VerifikasiapotekrakyatsTableSeeder extends Seeder {

	public function run()
	{
		DB::table('verifikasiapotekrakyats')->delete();

		$verifikasiapotekrakyats = [
		    ['id'=>1, 'kelengkapan'=>'Surat Permohonan Surat Izin Apotek Rakyat dari APA yang ditujukan kepada Ka. Dinkes (bermeterai Rp. 6.000,-) 
			', 'created_at'=>'2016-04-18 11:15:22', 'updated_at'=>'2016-04-18 11:15:22'],
            ['id'=>2, 'kelengkapan'=>'FC STRA dan SIPA 
			', 'created_at'=>'2016-04-18 11:15:22', 'updated_at'=>'2016-04-18 11:15:22'],
            ['id'=>3, 'kelengkapan'=>'FC KTP APA
			', 'created_at'=>'2016-04-18 11:15:22', 'updated_at'=>'2016-04-18 11:15:22'],
            ['id'=>4, 'kelengkapan'=>'Surat Pernyataan tempat tinggal/domisili secara nyata diketahui oleh IAI (bermeterai Rp. 6.000,-) 
			', 'created_at'=>'2016-04-18 11:15:22', 'updated_at'=>'2016-04-18 11:15:22'],
			 ['id'=>5,'kelengkapan'=>'Denah situasi calon Apotek Rakyat terhadap sarana lain yang diketahui oleh IAI
			', 'created_at'=>'2016-04-18 11:15:22', 'updated_at'=>'2016-04-18 11:15:22'],
			 ['id'=>6, 'kelengkapan'=>'Denah lay-out Apotek Rakyat disertai dengan ukuran yang proporsional yang diketahui oleh IAI
			', 'created_at'=>'2016-04-18 11:15:22', 'updated_at'=>'2016-04-18 11:15:22'],
			 ['id'=>7, 'kelengkapan'=>'Surat status bangunan : hak milik/sewa (dilampiri perjanjian sewa minimal 3 tahun) dan FC sertifikat tanah
			', 'created_at'=>'2016-04-18 11:15:22', 'updated_at'=>'2016-04-18 11:15:22'],
			 ['id'=>8, 'kelengkapan'=>'Apabila dibantu TTK, agar melampirkan : - FC ijazah, STRTTK dan SIK TTK; - Surat lolos butuh dari tmpt kerja sebelumnya (bagi TTK pindahan dari Kab./Prov lain
			', 'created_at'=>'2016-04-18 11:15:22', 'updated_at'=>'2016-04-18 11:15:22'],
			 ['id'=>9, 'kelengkapan'=>'Daftar alat perlengkapan calon Apotek Rakyat (terperinci)
			', 'created_at'=>'2016-04-18 11:15:22', 'updated_at'=>'2016-04-18 11:15:22'],
			 ['id'=>10, 'kelengkapan'=>'Surat Pernyataan kepemilikan perlengkapan calon Apotek Rakyat (bermeterai Rp. 6.000,-) 
			', 'created_at'=>'2016-04-18 11:15:22', 'updated_at'=>'2016-04-18 11:15:22'],
			 ['id'=>11, 'kelengkapan'=>'Surat Pernyataan dari calon APA bahwa calon APA tidak bekerja tetap pada perusahaan farmasi lain dan tidak menjadi APA di apotek lain (bermeterai Rp. 6.000,-)
			', 'created_at'=>'2016-04-18 11:15:22', 'updated_at'=>'2016-04-18 11:15:22'],
			 ['id'=>12, 'kelengkapan'=>'Surat izin atasan ( bagi pemohon PNS, anggota TNI dan karyawan instansi pemerintah lainnya)
			', 'created_at'=>'2016-04-18 11:15:22', 'updated_at'=>'2016-04-18 11:15:22'],
			 ['id'=>13, 'kelengkapan'=>'Akte Notaris perjanjian kerjasama calon APA Rakyat dengan PSA Rakyat
			', 'created_at'=>'2016-04-18 11:15:22', 'updated_at'=>'2016-04-18 11:15:22'],
			 ['id'=>14, 'kelengkapan'=>'Surat Pernyataan calon PSA Rakyat tidak terlibat pelanggaran peraturan perundang-undangan di bidang obat (bermeterai Rp. 6.000,-)
			', 'created_at'=>'2016-04-18 11:15:22', 'updated_at'=>'2016-04-18 11:15:22'],
			 ['id'=>15, 'kelengkapan'=>'Surat keterangan sehat dari dokter yang bekerja di rumah sakit pemerintah atau puskesmas untuk melaksanakan tugas Apoteker
			', 'created_at'=>'2016-04-18 11:15:22', 'updated_at'=>'2016-04-18 11:15:22'],
			 ['id'=>16, 'kelengkapan'=>'Lolos butuh dari Ka. Dinkes Prov (bagi pemohon yg pindah dari Prov. Lain) dan dari Ka. Dinkes Kab/Kot bagi yang pindah dari kabupaten//kota lain
			', 'created_at'=>'2016-04-18 11:15:22', 'updated_at'=>'2016-04-18 11:15:22'],
			 ['id'=>17, 'kelengkapan'=>'Daftar kepustakaan wajib Apotek Rakyat
			', 'created_at'=>'2016-04-18 11:15:22', 'updated_at'=>'2016-04-18 11:15:22'],
			 ['id'=>18, 'kelengkapan'=>'Rekomendasi dari IAI
			', 'created_at'=>'2016-04-18 11:15:22', 'updated_at'=>'2016-04-18 11:15:22'],
			 ['id'=>19, 'kelengkapan'=>'FC izin HO
			', 'created_at'=>'2016-04-18 11:15:22', 'updated_at'=>'2016-04-18 11:15:22'],
			 ['id'=>20, 'kelengkapan'=>'Surat Pernyataan calon APA Rakyat dan PSA Rakyat sanggup mentaati ketentuan dan peraturan perundang-undangan yang berlaku (bermeterai Rp. 6.000,-)  
			', 'created_at'=>'2016-04-18 11:15:22', 'updated_at'=>'2016-04-18 11:15:22'],
			 ['id'=>21, 'kelengkapan'=>'FC NPWP PSA Rakyat
			', 'created_at'=>'2016-04-18 11:15:22', 'updated_at'=>'2016-04-18 11:15:22'],
			 ['id'=>22, 'kelengkapan'=>'Pasfoto berwarna APA Uk. 4x6 = 2 lembar, uk. 3x4 = 6 lembar
			', 'created_at'=>'2016-04-18 11:15:22', 'updated_at'=>'2016-04-18 11:15:22'],
			 ['id'=>23, 'kelengkapan'=>'FC Surat Pernyataan Kesanggupan Pengelolaan dan Pemantauan Lingkungan Hidup (SPPL)
			', 'created_at'=>'2016-04-18 11:15:22', 'updated_at'=>'2016-04-18 11:15:22'],
      ];

      DB::table('verifikasiapotekrakyats')->insert($verifikasiapotekrakyats);
	}

}