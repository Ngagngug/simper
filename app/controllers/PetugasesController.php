<?php

class PetugasesController extends \BaseController {
	/**
	 * Display a listing of penggunas
	 *
	 * @return Response
	 */
	public function index()
	{
		if(Datatable::shouldHandle())
	    {
	        return Datatable::collection(Petugase::with('perijinan')->get())
                ->addColumn('perijinan', function ($model) {
				   return $model->perijinan->nama;
				   })
	            ->showColumns('id', 'lokasi', 'nama', 'verifikasi', 'created_at')
	            ->addColumn('', function ($model) {
                    $html = '<center> <a href="'.route('admin.petugases.edit', ['petugases'=>$model->id]).'" class="btn btn-sm btn-default">edit</a> ';
					$html .= Form::open(array('url' => route('admin.petugases.destroy', ['petugases'=>$model->id]), 'method'=>'delete', 'class'=>'inline js-confirm'));
					$html .= Form::submit('delete', array('class' => 'btn btn-sm btn-danger'));
					$html .= Form::close();
					return $html;
                })
	            ->searchColumns('perijinan', 'lokasi', 'nama', 'verifikasi', 'created_at')
	            ->orderColumns('perijinan', 'lokasi', 'nama', 'verifikasi', 'created_at')
	            ->make();
	    }
		return View::make('petugases.index')->withTitle('Pelamar');
	}

	/**
	 * Show the form for creating a new pengguna
	 *
	 * @return Response
	 */
	public function create()
	{
		return View::make('petugases.create')->withTitle('Tambah User');
	}

	/**
	 * Store a newly created pengguna in storage.
	 *
	 * @return Response
	 */
	public function store()
	{
		$validator = Validator::make($data = Input::all(), Petugase::$rules);

		//$data = Input::merge(array('verifikasi', 'Proses Verifikasi'));

		if ($validator->fails())
		{
			return Redirect::back()->withErrors($validator)->withInput();
		}

		$petugases = Petugase::create($data);

		return Redirect::route('admin.petugases.index')->with("successMessage", "Berhasil menyimpan $petugases->nama ");
	}

	/**
	 * Display the specified pengguna.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function show($id)
	{
		$petugases = Petugase::findOrFail($id);

		return View::make('petugases.show', compact('petugases'));
	}

	/**
	 * Show the form for editing the specified pengguna.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function edit($id)
	{
		$petugase = Petugase::find($id);

		return View::make('petugases.edit', ['petugase'=>$petugase])->withTitle("Ubah $petugase->nama");
	}

	/**
	 * Update the specified pengguna in storage.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function update($id)
	{
		$petugase = Petugase::findOrFail($id);

		$validator = Validator::make($data = Input::all(), $petugase->updateRules());

		if ($validator->fails())
		{
			return Redirect::back()->withErrors($validator)->withInput();
		}

		$petugase->update($data);

		return Redirect::route('admin.petugases.index')->with("successMessage", "Berhasil menyimpan $petugase->nama ");
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
		if (!Petugase::destroy($id))
		{
			return Redirect::back();
		}

		return Redirect::route('admin.petugases.index')->with('successMessage', 'User berhasil dihapus.');
	}

	/**
     * Tampilkan halaman untuk export excel
     * @return response
     */
    public function export()
    {
        return View::make('petugases.export')->withTitle('Export Data');
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

        $petugases = Petugase::whereIn('perijinan_id', Input::get('perijinan_id'))->get();

        $type = Input::get('type');
        switch ($type) {
            case 'xls':
                return $this->exportExcel($petugases);
                break;

            case 'pdf':
                return $this->exportPdf($petugases);
                break;

            default:
                break;
        }
    }

    /**
     * Download excel data buku
     * @return PHPExcel
     */
    private function exportExcel($petugases)
    {
        Excel::create('Data Pelamar Perijinan', function($excel) use ($petugases) {
            // Set the properties
            $excel->setTitle('Data Pelamar Perijinan')
                  ->setCreator('Husin Nanda Perwira');

            $excel->sheet('Data Pelamar', function($sheet) use ($petugases) {
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
                foreach ($petugases as $petugase) {
                   $sheet->row(++$row, array(
                    $petugase->nama,
                    $petugase->perijinan->nama,
                    $petugase->lokasi,
                    $petugase->verifikasi,
                    $petugase->noktp,
                    $petugase->berlaku,
                    $petugase->tempatlahir,
                    $petugase->tanggallahir,
                    $petugase->jeniskelamin,
                    $petugase->pekerjaan,
                    $petugase->provinsi,
                    $petugase->kabupaten,
                    $petugase->kecamatan,
                    $petugase->desa,
                    $petugase->alamat,
                    $petugase->kodepos,
                    $petugase->nohp,
                    $petugase->email,
                    $petugase->created_at,
                ));
                }
            });
        })->export('xls');
    }

    /**
     * Download pdf data buku
     * @return Dompdf
     */
    private function exportPdf($petugases)
    {
        $data['petugases'] = $petugases;
        $pdf = PDF::loadView('pdf.petugases', $data);
        return $pdf->download('petugas.pdf');
    }

}
