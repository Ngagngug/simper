<?php

class VerifikasiklinikdialisesController extends \BaseController {

	/**
	 * Display a listing of verifikasiklinikdialises
	 *
	 * @return Response
	 */
	public function index()
	{
		if(Datatable::shouldHandle())
	    {
	    //    return Datatable::collection(Verifikasiapotek::all(array('id','nama', 'verifikasi')))
	    //   return Datatable::collection(Pengguna::where('perijinan_id','=','5')->where('verifikasi','=','Proses Verifikasi')->orWhere('verifikasi','=','Verifikasi Belum Lengkap')->get())
	    //	 return Datatable::collection(Visitasiapotek::where($matchThese)->get())
	         return Datatable::collection(Pengguna::where('perijinan_id','5')->get())
	            ->showColumns('id','nama', 'verifikasi', 'updated_at')
	            ->addColumn('', function ($model) {
                    $html = '<center> <a href="'.route('admin.verifikasiklinikdialises.edit', ['verifikasiklinikdialises'=>$model->id]).'" class="btn btn-sm btn-default">Verifikasi</a> ';
					$html .= Form::open(array('url' => route('admin.verifikasiklinikdialises.destroy', ['verifikasiklinikdialises'=>$model->id]), 'method'=>'delete', 'class'=>'inline js-confirm'));
					$html .= Form::submit('delete', array('class' => 'btn btn-sm btn-danger'));
					$html .= Form::close();
					return $html;
                })
	            ->searchColumns('nama', 'verifikasi', 'updated_at')
	            ->orderColumns('nama', 'verifikasi', 'updated_at')
	            ->make();
	    }
		return View::make('verifikasiklinikdialises.index')->withTitle('Verifikasi Klinik');
	}

	/**
	 * Show the form for creating a new verifikasiklinikdialise
	 *
	 * @return Response
	 */
	public function create()
	{
		return View::make('verifikasiklinikdialises.create')->withTitle('Tambah Verifikasi');
	}

	/**
	 * Store a newly created verifikasiklinikdialise in storage.
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

		return Redirect::route('admin.verifikasiklinikdialises.index')->with("successMessage", "Berhasil menyimpan $verifikasi->verifikasi ");
	}

	/**
	 * Display the specified verifikasiklinikdialise.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function show($id)
	{
		$verifikasiklinikdialise = Pengguna::findOrFail($id);

		return View::make('verifikasiklinikdialises.show', compact('verifikasiklinikdialise'));
	}

	/**
	 * Show the form for editing the specified verifikasiklinikdialise.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function edit($id)
	{
		$verifikasiklinikdialise = Pengguna::findOrFail($id);

	    $data = Verifikasiklinikdialise::all();

		// return View::make('devices', compact(['locations', 'devices']);

		return View::make('verifikasiklinikdialises.edit', ['verifikasiklinikdialise'=>$verifikasiklinikdialise, 'data'=>$data])->withTitle("Verifikasi $verifikasiklinikdialise->nama");
	}

	/**
	 * Update the specified verifikasiklinikdialise in storage.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function update($id)
	{
		$verifikasiklinikdialise = Pengguna::findOrFail($id);

		$validator = Validator::make($data = Input::all(), Pengguna::$verifikasirules);

		if ($validator->fails())
		{
			return Redirect::back()->withErrors($validator)->withInput();
		}

		$data = Verifikasiklinikdialise::all();

		for($i=0; $i < count($data); $i++) {

			$temp = (string)$i;

			if (Input::get('syarat'.$i) === 'yes') {
		    $syarat[$i] = 'Lengkap';
			} else {
			$syarat[$i] = 'Belum Lengkap';
			}

		}

		$syaratString = array(
		'nama'	   => $verifikasiklinikdialise->nama,
		'data'	   => $data,
		'syarat'   => $syarat
		);

		
		for($i=0; $i < count($data); $i++) {
			if(	$syarat[0] === 'Lengkap' &&
			$syarat[1] === 'Lengkap' && 
			$syarat[2] === 'Lengkap' && 
			$syarat[3] === 'Lengkap' && 
			$syarat[4] === 'Lengkap' && 
			$syarat[5] === 'Lengkap' && 
			$syarat[6] === 'Lengkap' && 
			$syarat[7] === 'Lengkap' && 
			$syarat[8] === 'Lengkap' && 
			$syarat[9] === 'Lengkap' &&
			$syarat[10] === 'Lengkap' && 
			$syarat[11] === 'Lengkap' && 
			$syarat[12] === 'Lengkap' && 
			$syarat[13] === 'Lengkap' && 
			$syarat[14] === 'Lengkap' && 
			$syarat[15] === 'Lengkap' && 
			$syarat[16] === 'Lengkap' && 
			$syarat[17] === 'Lengkap' && 
			$syarat[18] === 'Lengkap' && 
			$syarat[19] === 'Lengkap' && 
			$syarat[20] === 'Lengkap' && 
			$syarat[21] === 'Lengkap' && 
			$syarat[22] === 'Lengkap' && 
			$syarat[23] === 'Lengkap' && 
			$syarat[24] === 'Lengkap'
			) 
		{
			$verifikasiklinikdialise->verifikasi = "Proses Visitasi";
		} else {
			$verifikasiklinikdialise->verifikasi = "Verifikasi Belum Lengkap";
		}
		}

	
		$verifikasiklinikdialise->save();
		
		if('Proses Visitasi'==$verifikasiklinikdialise->verifikasi) {

		 	Mail::send('verifikasiklinikdialises.email.messagesuccess',$syaratString, function($message) use($verifikasiklinikdialise){
       		 
       		$message->to($verifikasiklinikdialise->email,$verifikasiklinikdialise->nama)->subject('Verifikasi Sistem Informasi Perizinan');
   		 
   		 	});

		} else {

			Mail::send('verifikasiklinikdialises.email.messagefailed', $syaratString, function($message) use($verifikasiklinikdialise){
       		 
       		$message->to($verifikasiklinikdialise->email,$verifikasiklinikdialise->nama)->subject('Verifikasi Sistem Informasi Perizinan');
   		 
   		 	});

		}

		return Redirect::route('admin.verifikasiklinikdialises.index')->with("successMessage", "Berhasil menyimpan $verifikasiklinikdialise->verifikasi" );
	}

	/**
	 * Remove the specified verifikasiklinikdialise from storage.
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

		return Redirect::route('admin.verifikasiklinikdialises.index')->with('successMessage', 'User berhasil dihapus.');
	}

	 /**
     * Tampilkan halaman untuk export excel
     * @return response
     */
    public function export()
    {
        return View::make('verifikasiklinikdialises.export')->withTitle('Export Data');
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
        $verifikasiklinikdialises = Pengguna::where('perijinan_id', '5')->whereIn('verifikasi',Input::get('verifikasi'))->get();

        $type = Input::get('type');
        switch ($type) {
            case 'xls':
                return $this->exportExcel($verifikasiklinikdialises);
                break;

            case 'pdf':
                return $this->exportPdf($verifikasiklinikdialises);
                break;

            default:
                break;
        }
    }

