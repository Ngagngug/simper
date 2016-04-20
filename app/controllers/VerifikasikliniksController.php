<?php

class VerifikasikliniksController extends \BaseController {

	/**
	 * Display a listing of verifikasikliniks
	 *
	 * @return Response
	 */
	public function index()
	{
		//$matchThese = ['perijinan_id' => '1', 'verifikasi' => 'Proses Verifikasi'];
		if(Datatable::shouldHandle())
	    {
	    //    return Datatable::collection(Verifikasiapotek::all(array('id','nama', 'verifikasi')))
	    //    return Datatable::collection(Pengguna::where('perijinan_id','=','4')->where('verifikasi','=','Proses Verifikasi')->orWhere('verifikasi','=','Verifikasi Belum Lengkap')->get())
	    //	 return Datatable::collection(Visitasiapotek::where($matchThese)->get())
	          return Datatable::collection(Pengguna::where('perijinan_id','4')->get())
	            ->showColumns('id','nama', 'verifikasi', 'updated_at')
	            ->addColumn('', function ($model) {
                    $html = '<center> <a href="'.route('admin.verifikasikliniks.edit', ['verifikasikliniks'=>$model->id]).'" class="btn btn-sm btn-default">Verifikasi</a> ';
					$html .= Form::open(array('url' => route('admin.verifikasikliniks.destroy', ['verifikasikliniks'=>$model->id]), 'method'=>'delete', 'class'=>'inline js-confirm'));
					$html .= Form::submit('delete', array('class' => 'btn btn-sm btn-danger'));
					$html .= Form::close();
					return $html;
                })
	            ->searchColumns('nama', 'verifikasi', 'updated_at')
	            ->orderColumns('nama', 'verifikasi', 'updated_at')
	            ->make();
	    }
		return View::make('verifikasikliniks.index')->withTitle('Verifikasi Klinik');
	}

	/**
	 * Show the form for creating a new verifikasiklinik
	 *
	 * @return Response
	 */
	public function create()
	{
		return View::make('verifikasikliniks.create')->withTitle('Tambah Verifikasi');
	}

	/**
	 * Store a newly created verifikasiklinik in storage.
	 *
	 * @return Response
	 */
	public function store()
	{
		$validator = Validator::make($data = Input::all(), Pengguna::$rules);

		if ($validator->fails())
		{
			return Redirect::back()->withErrors($validator)->withInput();
		}

		$verifikasi = Pengguna::create($data);

		return Redirect::route('admin.verifikasikliniks.index')->with("successMessage", "Berhasil menyimpan $verifikasi->verifikasi ");

	}

	/**
	 * Display the specified verifikasiklinik.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function show($id)
	{
		$verifikasi = Pengguna::findOrFail($id);

		return View::make('verifikasikliniks.show', compact('verifikasi'));
	}

	/**
	 * Show the form for editing the specified verifikasiklinik.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function edit($id)
	{
		$verifikasi = Pengguna::findOrFail($id);

	    $data = Verifikasiklinik::all();

		// return View::make('devices', compact(['locations', 'devices']);

		return View::make('verifikasikliniks.edit', ['verifikasi'=>$verifikasi, 'data'=>$data])->withTitle("Verifikasi $verifikasi->nama");

	}

	/**
	 * Update the specified verifikasiklinik in storage.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function update($id)
	{
		$verifikasi = Pengguna::findOrFail($id);

		$validator = Validator::make($data = Input::all(), Pengguna::$verifikasirules);

		if ($validator->fails())
		{
			return Redirect::back()->withErrors($validator)->withInput();
		}

		$data = Verifikasiklinik::all();

		$count = 0;

		for($i=0; $i < count($data); $i++) {

			$temp = (string)$i;

			if (Input::get('syarat'.$i) === 'yes') {
		    $syarat[$i] = 'Lengkap';
		    $count++;
			} else {
			$syarat[$i] = 'Belum Lengkap';
			}

		}

		$syaratString = array(
		'nama'	   => $verifikasi->nama,
		'data'	   => $data,
		'syarat'   => $syarat
		);
		
		if( $count==count($data)) {

			$verifikasi->verifikasi = "Proses Visitasi";

		 	Mail::send('verifikasikliniks.email.messagesuccess',$syaratString, function($message) use($verifikasi){
       		 
       		$message->to($verifikasi->email,$verifikasi->nama)->subject('Verifikasi Sistem Informasi Perizinan');
   		 
   		 	});

		} else {

			$verifikasi->verifikasi = "Verifikasi Belum Lengkap";

			Mail::send('verifikasikliniks.email.messagefailed', $syaratString, function($message) use($verifikasi){
       		 
       		$message->to($verifikasi->email,$verifikasi->nama)->subject('Verifikasi Sistem Informasi Perizinan');
   		 
   		 	});

		}

		$verifikasi->save();

		return Redirect::route('admin.verifikasikliniks.index')->with("successMessage", "Berhasil menyimpan $verifikasi->verifikasi" );

	}

	/**
	 * Remove the specified verifikasiklinik from storage.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function destroy($id)
	{
	    // mengecek apakah author bisa dihapus
		if (!Pengguna::destroy($id))
		{
			return Redirect::back();
		}

		return Redirect::route('admin.verifikasikliniks.index')->with('successMessage', 'User berhasil dihapus.');
	}


	 /**
     * Tampilkan halaman untuk export excel
     * @return response
     */
    public function export()
    {
        return View::make('verifikasikliniks.export')->withTitle('Export Data');
    }

