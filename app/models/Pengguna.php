<?php

class Pengguna extends BaseModel {

	// Add your validation rules here
	public static $rules = [
		'perijinan_id' => 'required|exists:perijinans,id',
		'lokasi' => 'required',
		'nama' => 'required',
		'noktp' => 'numeric',
		'berlaku' => 'required',
		'tempatlahir' => 'required',
		'tanggallahir' => 'required',
		'jeniskelamin' => 'required',
		'pekerjaan' => 'required',
		'provinsi' => 'required',
		'kabupaten' => 'required',
		'kecamatan' => 'required',
		'desa' => 'required',
		'alamat' => 'required',
		'kodepos' => 'numeric',
		'nohp' => 'numeric',
		'email' => 'required|email',
		'verifikasi' => 'required',
	];

	// Add your validation rules here
	public static $verifikasirules = [
	];

	// Don't forget to fill this array
	protected $fillable = ['perijinan_id', 'lokasi', 'nama', 'noktp', 'berlaku', 'tempatlahir','tanggallahir', 'jeniskelamin', 'pekerjaan', 'provinsi' , 'kabupaten', 'kecamatan', 'desa', 'alamat', 'kodepos', 'nohp', 'email', 'verifikasi'];
	//protected $fillable = ['nama'];

    public function perijinan()
    {
        return $this->belongsTo('Perijinan');
    }

}