    /**
     * Download excel data buku
     * @return PHPExcel
     */
    private function exportExcel($verifikasiklinikdialises)
    {
        Excel::create('Data Verifikasi Perijinan', function($excel) use ($verifikasiklinikdialises) {
            // Set the properties
            $excel->setTitle('Data Verifikasi Perijinan')
                  ->setCreator('Husin Nanda Perwira');

            $excel->sheet('Data Verifikasi', function($sheet) use ($verifikasiklinikdialises) {
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
                foreach ($verifikasiklinikdialises as $verifikasiklinikdialise) {
                   $sheet->row(++$row, array(
                    $verifikasiklinikdialise->nama,
                    $verifikasiklinikdialise->perijinan->nama,
                    $verifikasiklinikdialise->lokasi,
                    $verifikasiklinikdialise->verifikasi,
                    $verifikasiklinikdialise->noktp,
                    $verifikasiklinikdialise->berlaku,
                    $verifikasiklinikdialise->tempatlahir,
                    $verifikasiklinikdialise->tanggallahir,
                    $verifikasiklinikdialise->jeniskelamin,
                    $verifikasiklinikdialise->pekerjaan,
                    $verifikasiklinikdialise->provinsi,
                    $verifikasiklinikdialise->kabupaten,
                    $verifikasiklinikdialise->kecamatan,
                    $verifikasiklinikdialise->desa,
                    $verifikasiklinikdialise->alamat,
                    $verifikasiklinikdialise->kodepos,
                    $verifikasiklinikdialise->nohp,
                    $verifikasiklinikdialise->email,
                    $verifikasiklinikdialise->created_at,
                ));
                }
            });
        })->export('xls');
    }

    /**
     * Download pdf data buku
     * @return Dompdf
     */
    private function exportPdf($verifikasiklinikdialises)
    {
        $data['verifikasiklinikdialises'] = $verifikasiklinikdialises;
        $pdf = PDF::loadView('pdf.verifikasiklinikdialises', $data);
        return $pdf->download('verifikasiklinikdialises.pdf');
    }

}
