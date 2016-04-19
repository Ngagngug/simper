<?php

class VerifikasiapoteksController extends \BaseController {

	/**
	 * Display a listing of verifikasiapoteks
	 *
	 * @return Response
	 */
	public function index()
	{
		//$matchThese = ['perijinan_id' => '1', 'verifikasi' => 'Proses Verifikasi'];
		if(Datatable::shouldHandle())
	    {
	    //    return Datatable::collection(Verifikasiapotek::all(array('id','nama', 'verifikasi')))
	    //    return Datatable::collection(Pengguna::where('perijinan_id','=','1')->where('verifikasi','=','Proses Verifikasi')->orWhere('verifikasi','=','Verifikasi Belum Lengkap')->get())
	    //	 return Datatable::collection(Visitasiapotek::where($matchThese)->get())
	    	  return Datatable::collection(Pengguna::where('perijinan_id','1')->get())
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
		$verifikasiapotek = Pengguna::findOrFail($id);

		return View::make('verifikasiapoteks.show', compact('verifikasiapotek'));
	}

	/**
	 * Show the form for editing the specified verifikasiapotek.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function edit($id)
	{

	    $verifikasiapotek = Pengguna::findOrFail($id);

	    $data = Verifikasiapotek::all();

		// return View::make('devices', compact(['locations', 'devices']);

		return View::make('verifikasiapoteks.edit', ['verifikasiapotek'=>$verifikasiapotek, 'data'=>$data])->withTitle("Verifikasi $verifikasiapotek->nama");
	}

	/**
	 * Update the specified verifikasiapotek in storage.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function update($id)
	{
		$verifikasiapotek = Pengguna::findOrFail($id);

		$validator = Validator::make($data = Input::all(), Pengguna::$verifikasirules);

		if ($validator->fails())
		{
			return Redirect::back()->withErrors($validator)->withInput();
		}

		//$syaratString = implode(",", Input::get('syarat'));

		//$email = DB::table('penggunas')->select('email')->get();

		for($i=1; $i < 24; $i++) {

			$temp = (string)$i;

			if (Input::get('syarat'.$i) === 'yes') {
		    $syarat[$i] = 'Lengkap';
			} else {
			$syarat[$i] = 'Belum Lengkap';
			}

		}

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
		'syarat11' => $syarat[11],
		'syarat12' => $syarat[12],
		'syarat13' => $syarat[13],
		'syarat14' => $syarat[14],
		'syarat15' => $syarat[15],
		'syarat16' => $syarat[16],
		'syarat17' => $syarat[17],
		'syarat18' => $syarat[18],
		'syarat19' => $syarat[19],
		'syarat20' => $syarat[20],
		'syarat21' => $syarat[21],
		'syarat22' => $syarat[22],
		'syarat23' => $syarat[23],
		'nama'	   => $verifikasiapotek->nama
		);

		// if (Input::get('syarat1') === 'yes') {
		//     $syarat1 = 'Lengkap';
		// } else {
		// 	$syarat1 = 'Belum Lengkap';
		// }

		// if (Input::get('syarat2') === 'yes') {
		//     $syarat2 = 'Lengkap';
		// } else {
		// 	$syarat2 = 'Belum Lengkap';
		// }

		// if (Input::get('syarat3') === 'yes') {
		//     $syarat3 = 'Lengkap';
		// } else {
		// 	$syarat3 = 'Belum Lengkap';
		// }

		// if (Input::get('syarat4') === 'yes') {
		//     $syarat4 = 'Lengkap';
		// } else {
		// 	$syarat4 = 'Belum Lengkap';
		// }

		// if (Input::get('syarat5') === 'yes') {
		//     $syarat5 = 'Lengkap';
		// } else {
		// 	$syarat5 = 'Belum Lengkap';
		// }

		// if (Input::get('syarat6') === 'yes') {
		//     $syarat6 = 'Lengkap';
		// } else {
		// 	$syarat6 = 'Belum Lengkap';
		// }

		//   if (Input::get('syarat7') === 'yes') {
		//     $syarat7 = 'Lengkap';
		// } else {
		// 	$syarat7 = 'Belum Lengkap';
		// }

		//   if (Input::get('syarat8') === 'yes') {
		//     $syarat8 = 'Lengkap';
		// }  else {
		// 	$syarat8 = 'Belum Lengkap';
		// }

		// if (Input::get('syarat9') === 'yes') {
		//     $syarat9 = 'Lengkap';
		// } else {
		// 	$syarat9 = 'Belum Lengkap';
		// }

		//  if (Input::get('syarat10') === 'yes') {
		//     $syarat10 = 'Lengkap';
		// } else {
		// 	$syarat10 = 'Belum Lengkap';
		// }

		//  if (Input::get('syarat11') === 'yes') {
		//     $syarat11 = 'Lengkap';
		// } else {
		// 	$syarat11 = 'Belum Lengkap';
		// }

		//  if (Input::get('syarat12') === 'yes') {
		//     $syarat12 = 'Lengkap';
		// } else {
		// 	$syarat12 = 'Belum Lengkap';
		// }

		//  if (Input::get('syarat13') === 'yes') {
		//     $syarat13 = 'Lengkap';
		// } else {
		// 	$syarat13 = 'Belum Lengkap';
		// }

		//  if (Input::get('syarat14') === 'yes') {
		//     $syarat14 = 'Lengkap';
		// } else {
		// 	$syarat14 = 'Belum Lengkap';
		// }

		//  if (Input::get('syarat15') === 'yes') {
		//     $syarat15 = 'Lengkap';
		// } else {
		// 	$syarat15 = 'Belum Lengkap';
		// }

		//  if (Input::get('syarat16') === 'yes') {
		//     $syarat16 = 'Lengkap';
		// } else {
		// 	$syarat16 = 'Belum Lengkap';
		// }

		//  if (Input::get('syarat17') === 'yes') {
		//     $syarat17 = 'Lengkap';
		// }  else {
		// 	$syarat17 = 'Belum Lengkap';
		// }

		// if (Input::get('syarat18') === 'yes') {
		//     $syarat18 = 'Lengkap';
		// } else {
		// 	$syarat18 = 'Belum Lengkap';
		// }

		//  if (Input::get('syarat19') === 'yes') {
		//     $syarat19 = 'Lengkap';
		// }  else {
		// 	$syarat19 = 'Belum Lengkap';
		// }

		// if (Input::get('syarat20') === 'yes') {
		//     $syarat20 = 'Lengkap';
		// } else {
		// 	$syarat20 = 'Belum Lengkap';
		// }

		//  if (Input::get('syarat21') === 'yes') {
		//     $syarat21 = 'Lengkap';
		// }  else {
		// 	$syarat21 = 'Belum Lengkap';
		// }

		// if (Input::get('syarat22') === 'yes') {
		//     $syarat22 = 'Lengkap';
		// }  else {
		// 	$syarat22 = 'Belum Lengkap';
		// }

		// if (Input::get('syarat23') === 'yes') {
		//     $syarat23 = 'Lengkap';
		// } else {
		// 	$syarat23 = 'Belum Lengkap';
		// }


		for($i=1; $i < 24; $i++) {
			if(	$syarat[1] === 'Lengkap' &&
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
			$syarat[23] === 'Lengkap' 
			) 
		{
			$verifikasiapotek->verifikasi = "Proses Visitasi";
		} else {
			$verifikasiapotek->verifikasi = "Verifikasi Belum Lengkap";
		}
		}

	
		
		$verifikasiapotek->save();
		
		if('Proses Visitasi'==$verifikasiapotek->verifikasi) {

		 	Mail::send('verifikasiapoteks.email.messagesuccess',$syaratString, function($message) use($verifikasiapotek){
       		 
       		$message->to($verifikasiapotek->email,$verifikasiapotek->nama)->subject('Verifikasi Sistem Informasi Perizinan');
   		 
   		 	});

		} else {

			Mail::send('verifikasiapoteks.email.messagefailed', $syaratString, function($message) use($verifikasiapotek){
       		 
       		$message->to($verifikasiapotek->email,$verifikasiapotek->nama)->subject('Verifikasi Sistem Informasi Perizinan');
   		 
   		 	});

		}

		return Redirect::route('admin.verifikasiapoteks.index')->with("successMessage", "Berhasil menyimpan $verifikasiapotek->verifikasi" );
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
        $verifikasiapoteks = Pengguna::where('perijinan_id', '1')->whereIn('verifikasi',Input::get('verifikasi'))->get();

        $type = Input::get('type');
        switch ($type) {
            case 'xls':
                return $this->exportExcel($verifikasiapoteks);
                break;

            case 'pdf':
                return $this->exportPdf($verifikasiapoteks);
                break;

            default:
                break;
        }
    }

    /**
     * Download excel data buku
     * @return PHPExcel
     */
    private function exportExcel($verifikasiapoteks)
    {
        Excel::create('Data Verifikasi Perijinan', function($excel) use ($verifikasiapoteks) {
            // Set the properties
            $excel->setTitle('Data Verifikasi Perijinan')
                  ->setCreator('Husin Nanda Perwira');

            $excel->sheet('Data Verifikasi', function($sheet) use ($verifikasiapoteks) {
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
                foreach ($verifikasiapoteks as $verifikasiapotek) {
                   $sheet->row(++$row, array(
                    $verifikasiapotek->nama,
                    $verifikasiapotek->perijinan->nama,
                    $verifikasiapotek->lokasi,
                    $verifikasiapotek->verifikasi,
                    $verifikasiapotek->noktp,
                    $verifikasiapotek->berlaku,
                    $verifikasiapotek->tempatlahir,
                    $verifikasiapotek->tanggallahir,
                    $verifikasiapotek->jeniskelamin,
                    $verifikasiapotek->pekerjaan,
                    $verifikasiapotek->provinsi,
                    $verifikasiapotek->kabupaten,
                    $verifikasiapotek->kecamatan,
                    $verifikasiapotek->desa,
                    $verifikasiapotek->alamat,
                    $verifikasiapotek->kodepos,
                    $verifikasiapotek->nohp,
                    $verifikasiapotek->email,
                    $verifikasiapotek->created_at,
                ));
                }
            });
        })->export('xls');
    }

    /**
     * Download pdf data buku
     * @return Dompdf
     */
    private function exportPdf($verifikasiapoteks)
    {
        $data['verifikasiapoteks'] = $verifikasiapoteks;
        $pdf = PDF::loadView('pdf.verifikasiapoteks', $data);
        return $pdf->download('verifikasiapoteks.pdf');
    }

}
