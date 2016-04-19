<?php

class VisitasiapoteksController extends \BaseController {

	/**
	 * Display a listing of visitasiapoteks
	 *
	 * @return Response
	 */
	public function index()
	{
		//$verifikasiapoteks = Pengguna::whereIn('perijinan_id', Input::get('perijinan_id'))->get();

		if(Datatable::shouldHandle())
	    {
	    //    return Datatable::collection(Visitasiapotek::all(array('id','nama', 'verifikasi')))
	    //	    return Datatable::collection(Visitasiapotek::where('verifikasi','Proses Visitasi')->get())
	    	return Datatable::collection(Visitasiapotek::where('perijinan_id','=','1')->where('verifikasi','=','Proses Visitasi')->orWhere('verifikasi','=','Visitasi Selesai')->orWhere('verifikasi','=','Visitasi Gagal')->get())
	            ->showColumns('id', 'nama' , 'verifikasi')
	            ->addColumn('', function ($model) {
                    $html = '<center> <a href="'.route('admin.visitasiapoteks.edit', ['visitasiapoteks'=>$model->id]).'" class="btn btn-sm btn-default">Visitasi</a> ';
					/*$html .= Form::open(array('url' => route('admin.visitasiapoteks.destroy', ['visitasiapoteks'=>$model->id]), 'method'=>'delete', 'class'=>'inline js-confirm'));
					$html .= Form::submit('delete', array('class' => 'btn btn-sm btn-danger'));
					$html .= Form::close();*/
					return $html;
                })
	            ->searchColumns('nama', 'verifikasi')
	            ->orderColumns('nama', 'verifikasi')
	            ->make();
	    }
		return View::make('visitasiapoteks.index')->withTitle('Visitasi Apotek');
	}

	/**
	 * Show the form for creating a new visitasiapotek
	 *
	 * @return Response
	 */
	public function create()
	{
		return View::make('visitasiapoteks.create')->withTitle('Tambah Visitasi');
	}

	/**
	 * Store a newly created visitasiapotek in storage.
	 *
	 * @return Response
	 */
	public function store()
	{
		$validator = Validator::make($data = Input::all(), Visitasiapotek::$rules);

		if ($validator->fails())
		{
			return Redirect::back()->withErrors($validator)->withInput();
		}

		$visitasi = Visitasiapotek::create($data);

		return Redirect::route('admin.visitasiapoteks.index')->with("successMessage", "Berhasil menyimpan $visitasi->verifikasi ");
	}

