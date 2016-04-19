<?php

// Composer: "fzaninotto/faker": "v1.3.0"
use Faker\Factory as Faker;

class VerifikasikliniksTableSeeder extends Seeder {

	public function run()
	{
		DB::table('verifikasikliniks')->delete();

		$verifikasikliniks = [
		    ['id'=>1, 'kelengkapan'=>'Permohonan dari Pemilik Klinik kepada Kepala Dinas Kesehatan Kabupaten Boyolali tentang Rekomendasi Izin Pendirian Klinik (meterai Rp. 6.000,00),.
			', 'created_at'=>'2016-04-18 11:15:22', 'updated_at'=>'2016-04-18 11:15:22'],
            ['id'=>2, 'kelengkapan'=>'Fotocopy KTP pemohon (pemilik).
			', 'created_at'=>'2016-04-18 11:15:22', 'updated_at'=>'2016-04-18 11:15:22'],
            ['id'=>3, 'kelengkapan'=>'Fotocopy Akta Pendirian Badan Hukum yang sah untuk kllinik rawat inap, Fotocopy akta pendirian badan usaha  untuk klinik rawat jalan kecuali untuk kepemilikan perorangan.
			', 'created_at'=>'2016-04-18 11:15:22', 'updated_at'=>'2016-04-18 11:15:22'],
            ['id'=>4, 'kelengkapan'=>'a.  Kajian demografi, Sosial Ekonomi, Morbiditas-Mortalitas, Kebijakan & Regulasi, Aspek internal klinik  (Manajemen unit-unit pelayanan, Pelayanan Unggulan, Alih Teknologi Peralatan, Sistem Tarif, Rencana Kinerja & Keuangan)). b.  Kajian Kebutuhan Lahan, Bangunan, Prasarana, SDM, Peralatan, sesuai jenis klinik. c. Kajian Kemampuan Pendanaan/Pembiayaan
			', 'created_at'=>'2016-04-18 11:15:22', 'updated_at'=>'2016-04-18 11:15:22'],
			 ['id'=>5,'kelengkapan'=>'Detail Enginering Design (DED) : Gambar perencanaan lengkap klinik yang akan dibangun (Arsitektur, Struktur Mekanikal & Elektrikal)
			', 'created_at'=>'2016-04-18 11:15:22', 'updated_at'=>'2016-04-18 11:15:22'],
			 ['id'=>6, 'kelengkapan'=>'Dokumen Pengelolaan & Pemantauan Lingkungan (UKL-UPL bagi klinik rawat inap dan SPPL bagi klinik rawat jalan.
			', 'created_at'=>'2016-04-18 11:15:22', 'updated_at'=>'2016-04-18 11:15:22'],
			 ['id'=>7, 'kelengkapan'=>'Fotocopy Sertifikat Tanah/Bukti Kepemilikan lain yang sah, atau surat kontrak minimal jangka waktu (lima) tahun.
			', 'created_at'=>'2016-04-18 11:15:22', 'updated_at'=>'2016-04-18 11:15:22'],
			 ['id'=>8, 'kelengkapan'=>'Izin Undang-undang Gangguan (Hnder Ordonantie/HO)
			', 'created_at'=>'2016-04-18 11:15:22', 'updated_at'=>'2016-04-18 11:15:22'],
			 ['id'=>9, 'kelengkapan'=>'Surat Izin Tanda Daftar Perusahaan (TDP)
			', 'created_at'=>'2016-04-18 11:15:22', 'updated_at'=>'2016-04-18 11:15:22'],
			 ['id'=>10, 'kelengkapan'=>'Izin Mendirikan Bangunan (IMB)
			', 'created_at'=>'2016-04-18 11:15:22', 'updated_at'=>'2016-04-18 11:15:22'],
			 ];

      DB::table('verifikasikliniks')->insert($verifikasikliniks);
	}

}