    /**
     * Download excel data buku
     * @return PHPExcel
     */
    public function exportPost()
    {
        // validasi
        $rules = ['verifikasi'=>'required', 'type'=>'required'];
        $messages = ['verifikasi.required'=>'Anda belum memilih status visitasi. Pilih minimal 1 status.'];
        $validator = Validator::make(Input::all(), $rules, $messages);
        if ($validator->fails())
        {
            return Redirect::back()->withErrors($validator);
        }

        //$verifikasiapoteks = Pengguna::whereIn('perijinan_id', Input::get('perijinan_id'))->get();
        $verifikasi = Pengguna::where('perijinan_id', '4')->whereIn('verifikasi',Input::get('verifikasi'))->get();

        $type = Input::get('type');
        switch ($type) {
            case 'xls':
                return $this->exportExcel($verifikasi);
                break;

            case 'pdf':
                return $this->exportPdf($verifikasi);
                break;

            default:
                break;
        }
    }

    /**
     * Download excel data buku
     * @return PHPExcel
     */
    private function exportExcel($verifikasi)
    {
        Excel::create('Data Verifikasi Perijinan', function($excel) use ($verifikasi) {
            // Set the properties
            $excel->setTitle('Data Verifikasi Perijinan')
                  ->setCreator('Husin Nanda Perwira');

            $excel->sheet('Data Verifikasi', function($sheet) use ($verifikasi) {
                $row = 1;
                $sheet->row($row, array(
                    'Nama',
                    'Perijinan',
                    'Lokasi',
                    'Verifikasi',
                    'No Ktp',
                    'Berlaku',
                    'Tempat Lahir',
                    'Tanggal Lahir',
                    'Jenis Kelamin',
                    'Pekerjaan',
                    'Provinsi', 
                    'Kabupaten',
                    'Kecamatan',
                    'Desa',
                    'Alamat',
                    'Kode Pos',
                    'No HP',
                    'Email',  
                    'Tanggal Registrasi'           
                ));
                foreach ($verifikasi as $verifikasi) {
                   $sheet->row(++$row, array(
                    $verifikasi->nama,
                    $verifikasi->perijinan->nama,
                    $verifikasi->lokasi,
                    $verifikasi->verifikasi,
                    $verifikasi->noktp,
                    $verifikasi->berlaku,
                    $verifikasi->tempatlahir,
                    $verifikasi->tanggallahir,
                    $verifikasi->jeniskelamin,
                    $verifikasi->pekerjaan,
                    $verifikasi->provinsi,
                    $verifikasi->kabupaten,
                    $verifikasi->kecamatan,
                    $verifikasi->desa,
                    $verifikasi->alamat,
                    $verifikasi->kodepos,
                    $verifikasi->nohp,
                    $verifikasi->email,
                    $verifikasi->created_at,
                ));
                }
            });
        })->export('xls');
    }

    /**
     * Download pdf data buku
     * @return Dompdf
     */
    private function exportPdf($verifikasi)
    {
        $data['verifikasi'] = $verifikasi;
        $pdf = PDF::loadView('pdf.verifikasikliniks', $data);
        return $pdf->download('verifikasikliniks.pdf');
    }

}
