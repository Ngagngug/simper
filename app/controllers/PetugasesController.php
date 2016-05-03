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
        	$usersArray = Sentry::findAllUsersWithAccess('admin');
            $usersCollection = new Illuminate\Database\Eloquent\Collection($usersArray);

	        return Datatable::collection($usersCollection)
                ->addColumn('first_name', function ($model) {
				   return $model->first_name . ' ' . $model->last_name;
				   })
	            ->showColumns('created_at')
	            ->addColumn('last_login', function($model) {
                    return ($model->last_login ? $model->last_login->toDateTimeString() : '');
                })
	            ->addColumn('', function ($model) {
                    $html = '<center> <a href="'.route('admin.petugases.edit', ['petugases'=>$model->id]).'" class="btn btn-sm btn-default">edit</a> ';
					$html .= Form::open(array('url' => route('admin.petugases.destroy', ['petugases'=>$model->id]), 'method'=>'delete', 'class'=>'inline js-confirm'));
					$html .= Form::submit('delete', array('class' => 'btn btn-sm btn-danger'));
					$html .= Form::close();
					return $html;
                })
	            ->searchColumns('first_name', 'created_at', 'last_login')
	            ->orderColumns('first_name', 'created_at', 'last_login')
	            ->make();
	    }
		return View::make('petugases.index')->withTitle('Petugas');
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

		$petugases = Sentry::register(Input::all(), true);

		$regularGroup = Sentry::findGroupByName('admin');

            // Masukkan user ke grup regular
        $petugases->addGroup($regularGroup);

		return Redirect::route('admin.petugases.index')->with("successMessage", "Berhasil menyimpan $petugases->first_name " . " " . "$petugases->last_name");
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

		return View::make('petugases.edit', ['petugase'=>$petugase])->withTitle("Ubah $petugase->first_name" . " " . "$petugase->last_name");
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

		return Redirect::route('admin.petugases.index')->with("successMessage", "Berhasil menyimpan $petugase->first_name" . " " . "$petugase->last_name ");
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

		$petugase = User::find($id);
        $petugase->delete();

        return Redirect::route('admin.petugases.index')->with('successMessage', 'User berhasil dihapus');
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
        // $rules = ['perijinan_id'=>'required', 'type'=>'required'];
        // $messages = ['perijinan_id.required'=>'Anda belum memilih kategori. Pilih minimal 1 kategori.'];
        // $validator = Validator::make(Input::all(), $rules, $messages);
        // if ($validator->fails())
        // {
        //     return Redirect::back()->withErrors($validator);
        // }

		$usersArray = Sentry::findAllUsersWithAccess('admin');
	    $usersCollection = new Illuminate\Database\Eloquent\Collection($usersArray);
			

        $type = Input::get('type');
        switch ($type) {
            case 'xls':
                return $this->exportExcel($usersCollection);
                break;

            case 'pdf':
                return $this->exportPdf($usersCollection);
                break;

            default:
                break;
        }
    }

    /**
     * Download excel data buku
     * @return PHPExcel
     */
    private function exportExcel($usersCollection)
    {
        Excel::create('Data Petugas Perijinan', function($excel) use ($usersCollection) {
            // Set the properties
            $excel->setTitle('Data Petugas Perijinan')
                  ->setCreator('Husin Nanda Perwira');

            $excel->sheet('Data Petugas', function($sheet) use ($usersCollection) {
                $row = 1;
                $sheet->row($row, array(
                    'Email',
                    'Password',
                    'Nama Depan',
                    'Nama Belakang',
                    'Registrasi',     
                ));
                foreach ($usersCollection as $usersCollectione) {
                   $sheet->row(++$row, array(
                    $usersCollectione->email,
                    $usersCollectione->password,
                    $usersCollectione->first_name,
                    $usersCollectione->last_name,
                    $usersCollectione->created_at,
                ));
                }
            });
        })->export('xls');
    }

    /**
     * Download pdf data buku
     * @return Dompdf
     */
    private function exportPdf($usersCollection)
    {
        $data['usersCollection'] = $usersCollection;
        $pdf = PDF::loadView('pdf.petugases', $data);
        return $pdf->download('petugas.pdf');
    }

}
