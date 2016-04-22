<?php

// Composer: "fzaninotto/faker": "v1.3.0"
use Faker\Factory as Faker;

class VerifikasirumahsakitsTableSeeder extends Seeder {

	public function run()
	{
		DB::table('verifikasirumahsakits')->delete();

		$verifikasirumahsakits = [
		    ['id'=>1, 'kelengkapan'=>'Permohonan dari Pemilik RS kepada Kepala BPMP2T Kabupaten Boyolali tentang SK Izin Pendirian RS (meterai Rp. 6.000,00), Tembusan : Ka Kantor Pelayanan Pajak Pratama Boyolali, Dinkes Kab. Boyolali.
			', 'created_at'=>'2016-04-18 11:15:22', 'updated_at'=>'2016-04-18 11:15:22'],
            ['id'=>2, 'kelengkapan'=>'Rekomendasi Dinas Kesehatan Kabupaten Boyolali
			', 'created_at'=>'2016-04-18 11:15:22', 'updated_at'=>'2016-04-18 11:15:22'],
            ['id'=>3, 'kelengkapan'=>'Fotocopy Akta Pendirian Badan Hukum yang sah (kecuali Intansi Pemerintah/Pemerintah Daerah)
			', 'created_at'=>'2016-04-18 11:15:22', 'updated_at'=>'2016-04-18 11:15:22'],
            ['id'=>4, 'kelengkapan'=>'Studi Kelayakan :	Kajian demografi, Sosial Ekonomi, Morbiditas-Mortalitas, Kebijakan & Regulasi, Aspek internal RS (Manajemen unit-unit pelayanan, Pelayanan Unggulan, Alih Teknologi Peralatan, Sistem Tarif, Rencana Kinerja & Keuangan)).	Kajian Kebutuhan Lahan, Bangunan, Prasarana, SDM, Peralatan, sesuai klas RS 	Kajian Kemampuan Pendanaan/Pembiayaan
			', 'created_at'=>'2016-04-18 11:15:22', 'updated_at'=>'2016-04-18 11:15:22'],
			 ['id'=>5,'kelengkapan'=>'Master Plan (Strategi pengembangan aset min. 10 tahun kedepan).
			', 'created_at'=>'2016-04-18 11:15:22', 'updated_at'=>'2016-04-18 11:15:22'],
			 ['id'=>6, 'kelengkapan'=>'Detail Enginering Design (DED) : Gambar perencanaan lengkap RS yang akan dibangun (Arsitektur, Struktur Mekanikal & Elektrikal)
			', 'created_at'=>'2016-04-18 11:15:22', 'updated_at'=>'2016-04-18 11:15:22'],
			 ['id'=>7, 'kelengkapan'=>'Dokumen Pengelolaan & Pemantauan Lingkungan (UKL, UPL, AMDAL, sesuai klasifikasi RS)
			', 'created_at'=>'2016-04-18 11:15:22', 'updated_at'=>'2016-04-18 11:15:22'],
			 ['id'=>8, 'kelengkapan'=>'Fotocopy Sertifikat Tanah/Bukti Kepemilikan Tanah Atas Nama Badan Hukum Pemilik RS
			', 'created_at'=>'2016-04-18 11:15:22', 'updated_at'=>'2016-04-18 11:15:22'],
			 ['id'=>9, 'kelengkapan'=>'Izin Undang-undang Gangguan (Hnder Ordonantie/HO)
			', 'created_at'=>'2016-04-18 11:15:22', 'updated_at'=>'2016-04-18 11:15:22'],
			 ['id'=>10, 'kelengkapan'=>'Surat Izin Tempat Usaha (SITU)
			', 'created_at'=>'2016-04-18 11:15:22', 'updated_at'=>'2016-04-18 11:15:22'],
			 ['id'=>11, 'kelengkapan'=>'Izin Mendirikan Bangunan (IMB)
			', 'created_at'=>'2016-04-18 11:15:22', 'updated_at'=>'2016-04-18 11:15:22'],
			 ];

      DB::table('verifikasirumahsakits')->insert($verifikasirumahsakits);
	}

}