	/**
	 * Display the specified visitasiapotek.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function show($id)
	{
		$visitasiapotek = Visitasiapotek::findOrFail($id);

		return View::make('visitasiapoteks.show', compact('visitasiapotek'));
	}

	/**
	 * Show the form for editing the specified visitasiapotek.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function edit($id)
	{
		$visitasiapotek = Visitasiapotek::find($id);

		return View::make('visitasiapoteks.edit', ['visitasiapotek'=>$visitasiapotek])->withTitle("Visitasi $visitasiapotek->nama");
	}

	/**
	 * Update the specified visitasiapotek in storage.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function update($id)
	{

		$visitasiapotek = Visitasiapotek::findOrFail($id);

		$validator = Validator::make($data = Input::all(), Visitasiapotek::$rules);

		if ($validator->fails())
		{
			return Redirect::back()->withErrors($validator)->withInput();
		}

		//$syaratString = implode(",", Input::get('syarat'));

		//$email = DB::table('penggunas')->select('email')->get();

		if (Input::get('syarat1') === 'yes') {
		    $syarat1 = 'Lengkap';
		} else {
			$syarat1 = 'Belum Lengkap';
		}

		if (Input::get('syarat2') === 'yes') {
		    $syarat2 = 'Lengkap';
		} else {
			$syarat2 = 'Belum Lengkap';
		}

		if (Input::get('syarat3') === 'yes') {
		    $syarat3 = 'Lengkap';
		} else {
			$syarat3 = 'Belum Lengkap';
		}

		if (Input::get('syarat4') === 'yes') {
		    $syarat4 = 'Lengkap';
		} else {
			$syarat4 = 'Belum Lengkap';
		}

		if (Input::get('syarat5') === 'yes') {
		    $syarat5 = 'Lengkap';
		} else {
			$syarat5 = 'Belum Lengkap';
		}

		if (Input::get('syarat6') === 'yes') {
		    $syarat6 = 'Lengkap';
		} else {
			$syarat6 = 'Belum Lengkap';
		}

		  if (Input::get('syarat7') === 'yes') {
		    $syarat7 = 'Lengkap';
		} else {
			$syarat7 = 'Belum Lengkap';
		}

		  if (Input::get('syarat8') === 'yes') {
		    $syarat8 = 'Lengkap';
		}  else {
			$syarat8 = 'Belum Lengkap';
		}

		if (Input::get('syarat9') === 'yes') {
		    $syarat9 = 'Lengkap';
		} else {
			$syarat9 = 'Belum Lengkap';
		}

		 if (Input::get('syarat10') === 'yes') {
		    $syarat10 = 'Lengkap';
		} else {
			$syarat10 = 'Belum Lengkap';
		}

		 if (Input::get('syarat11') === 'yes') {
		    $syarat11 = 'Lengkap';
		} else {
			$syarat11 = 'Belum Lengkap';
		}

		 if (Input::get('syarat12') === 'yes') {
		    $syarat12 = 'Lengkap';
		} else {
			$syarat12 = 'Belum Lengkap';
		}

		 if (Input::get('syarat13') === 'yes') {
		    $syarat13 = 'Lengkap';
		} else {
			$syarat13 = 'Belum Lengkap';
		}

		 if (Input::get('syarat14') === 'yes') {
		    $syarat14 = 'Lengkap';
		} else {
			$syarat14 = 'Belum Lengkap';
		}

		 if (Input::get('syarat15') === 'yes') {
		    $syarat15 = 'Lengkap';
		} else {
			$syarat15 = 'Belum Lengkap';
		}

		 if (Input::get('syarat16') === 'yes') {
		    $syarat16 = 'Lengkap';
		} else {
			$syarat16 = 'Belum Lengkap';
		}

		 if (Input::get('syarat17') === 'yes') {
		    $syarat17 = 'Lengkap';
		}  else {
			$syarat17 = 'Belum Lengkap';
		}

		if (Input::get('syarat18') === 'yes') {
		    $syarat18 = 'Lengkap';
		} else {
			$syarat18 = 'Belum Lengkap';
		}

		 if (Input::get('syarat19') === 'yes') {
		    $syarat19 = 'Lengkap';
		}  else {
			$syarat19 = 'Belum Lengkap';
		}

		if (Input::get('syarat20') === 'yes') {
		    $syarat20 = 'Lengkap';
		} else {
			$syarat20 = 'Belum Lengkap';
		}

		 if (Input::get('syarat21') === 'yes') {
		    $syarat21 = 'Lengkap';
		}  else {
			$syarat21 = 'Belum Lengkap';
		}

		if (Input::get('syarat22') === 'yes') {
		    $syarat22 = 'Lengkap';
		}  else {
			$syarat22 = 'Belum Lengkap';
		}

		if (Input::get('syarat23') === 'yes') {
		    $syarat23 = 'Lengkap';
		} else {
			$syarat23 = 'Belum Lengkap';
		}

		$syaratString = array(
			'syarat1' => $syarat1,
			'syarat2' => $syarat2,
			'syarat3' => $syarat3,
			'syarat4' => $syarat4,
			'syarat5' => $syarat5,
			'syarat6' => $syarat6,
			'syarat7' => $syarat7,
			'syarat8' => $syarat8,
			'syarat9' => $syarat9,
			'syarat10' => $syarat10,
			'syarat11' => $syarat11,
			'syarat12' => $syarat12,
			'syarat13' => $syarat13,
			'syarat14' => $syarat14,
			'syarat15' => $syarat15,
			'syarat16' => $syarat16,
			'syarat17' => $syarat17,
			'syarat18' => $syarat18,
			'syarat19' => $syarat19,
			'syarat20' => $syarat20,
			'syarat21' => $syarat21,
			'syarat22' => $syarat22,
			'syarat23' => $syarat23,
			'nama'	   => $visitasiapotek->nama
		);

		if(	$syarat1 === 'Lengkap' && 
			$syarat2 === 'Lengkap' && 
			$syarat3 === 'Lengkap' && 
			$syarat4 === 'Lengkap' && 
			$syarat5 === 'Lengkap' && 
			$syarat6 === 'Lengkap' && 
			$syarat7 === 'Lengkap' && 
			$syarat8 === 'Lengkap' && 
			$syarat9 === 'Lengkap' && 
			$syarat10 === 'Lengkap' && 
			$syarat11 === 'Lengkap' && 
			$syarat12 === 'Lengkap' && 
			$syarat13 === 'Lengkap' && 
			$syarat14 === 'Lengkap' && 
			$syarat15 === 'Lengkap' && 
			$syarat16 === 'Lengkap' && 
			$syarat17 === 'Lengkap' && 
			$syarat18 === 'Lengkap' && 
			$syarat19 === 'Lengkap' && 
			$syarat20 === 'Lengkap' && 
			$syarat21 === 'Lengkap' &&
			$syarat22 === 'Lengkap' &&
			$syarat23 === 'Lengkap' ) 
		{
			$visitasiapotek->verifikasi = "Visitasi Selesai";
		} else {
			$visitasiapotek->verifikasi = "Visitasi Gagal";
		}
		
		$visitasiapotek->save();
		
		if('Visitasi Selesai'==$visitasiapotek->verifikasi) {

		 	Mail::send('visitasiapoteks.email.messagesuccess',$syaratString, function($message) use($visitasiapotek){
       		 
       		$message->to($visitasiapotek->email,$visitasiapotek->nama)->subject('Visitasi Sistem Informasi Perizinan');
   		 
   		 	});

			//$visitasiapoteks = Pengguna::where('verifikasi','Visitasi Selesai')->get();

   		   	$data['visitasiapoteks'] = $visitasiapotek;
	        $pdf = PDF::loadView('pdf.hasilvisitasiapoteks', $data);
	        return $pdf->download($visitasiapotek->nama.'_hasilvisitasiapoteks.pdf');

		} else {

			Mail::send('visitasiapoteks.email.messagefailed', $syaratString, function($message) use($visitasiapotek){
       		 
       		$message->to($visitasiapotek->email,$visitasiapotek->nama)->subject('Visitasi Sistem Informasi Perizinan');
   		 
   		 	});
			//$visitasiapoteks = Pengguna::whereIn('perijinan_id', Input::get('perijinan_id'))->get();
		}

		return Redirect::route('admin.visitasiapoteks.index')->with("successMessage", "Berhasil menyimpan $visitasiapotek->verifikasi ");
	}

	/**
	 * Remove the specified visitasiapotek from storage.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function destroy($id)
	{
		 // mengecek apakah author bisa dihapus
		if (!Visitasiapotek::destroy($id))
		{
			return Redirect::back();
		}

		return Redirect::route('admin.visitasiapoteks.index')->with('successMessage', 'User berhasil dihapus.');

	}

	/**
     * Tampilkan halaman untuk export excel
     * @return response
     */
    public function export()
    {
        return View::make('visitasiapoteks.export')->withTitle('Export Data');
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
        $messages = ['verifikasi.required'=>'Anda belum memilih status verifikasi. Pilih minimal 1 status.'];
        $validator = Validator::make(Input::all(), $rules, $messages);
        if ($validator->fails())
        {
            return Redirect::back()->withErrors($validator);
        }

        //$visitasiapoteks = Pengguna::where('perijinan_id', '1')->where('verifikasi',Input::get('verifikasi[1]'))->get();
        $visitasiapoteks = Pengguna::where('perijinan_id', '1')->whereIn('verifikasi',Input::get('verifikasi'))->get();
        //$visitasiapoteks = Pengguna::whereIn('perijinan_id', Input::get('perijinan_id'))->get();

        $type = Input::get('type');
        switch ($type) {
            case 'xls':
                return $this->exportExcel($visitasiapoteks);
                break;

            case 'pdf':
                return $this->exportPdf($visitasiapoteks);
                break;

            default:
                break;
        }
    }

