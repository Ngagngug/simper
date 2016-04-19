<?php

class Perijinan extends BaseModel {

	// Add your validation rules here
	public static $rules = [
		'nama' => 'required|unique:perijinans,nama,:id'
	];

	// Don't forget to fill this array
	protected $fillable = ['nama'];

/*	public function penggunas()
    {
        return $this->belongsToMany('Pengguna')->withPivot('verifikasi')->withTimestamps();
    }*/
    /**
     * The "booting" method of the model.
     *
     * @return void
     */
    public static function boot()
    {
        parent::boot();

        self::deleting(function($perijinan)
        {
            // mengecek apakah penulis masih punya buku
            if ($perijinan->penggunas->count() > 0) {
                $html = 'Perijinan tidak bisa dihapus karena masih memiliki pengguna : ';
                $html .= '<ul>';
                foreach ($perijinan->penggunas as $pengguna) {
                    $html .= "<li>$pengguna->nama</li>";
                }
                $html .= '</ul>';
                Session::flash('errorMessage', $html);
                return false;
            }
        });
    }

     public function penggunas()
    {
        return $this->hasMany('Pengguna');
    }

}