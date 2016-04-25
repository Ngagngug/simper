<?php

// Composer: "fzaninotto/faker": "v1.3.0"
use Faker\Factory as Faker;

class PenggunasTableSeeder extends Seeder {

	public function run()
	{
		DB::table('penggunas')->delete();

		$penggunas = [
		    ['id'=>1, 'perijinan_id'=>1, 'lokasi'=>'Apotek A', 'nama'=>'Aunur Rofiq Mulyanto', 'noktp'=>'123456789', 'berlaku'=>'22-08-2017','tempatlahir'=>'Tegal', 'tanggallahir'=>'22-08-1993', 
		    'jeniskelamin'=>'Laki-laki', 'pekerjaan'=>'PNS', 'provinsi'=>'Jawa Tengah', 'kabupaten'=>'Tegal', 'kecamatan'=>'Tegal', 'desa'=>'Randugunting', 'alamat'=>'Arum Indah V', 
		    'kodepos'=>'52131', 'nohp'=>'085702666300', 'email'=>'husin.napi@gmail.com', 'verifikasi'=>'Proses Verifikasi', 'created_at'=>'2016-04-01 11:15:22', 'updated_at'=>'2016-04-01 11:15:22'],
		     ['id'=>2, 'perijinan_id'=>2, 'lokasi'=>'Apotek Rakyat A', 'nama'=>'Reni Hafsyah', 'noktp'=>'123456789', 'berlaku'=>'22-08-2017','tempatlahir'=>'Tegal', 'tanggallahir'=>'22-08-1993', 
		    'jeniskelamin'=>'Laki-laki', 'pekerjaan'=>'PNS', 'provinsi'=>'Jawa Tengah', 'kabupaten'=>'Tegal', 'kecamatan'=>'Tegal', 'desa'=>'Randugunting', 'alamat'=>'Arum Indah V', 
		    'kodepos'=>'52131', 'nohp'=>'085702666300', 'email'=>'husin.napi@gmail.com', 'verifikasi'=>'Proses Verifikasi', 'created_at'=>'2016-04-01 11:15:22', 'updated_at'=>'2016-04-01 11:15:22'],
      		['id'=>3, 'perijinan_id'=>3, 'lokasi'=>'Puskesmas A', 'nama'=>'Budi Cahyono', 'noktp'=>'123456789', 'berlaku'=>'22-08-2017','tempatlahir'=>'Tegal', 'tanggallahir'=>'22-08-1993', 
		    'jeniskelamin'=>'Laki-laki', 'pekerjaan'=>'PNS', 'provinsi'=>'Jawa Tengah', 'kabupaten'=>'Tegal', 'kecamatan'=>'Tegal', 'desa'=>'Randugunting', 'alamat'=>'Arum Indah V', 
		    'kodepos'=>'52131', 'nohp'=>'085702666300', 'email'=>'husin.napi@gmail.com', 'verifikasi'=>'Proses Verifikasi', 'created_at'=>'2016-04-01 11:15:22', 'updated_at'=>'2016-04-01 11:15:22'],
      		['id'=>4, 'perijinan_id'=>4, 'lokasi'=>'Klinik A', 'nama'=>'Sherly', 'noktp'=>'123456789', 'berlaku'=>'22-08-2017','tempatlahir'=>'Tegal', 'tanggallahir'=>'22-08-1993', 
		    'jeniskelamin'=>'Laki-laki', 'pekerjaan'=>'PNS', 'provinsi'=>'Jawa Tengah', 'kabupaten'=>'Tegal', 'kecamatan'=>'Tegal', 'desa'=>'Randugunting', 'alamat'=>'Arum Indah V', 
		    'kodepos'=>'52131', 'nohp'=>'085702666300', 'email'=>'husin.napi@gmail.com', 'verifikasi'=>'Proses Verifikasi', 'created_at'=>'2016-04-01 11:15:22', 'updated_at'=>'2016-04-01 11:15:22'],
      		['id'=>5, 'perijinan_id'=>5, 'lokasi'=>'Klinik Dialisis A', 'nama'=>'Rudi Hartono', 'noktp'=>'123456789', 'berlaku'=>'22-08-2017','tempatlahir'=>'Tegal', 'tanggallahir'=>'22-08-1993', 
		    'jeniskelamin'=>'Laki-laki', 'pekerjaan'=>'PNS', 'provinsi'=>'Jawa Tengah', 'kabupaten'=>'Tegal', 'kecamatan'=>'Tegal', 'desa'=>'Randugunting', 'alamat'=>'Arum Indah V', 
		    'kodepos'=>'52131', 'nohp'=>'085702666300', 'email'=>'husin.napi@gmail.com', 'verifikasi'=>'Proses Verifikasi', 'created_at'=>'2016-04-01 11:15:22', 'updated_at'=>'2016-04-01 11:15:22'],
      		['id'=>6, 'perijinan_id'=>6, 'lokasi'=>'Klinik Kecantikan Estetika A', 'nama'=>'Ina Versiana', 'noktp'=>'123456789', 'berlaku'=>'22-08-2017','tempatlahir'=>'Tegal', 'tanggallahir'=>'22-08-1993', 
		    'jeniskelamin'=>'Laki-laki', 'pekerjaan'=>'PNS', 'provinsi'=>'Jawa Tengah', 'kabupaten'=>'Tegal', 'kecamatan'=>'Tegal', 'desa'=>'Randugunting', 'alamat'=>'Arum Indah V', 
		    'kodepos'=>'52131', 'nohp'=>'085702666300', 'email'=>'husin.napi@gmail.com', 'verifikasi'=>'Proses Verifikasi', 'created_at'=>'2016-04-01 11:15:22', 'updated_at'=>'2016-04-01 11:15:22'],
      		['id'=>7, 'perijinan_id'=>7, 'lokasi'=>'Laboratorium Klinik Umum Pratama A', 'nama'=>'Septianingsih', 'noktp'=>'123456789', 'berlaku'=>'22-08-2017','tempatlahir'=>'Tegal', 'tanggallahir'=>'22-08-1993', 
		    'jeniskelamin'=>'Laki-laki', 'pekerjaan'=>'PNS', 'provinsi'=>'Jawa Tengah', 'kabupaten'=>'Tegal', 'kecamatan'=>'Tegal', 'desa'=>'Randugunting', 'alamat'=>'Arum Indah V', 
		    'kodepos'=>'52131', 'nohp'=>'085702666300', 'email'=>'husin.napi@gmail.com', 'verifikasi'=>'Proses Verifikasi', 'created_at'=>'2016-04-01 11:15:22', 'updated_at'=>'2016-04-01 11:15:22'],
      		['id'=>8, 'perijinan_id'=>8, 'lokasi'=>'Laboratorium Optik A', 'nama'=>'Resdiantoro', 'noktp'=>'123456789', 'berlaku'=>'22-08-2017','tempatlahir'=>'Tegal', 'tanggallahir'=>'22-08-1993', 
		    'jeniskelamin'=>'Laki-laki', 'pekerjaan'=>'PNS', 'provinsi'=>'Jawa Tengah', 'kabupaten'=>'Tegal', 'kecamatan'=>'Tegal', 'desa'=>'Randugunting', 'alamat'=>'Arum Indah V', 
		    'kodepos'=>'52131', 'nohp'=>'085702666300', 'email'=>'husin.napi@gmail.com', 'verifikasi'=>'Proses Verifikasi', 'created_at'=>'2016-04-02 11:15:22', 'updated_at'=>'2016-04-02 11:15:22'],
      		['id'=>9, 'perijinan_id'=>9, 'lokasi'=>'Optikal A', 'nama'=>'Cristina', 'noktp'=>'123456789', 'berlaku'=>'22-08-2017','tempatlahir'=>'Tegal', 'tanggallahir'=>'22-08-1993', 
		    'jeniskelamin'=>'Laki-laki', 'pekerjaan'=>'PNS', 'provinsi'=>'Jawa Tengah', 'kabupaten'=>'Tegal', 'kecamatan'=>'Tegal', 'desa'=>'Randugunting', 'alamat'=>'Arum Indah V', 
		    'kodepos'=>'52131', 'nohp'=>'085702666300', 'email'=>'husin.napi@gmail.com', 'verifikasi'=>'Proses Verifikasi', 'created_at'=>'2016-04-02 11:15:22', 'updated_at'=>'2016-04-02 11:15:22'],
      		['id'=>10, 'perijinan_id'=>10, 'lokasi'=>'Toko Obat A', 'nama'=>'Musae', 'noktp'=>'123456789', 'berlaku'=>'22-08-2017','tempatlahir'=>'Tegal', 'tanggallahir'=>'22-08-1993', 
		    'jeniskelamin'=>'Laki-laki', 'pekerjaan'=>'PNS', 'provinsi'=>'Jawa Tengah', 'kabupaten'=>'Tegal', 'kecamatan'=>'Tegal', 'desa'=>'Randugunting', 'alamat'=>'Arum Indah V', 
		    'kodepos'=>'52131', 'nohp'=>'085702666300', 'email'=>'husin.napi@gmail.com', 'verifikasi'=>'Proses Verifikasi', 'created_at'=>'2016-04-02 11:15:22', 'updated_at'=>'2016-04-02 11:15:22'],
      		['id'=>11, 'perijinan_id'=>11, 'lokasi'=>'Toko Alat Kesehatan A', 'nama'=>'Distandi', 'noktp'=>'123456789', 'berlaku'=>'22-08-2017','tempatlahir'=>'Tegal', 'tanggallahir'=>'22-08-1993', 
		    'jeniskelamin'=>'Laki-laki', 'pekerjaan'=>'PNS', 'provinsi'=>'Jawa Tengah', 'kabupaten'=>'Tegal', 'kecamatan'=>'Tegal', 'desa'=>'Randugunting', 'alamat'=>'Arum Indah V', 
		    'kodepos'=>'52131', 'nohp'=>'085702666300', 'email'=>'husin.napi@gmail.com', 'verifikasi'=>'Proses Verifikasi', 'created_at'=>'2016-04-02 11:15:22', 'updated_at'=>'2016-04-02 11:15:22'],
      		['id'=>12, 'perijinan_id'=>12, 'lokasi'=>'Rumah Sakit A', 'nama'=>'Cristina', 'noktp'=>'123456789', 'berlaku'=>'22-08-2017','tempatlahir'=>'Tegal', 'tanggallahir'=>'22-08-1993', 
		    'jeniskelamin'=>'Laki-laki', 'pekerjaan'=>'PNS', 'provinsi'=>'Jawa Tengah', 'kabupaten'=>'Tegal', 'kecamatan'=>'Tegal', 'desa'=>'Randugunting', 'alamat'=>'Arum Indah V', 
		    'kodepos'=>'52131', 'nohp'=>'085702666300', 'email'=>'husin.napi@gmail.com', 'verifikasi'=>'Proses Verifikasi', 'created_at'=>'2016-04-03 11:15:22', 'updated_at'=>'2016-04-03 11:15:22'],
      		['id'=>13, 'perijinan_id'=>13, 'lokasi'=>'Laboratorium Klinik Umum Madya A', 'nama'=>'Debby', 'noktp'=>'123456789', 'berlaku'=>'22-08-2017','tempatlahir'=>'Tegal', 'tanggallahir'=>'22-08-1993', 
		    'jeniskelamin'=>'Laki-laki', 'pekerjaan'=>'PNS', 'provinsi'=>'Jawa Tengah', 'kabupaten'=>'Tegal', 'kecamatan'=>'Tegal', 'desa'=>'Randugunting', 'alamat'=>'Arum Indah V', 
		    'kodepos'=>'52131', 'nohp'=>'085702666300', 'email'=>'husin.napi@gmail.com', 'verifikasi'=>'Proses Verifikasi', 'created_at'=>'2016-04-03 11:15:22', 'updated_at'=>'2016-04-03 11:15:22'],
      		['id'=>14, 'perijinan_id'=>14, 'lokasi'=>'Usaha Kecil Obat Tradisional A', 'nama'=>'Marufatul', 'noktp'=>'123456789', 'berlaku'=>'22-08-2017','tempatlahir'=>'Tegal', 'tanggallahir'=>'22-08-1993', 
		    'jeniskelamin'=>'Laki-laki', 'pekerjaan'=>'PNS', 'provinsi'=>'Jawa Tengah', 'kabupaten'=>'Tegal', 'kecamatan'=>'Tegal', 'desa'=>'Randugunting', 'alamat'=>'Arum Indah V', 
		    'kodepos'=>'52131', 'nohp'=>'085702666300', 'email'=>'husin.napi@gmail.com', 'verifikasi'=>'Proses Verifikasi', 'created_at'=>'2016-04-03 11:15:22', 'updated_at'=>'2016-04-03 11:15:22'],
      		['id'=>15, 'perijinan_id'=>15, 'lokasi'=>'Usaha Mikro Obat Tradisional A', 'nama'=>'Hermansyah', 'noktp'=>'123456789', 'berlaku'=>'22-08-2017','tempatlahir'=>'Tegal', 'tanggallahir'=>'22-08-1993', 
		    'jeniskelamin'=>'Laki-laki', 'pekerjaan'=>'PNS', 'provinsi'=>'Jawa Tengah', 'kabupaten'=>'Tegal', 'kecamatan'=>'Tegal', 'desa'=>'Randugunting', 'alamat'=>'Arum Indah V', 
		    'kodepos'=>'52131', 'nohp'=>'085702666300', 'email'=>'husin.napi@gmail.com', 'verifikasi'=>'Proses Verifikasi', 'created_at'=>'2016-04-03 11:15:22', 'updated_at'=>'2016-04-03 11:15:22'],
      		];

      DB::table('penggunas')->insert($penggunas);
	}

}