    /**
     * Download excel data buku
     * @return PHPExcel
     */
    private function exportExcel($visitasiapoteks)
    {
        Excel::create('Data Visitasi Perijinan', function($excel) use ($visitasiapoteks) {
            // Set the properties
            $excel->setTitle('Data Visitasi Perijinan')
                  ->setCreator('Husin Nanda Perwira');

            $excel->sheet('Data Visitasi', function($sheet) use ($visitasiapoteks) {
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
                foreach ($visitasiapoteks as $visitasiapotek) {
                   $sheet->row(++$row, array(
                    $visitasiapotek->nama,
                    $visitasiapotek->perijinan->nama,
                    $visitasiapotek->lokasi,
                    $visitasiapotek->verifikasi,
                    $visitasiapotek->noktp,
                    $visitasiapotek->berlaku,
                    $visitasiapotek->tempatlahir,
                    $visitasiapotek->tanggallahir,
                    $visitasiapotek->jeniskelamin,
                    $visitasiapotek->pekerjaan,
                    $visitasiapotek->provinsi,
                    $visitasiapotek->kabupaten,
                    $visitasiapotek->kecamatan,
                    $visitasiapotek->desa,
                    $visitasiapotek->alamat,
                    $visitasiapotek->kodepos,
                    $visitasiapotek->nohp,
                    $visitasiapotek->email,
                    $visitasiapotek->created_at,
                ));
                }
            });
        })->export('xls');
    }

    /**
     * Download pdf data buku
     * @return Dompdf
     */
    private function exportPdf($visitasiapoteks)
    {
        $data['visitasiapoteks'] = $visitasiapoteks;
        $pdf = PDF::loadView('pdf.visitasiapoteks', $data);
        return $pdf->download('visitasiapoteks.pdf');
    }


}
