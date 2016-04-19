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
		$verifikasiklinik = Pengguna::findOrFail($id);

		return View::make('verifikasikliniks.show', compact('verifikasiklinik'));
	}

	/**
	 * Show the form for editing the specified verifikasiklinik.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function edit($id)
	{
		$verifikasiklinik = Pengguna::findOrFail($id);

	    $data = Verifikasiklinik::all();

		// return View::make('devices', compact(['locations', 'devices']);

		return View::make('verifikasikliniks.edit', ['verifikasiklinik'=>$verifikasiklinik, 'data'=>$data])->withTitle("Verifikasi $verifikasiklinik->nama");

	}

	/**
	 * Update the specified verifikasiklinik in storage.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function update($id)
	{
		$verifikasiklinik = Pengguna::findOrFail($id);

		$validator = Validator::make($data = Input::all(), Pengguna::$verifikasirules);

		if ($validator->fails())
		{
			return Redirect::back()->withErrors($validator)->withInput();
		}

		for($i=1; $i < 11; $i++) {

			$temp = (string)$i;

			if (Input::get('syarat'.$i) === 'yes') {
		    $syarat[$i] = 'Lengkap';
			} else {
			$syarat[$i] = 'Belum Lengkap';
			}

		}

		$data = Verifikasiklinik::all();

		$syaratString = array(
		'syarat1' => $syarat[1],
		'syarat2' => $syarat[2],
		'syarat3' => $syarat[3],
	    'syarat4' => $syarat[4],
		'syarat5' => $syarat[5],
		'syarat6' => $syarat[6],
		'syarat7' => $syarat[7],
		'syarat8' => $syarat[8],
		'syarat9' => $syarat[9],
		'syarat10' => $syarat[10],
		'nama'	   => $verifikasiklinik->nama,
		'data'	   => $data
		);

		
		for($i=1; $i < 11; $i++) {
			if(	$syarat[1] === 'Lengkap' &&
			$syarat[2] === 'Lengkap' && 
			$syarat[3] === 'Lengkap' && 
			$syarat[4] === 'Lengkap' && 
			$syarat[5] === 'Lengkap' && 
			$syarat[6] === 'Lengkap' && 
			$syarat[7] === 'Lengkap' && 
			$syarat[8] === 'Lengkap' && 
			$syarat[9] === 'Lengkap' && 
			$syarat[10] === 'Lengkap'
			) 
		{
			$verifikasiklinik->verifikasi = "Proses Visitasi";
		} else {
			$verifikasiklinik->verifikasi = "Verifikasi Belum Lengkap";
		}
		}

	
		$verifikasiklinik->save();
		
		if('Proses Visitasi'==$verifikasiklinik->verifikasi) {

		 	Mail::send('verifikasikliniks.email.messagesuccess',$syaratString, function($message) use($verifikasiklinik){
       		 
       		$message->to($verifikasiklinik->email,$verifikasiklinik->nama)->subject('Verifikasi Sistem Informasi Perizinan');
   		 
   		 	});

		} else {

			Mail::send('verifikasikliniks.email.messagefailed', $syaratString, function($message) use($verifikasiklinik){
       		 
       		$message->to($verifikasiklinik->email,$verifikasiklinik->nama)->subject('Verifikasi Sistem Informasi Perizinan');
   		 
   		 	});

		}

		return Redirect::route('admin.verifikasikliniks.index')->with("successMessage", "Berhasil menyimpan $verifikasiklinik->verifikasi" );

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
        $verifikasikliniks = Pengguna::where('perijinan_id', '4')->whereIn('verifikasi',Input::get('verifikasi'))->get();

        $type = Input::get('type');
        switch ($type) {
            case 'xls':
                return $this->exportExcel($verifikasikliniks);
                break;

            case 'pdf':
                return $this->exportPdf($verifikasikliniks);
                break;

            default:
                break;
        }
    }

    /**
     * Download excel data buku
     * @return PHPExcel
     */
    private function exportExcel($verifikasikliniks)
    {
        Excel::create('Data Verifikasi Perijinan', function($excel) use ($verifikasikliniks) {
            // Set the properties
            $excel->setTitle('Data Verifikasi Perijinan')
                  ->setCreator('Husin Nanda Perwira');

            $excel->sheet('Data Verifikasi', function($sheet) use ($verifikasikliniks) {
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
                foreach ($verifikasikliniks as $verifikasiklinik) {
                   $sheet->row(++$row, array(
                    $verifikasiklinik->nama,
                    $verifikasiklinik->perijinan->nama,
                    $verifikasiklinik->lokasi,
                    $verifikasiklinik->verifikasi,
                    $verifikasiklinik->noktp,
                    $verifikasiklinik->berlaku,
                    $verifikasiklinik->tempatlahir,
                    $verifikasiklinik->tanggallahir,
                    $verifikasiklinik->jeniskelamin,
                    $verifikasiklinik->pekerjaan,
                    $verifikasiklinik->provinsi,
                    $verifikasiklinik->kabupaten,
                    $verifikasiklinik->kecamatan,
                    $verifikasiklinik->desa,
                    $verifikasiklinik->alamat,
                    $verifikasiklinik->kodepos,
                    $verifikasiklinik->nohp,
                    $verifikasiklinik->email,
                    $verifikasiklinik->created_at,
                ));
                }
            });
        })->export('xls');
    }

    /**
     * Download pdf data buku
     * @return Dompdf
     */
    private function exportPdf($verifikasikliniks)
    {
        $data['verifikasikliniks'] = $verifikasikliniks;
        $pdf = PDF::loadView('pdf.verifikasikliniks', $data);
        return $pdf->download('verifikasikliniks.pdf');
    }

}
