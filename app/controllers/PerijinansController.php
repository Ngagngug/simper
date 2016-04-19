<?php

class PerijinansController extends \BaseController {

	/**
	 * Display a listing of perijinans
	 *
	 * @return Response
	 */
	public function index()
	{
		if(Datatable::shouldHandle())
	    {
	        return Datatable::collection(Perijinan::all(array('id','nama')))
	            ->showColumns('id', 'nama')
	            ->addColumn('', function ($model) {
                    $html = '<center> <a href="'.route('admin.perijinans.edit', ['perijinans'=>$model->id]).'" class="btn btn-sm btn-default">edit</a> ';
					$html .= Form::open(array('url' => route('admin.perijinans.destroy', ['perijinans'=>$model->id]), 'method'=>'delete', 'class'=>'inline js-confirm'));
					$html .= Form::submit('delete', array('class' => 'btn btn-sm btn-danger'));
					$html .= Form::close();
					return $html;
                })
	            ->searchColumns('nama')
	            ->orderColumns('nama')
	            ->make();
	    }
		return View::make('perijinans.index')->withTitle('Perijinan');
	}

	/**
	 * Show the form for creating a new perijinan
	 *
	 * @return Response
	 */
	public function create()
	{
		return View::make('perijinans.create')->withTitle('Tambah Perijinan');
	}

	/**
	 * Store a newly created perijinan in storage.
	 *
	 * @return Response
	 */
	public function store()
	{
		$validator = Validator::make($data = Input::all(), Perijinan::$rules);

		if ($validator->fails())
		{
			return Redirect::back()->withErrors($validator)->withInput();
		}

		$perijinan = Perijinan::create($data);

		return Redirect::route('admin.perijinans.index')->with("successMessage", "Berhasil menyimpan $perijinan->nama ");
	}

	/**
	 * Display the specified perijinan.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function show($id)
	{
		$perijinan = Perijinan::findOrFail($id);

		return View::make('perijinans.show', compact('perijinan'));
	}

	/**
	 * Show the form for editing the specified perijinan.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function edit($id)
	{

		$perijinan = Perijinan::find($id);

		return View::make('perijinans.edit', ['perijinan'=>$perijinan])->withTitle("Ubah $perijinan->nama");
	}

	/**
	 * Update the specified perijinan in storage.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function update($id)
	{
		$perijinan = Perijinan::findOrFail($id);

		$validator = Validator::make($data = Input::all(), $perijinan->updateRules());

		if ($validator->fails())
		{
			return Redirect::back()->withErrors($validator)->withInput();
		}

		$perijinan->update($data);

		return Redirect::route('admin.perijinans.index')->with("successMessage", "Berhasil menyimpan $perijinan->nama ");

	}

	/**
	 * Remove the specified perijinan from storage.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function destroy($id)
	{
		// mengecek apakah author bisa dihapus
		if (!Perijinan::destroy($id))
		{
			return Redirect::back();
		}

		return Redirect::route('admin.perijinans.index')->with('successMessage', 'Perijinan berhasil dihapus.');
	}

}
