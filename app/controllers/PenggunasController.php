<?php

class PenggunasController extends \BaseController {


	/**
	 * Instantiate a new BooksController
	 */
	public function __construct()
	{
		// Letakan filter regularUser sebelum memanggil fungsi borrow
        $this->beforeFilter('regularUser', array( 'only' => array('borrow') ) );

        // CSRF filter sebelum method destroy
		$this->beforeFilter('csrf', array( 'only' => array('destroy') ) );
	}

	/**
	 * Display a listing of penggunas
	 *
	 * @return Response
	 */
	public function index()
	{
		if(Datatable::shouldHandle())
	    {
	        return Datatable::collection(Pengguna::with('perijinan')->get())
                ->addColumn('perijinan', function ($model) {
				   return $model->perijinan->nama;
				   })
	            ->showColumns('id', 'lokasi', 'nama', 'verifikasi', 'created_at')
	            ->addColumn('', function ($model) {
                    $html = '<center> <a href="'.route('admin.penggunas.edit', ['penggunas'=>$model->id]).'" class="btn btn-sm btn-default">edit</a> ';
					$html .= Form::open(array('url' => route('admin.penggunas.destroy', ['penggunas'=>$model->id]), 'method'=>'delete', 'class'=>'inline js-confirm'));
					$html .= Form::submit('delete', array('class' => 'btn btn-sm btn-danger'));
					$html .= Form::close();
					return $html;
                })
	            ->searchColumns('perijinan', 'lokasi', 'nama', 'verifikasi', 'created_at')
	            ->orderColumns('perijinan', 'lokasi', 'nama', 'verifikasi', 'created_at')
	            ->make();
	    }
		return View::make('penggunas.index')->withTitle('Pemohon');
	}

	/**
	 * Show the form for creating a new pengguna
	 *
	 * @return Response
	 */
	public function create()
	{
		return View::make('penggunas.create')->withTitle('Tambah User');
	}

	/**
	 * Store a newly created pengguna in storage.
	 *
	 * @return Response
	 */
	public function store()
	{
		$validator = Validator::make($data = Input::all(), Pengguna::$rules);

		//$data = Input::merge(array('verifikasi', 'Proses Verifikasi'));

		if ($validator->fails())
		{
			return Redirect::back()->withErrors($validator)->withInput();
		}

		$pengguna = Pengguna::create($data);

		return Redirect::route('admin.penggunas.index')->with("successMessage", "Berhasil menyimpan $pengguna->nama ");
	}

	/**
	 * Display the specified pengguna.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function show($id)
	{
		$pengguna = Pengguna::findOrFail($id);

		return View::make('penggunas.show', compact('pengguna'));
	}

	/**
	 * Show the form for editing the specified pengguna.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function edit($id)
	{
		$pengguna = Pengguna::find($id);

		return View::make('penggunas.edit', ['pengguna'=>$pengguna])->withTitle("Ubah $pengguna->nama");
	}

	/**
	 * Update the specified pengguna in storage.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function update($id)
	{
		$pengguna = Pengguna::findOrFail($id);

		$validator = Validator::make($data = Input::all(), $pengguna->updateRules());

		if ($validator->fails())
		{
			return Redirect::back()->withErrors($validator)->withInput();
		}

		$pengguna->update($data);

		return Redirect::route('admin.penggunas.index')->with("successMessage", "Berhasil menyimpan $pengguna->nama ");
	}

	/**
	 * Remove the specified pengguna from storage.
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

		return Redirect::route('admin.penggunas.index')->with('successMessage', 'User berhasil dihapus.');
	}

	/**
     * Tampilkan halaman untuk export excel
     * @return response
     */
    public function export()
    {
        return View::make('penggunas.export')->withTitle('Export Data');
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
        $rules = ['perijinan_id'=>'required', 'type'=>'required'];
        $messages = ['perijinan_id.required'=>'Anda belum memilih kategori. Pilih minimal 1 kategori.'];
        $validator = Validator::make(Input::all(), $rules, $messages);
        if ($validator->fails())
        {
            return Redirect::back()->withErrors($validator);
        }

        $penggunas = Pengguna::whereIn('perijinan_id', Input::get('perijinan_id'))->get();

        $type = Input::get('type');
        switch ($type) {
            case 'xls':
                return $this->exportExcel($penggunas);
                break;

            case 'pdf':
                return $this->exportPdf($penggunas);
                break;

            default:
                break;
        }
    }

    /**
     * Download excel data buku
     * @return PHPExcel
     */
    private function exportExcel($penggunas)
    {
        Excel::create('Data Pelamar Perijinan', function($excel) use ($penggunas) {
            // Set the properties
            $excel->setTitle('Data Pelamar Perijinan')
                  ->setCreator('Husin Nanda Perwira');

            $excel->sheet('Data Pelamar', function($sheet) use ($penggunas) {
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
                    'Alamat Domisili',
                    'Kode Pos',
                    'No HP',
                    'Email',  
                    'Tanggal Registrasi'           
                ));
                foreach ($penggunas as $pengguna) {
                   $sheet->row(++$row, array(
                    $pengguna->nama,
                    $pengguna->perijinan->nama,
                    $pengguna->lokasi,
                    $pengguna->verifikasi,
                    $pengguna->noktp,
                    $pengguna->berlaku,
                    $pengguna->tempatlahir,
                    $pengguna->tanggallahir,
                    $pengguna->jeniskelamin,
                    $pengguna->pekerjaan,
                    $pengguna->provinsi,
                    $pengguna->kabupaten,
                    $pengguna->kecamatan,
                    $pengguna->desa,
                    $pengguna->alamat,
                    $pengguna->alamatdomisili,
                    $pengguna->kodepos,
                    $pengguna->nohp,
                    $pengguna->email,
                    $pengguna->created_at,
                ));
                }
            });
        })->export('xls');
    }

    /**
     * Download pdf data buku
     * @return Dompdf
     */
    private function exportPdf($penggunas)
    {
        $data['penggunas'] = $penggunas;
        $pdf = PDF::loadView('pdf.penggunas', $data);
        return $pdf->download('pelamar.pdf');
    }


}
