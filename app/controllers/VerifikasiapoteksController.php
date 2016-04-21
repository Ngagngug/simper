<?php

class VerifikasiapoteksController extends \BaseController {

	/**
	 * Display a listing of verifikasiapoteks
	 *
	 * @return Response
	 */
	public function index()
	{
		$matchThese = ['perijinan_id' => '1','verifikasi' => 'Proses Verifikasi'];
		$orThose = ['perijinan_id' => '1','verifikasi' => 'Verifikasi Belum Lengkap'];
		if(Datatable::shouldHandle())
	    {
	    //    return Datatable::collection(Verifikasiapotek::all(array('id','nama', 'verifikasi')))
	    //    return Datatable::collection(Pengguna::where('perijinan_id','=','1')->where('verifikasi','=','Proses Verifikasi')->orWhere('verifikasi','=','Verifikasi Belum Lengkap')->get())
	    	 return Datatable::collection(Pengguna::where($matchThese)->orwhere($orThose)->get())
	    //	  return Datatable::collection(Pengguna::where('perijinan_id','1')->get())
	    //	 return Datatable::collection(Pengguna::where($matchThese)->get())
	            ->showColumns('id','nama', 'verifikasi', 'updated_at')
	            ->addColumn('', function ($model) {
                    $html = '<center> <a href="'.route('admin.verifikasiapoteks.edit', ['verifikasiapoteks'=>$model->id]).'" class="btn btn-sm btn-default">Verifikasi</a> ';
					$html .= Form::open(array('url' => route('admin.verifikasiapoteks.destroy', ['verifikasiapoteks'=>$model->id]), 'method'=>'delete', 'class'=>'inline js-confirm'));
					$html .= Form::submit('delete', array('class' => 'btn btn-sm btn-danger'));
					$html .= Form::close();
					return $html;
                })
	            ->searchColumns('nama', 'verifikasi', 'updated_at')
	            ->orderColumns('nama', 'verifikasi', 'updated_at')
	            ->make();
	    }
		return View::make('verifikasiapoteks.index')->withTitle('Verifikasi Apotek');
	}

	/**
	 * Show the form for creating a new verifikasiapotek
	 *
	 * @return Response
	 */
	public function create()
	{
		return View::make('verifikasiapoteks.create')->withTitle('Tambah Verifikasi');
	}

	/**
	 * Store a newly created verifikasiapotek in storage.
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

		return Redirect::route('admin.verifikasiapoteks.index')->with("successMessage", "Berhasil menyimpan $verifikasi->verifikasi ");
	}

	/**
	 * Display the specified verifikasiapotek.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function show($id)
	{
		$verifikasi = Pengguna::findOrFail($id);

		return View::make('verifikasiapoteks.show', compact('verifikasi'));
	}

	/**
	 * Show the form for editing the specified verifikasiapotek.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function edit($id)
	{

	    $verifikasi = Pengguna::findOrFail($id);

	    $data = Verifikasiapotek::all();

		// return View::make('devices', compact(['locations', 'devices']);

		return View::make('verifikasiapoteks.edit', ['verifikasi'=>$verifikasi, 'data'=>$data])->withTitle("Verifikasi $verifikasi->nama");
	}

	/**
	 * Update the specified verifikasiapotek in storage.
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

		//$syaratString = implode(",", Input::get('syarat'));

		//$email = DB::table('penggunas')->select('email')->get();

		$data = Verifikasiapotek::all();

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

		 	Mail::send('emails.verifikasi.messagesuccess',$syaratString, function($message) use($verifikasi){
       		 
       		$message->to($verifikasi->email,$verifikasi->nama)->subject('Verifikasi Sistem Informasi Perizinan');
   		 
   		 	});

		} else {

			$verifikasi->verifikasi = "Verifikasi Belum Lengkap";

			Mail::send('emails.verifikasi.messagefailed', $syaratString, function($message) use($verifikasi){
       		 
       		$message->to($verifikasi->email,$verifikasi->nama)->subject('Verifikasi Sistem Informasi Perizinan');
   		 
   		 	});

		}

		$verifikasi->save();

		return Redirect::route('admin.verifikasiapoteks.index')->with("successMessage", "Berhasil menyimpan $verifikasi->verifikasi" );
	}

	/**
	 * Remove the specified verifikasiapotek from storage.
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

		return Redirect::route('admin.verifikasiapoteks.index')->with('successMessage', 'User berhasil dihapus.');
	}

	 /**
     * Tampilkan halaman untuk export excel
     * @return response
     */
    public function export()
    {
        return View::make('verifikasiapoteks.export')->withTitle('Export Data');
  		// Excel::create('List Absensi', function($excel){
		// 	$excel->sheet('Sheetname', function($sheet)
		// 	{
		// 		$data=[];
		// 		array_push($data, array('Kevin','','','Suhin','Yah','Oke'));
		// 		$sheet->fromArray($data,null,'A1',false,false);
		// 		$perijinan = Perijinan::all();
		// 		$sheet->fromModel($perijinan);
		// 	});

		// })->download('xls');
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
        $verifikasi = Pengguna::where('perijinan_id', '1')->whereIn('verifikasi',Input::get('verifikasi'))->get();

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
        $pdf = PDF::loadView('pdf.verifikasi', $data);
        return $pdf->download('verifikasiapoteks.pdf');
    }

}
