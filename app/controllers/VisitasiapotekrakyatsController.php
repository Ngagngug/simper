<?php

class VisitasiapotekrakyatsController extends \BaseController {

	/**
	 * Display a listing of visitasiapoteks
	 *
	 * @return Response
	 */
	public function index()
	{
		$matchThese = ['perijinan_id' => '2','verifikasi' => 'Visitasi Selesai'];
		$orThose = ['perijinan_id' => '2','verifikasi' => 'Visitasi Gagal'];
		$orThoses = ['perijinan_id' => '2','verifikasi' => 'Proses Visitasi'];
		if(Datatable::shouldHandle())
	    {
	     	 return Datatable::collection(Pengguna::where($matchThese)->orwhere($orThose)->orwhere($orThoses)->get())
	            ->showColumns('id','nama', 'verifikasi', 'updated_at')
	            ->addColumn('', function ($model) {
                    $html = '<center> <a href="'.route('admin.visitasiapotekrakyats.edit', ['visitasiapotekrakyats'=>$model->id]).'" class="btn btn-sm btn-default">Visitasi</a> ';
					// $html .= Form::open(array('url' => route('admin.visitasiapoteks.destroy', ['visitasiapoteks'=>$model->id]), 'method'=>'delete', 'class'=>'inline js-confirm'));
					// $html .= Form::submit('delete', array('class' => 'btn btn-sm btn-danger'));
					// $html .= Form::close();
					return $html;
                })
	            ->searchColumns('nama', 'verifikasi', 'updated_at')
	            ->orderColumns('nama', 'verifikasi', 'updated_at')
	            ->make();
	    }
		return View::make('visitasiapotekrakyats.index')->withTitle('Visitasi Apotek Rakyat');

	}

	/**
	 * Show the form for creating a new visitasiapotek
	 *
	 * @return Response
	 */
	public function create()
	{
		return View::make('visitasiapotekrakyats.create')->withTitle('Tambah Visitasi');
	}

	/**
	 * Store a newly created visitasiapotek in storage.
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

		return Redirect::route('admin.visitasiapotekrakyats.index')->with("successMessage", "Berhasil menyimpan $verifikasi->verifikasi ");
	}

	/**
	 * Display the specified visitasiapotek.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function show($id)
	{
		$verifikasi = Pengguna::findOrFail($id);

		return View::make('visitasiapotekrakyats.show', compact('verifikasi'));
	}

	/**
	 * Show the form for editing the specified visitasiapotek.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function edit($id)
	{

    	$verifikasi = Pengguna::findOrFail($id);

	    $data = Verifikasiapotekrakyat::all();

		// return View::make('devices', compact(['locations', 'devices']);

		return View::make('visitasiapotekrakyats.edit', ['verifikasi'=>$verifikasi, 'data'=>$data])->withTitle("Verifikasi $verifikasi->nama");

	}

	/**
	 * Update the specified visitasiapotek in storage.
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

		$data = Verifikasiapotekrakyat::all();

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

			$verifikasi->verifikasi = "Visitasi Selesai";

		 	Mail::send('emails.visitasi.messagesuccess',$syaratString, function($message) use($verifikasi){
       		 
       		$message->to($verifikasi->email,$verifikasi->nama)->subject('Verifikasi Sistem Informasi Perizinan');
   		 
   		 	});

 		 	$hasil['verifikasi'] = $verifikasi;
	        $pdf = PDF::loadView('pdf.hasilvisitasi', $hasil);
	        return $pdf->download($verifikasi->nama.'_hasilvisitasiapoteks.pdf');


		} else {

			$verifikasi->verifikasi = "Visitasi Gagal";

			Mail::send('emails.visitasi.messagefailed', $syaratString, function($message) use($verifikasi){
       		 
       		$message->to($verifikasi->email,$verifikasi->nama)->subject('Verifikasi Sistem Informasi Perizinan');
   		 
   		 	});

		}

		$verifikasi->save();

		return Redirect::route('admin.visitasiapotekrakyats.index')->with("successMessage", "Berhasil menyimpan $verifikasi->verifikasi" );
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
		if (!Pengguna::destroy($id))
		{
			return Redirect::back();
		}

		return Redirect::route('admin.visitasiapotekrakyats.index')->with('successMessage', 'User berhasil dihapus.');

	}

	/**
     * Tampilkan halaman untuk export excel
     * @return response
     */
    public function export()
    {
        return View::make('visitasiapotekrakyats.export')->withTitle('Export Data');
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
        $verifikasi = Pengguna::where('perijinan_id', '2')->whereIn('verifikasi',Input::get('verifikasi'))->get();

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
           Excel::create('Data Visitasi Perijinan', function($excel) use ($verifikasi) {
            // Set the properties
            $excel->setTitle('Data Visitasi Perijinan')
                  ->setCreator('Husin Nanda Perwira');

            $excel->sheet('Data Visitasi', function($sheet) use ($verifikasi) {
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
        $pdf = PDF::loadView('pdf.visitasi', $data);
        return $pdf->download('visitasiapotekrakyats.pdf');
    }


}
