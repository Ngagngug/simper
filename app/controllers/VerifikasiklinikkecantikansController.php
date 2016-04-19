<?php

class VerifikasiklinikkecantikansController extends \BaseController {

	/**
	 * Display a listing of verifikasiklinikkecantikans
	 *
	 * @return Response
	 */
	public function index()
	{
		$verifikasiklinikkecantikans = Verifikasiklinikkecantikan::all();

		return View::make('verifikasiklinikkecantikans.index', compact('verifikasiklinikkecantikans'));
	}

	/**
	 * Show the form for creating a new verifikasiklinikkecantikan
	 *
	 * @return Response
	 */
	public function create()
	{
		return View::make('verifikasiklinikkecantikans.create');
	}

	/**
	 * Store a newly created verifikasiklinikkecantikan in storage.
	 *
	 * @return Response
	 */
	public function store()
	{
		$validator = Validator::make($data = Input::all(), Verifikasiklinikkecantikan::$rules);

		if ($validator->fails())
		{
			return Redirect::back()->withErrors($validator)->withInput();
		}

		Verifikasiklinikkecantikan::create($data);

		return Redirect::route('verifikasiklinikkecantikans.index');
	}

	/**
	 * Display the specified verifikasiklinikkecantikan.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function show($id)
	{
		$verifikasiklinikkecantikan = Verifikasiklinikkecantikan::findOrFail($id);

		return View::make('verifikasiklinikkecantikans.show', compact('verifikasiklinikkecantikan'));
	}

	/**
	 * Show the form for editing the specified verifikasiklinikkecantikan.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function edit($id)
	{
		$verifikasiklinikkecantikan = Verifikasiklinikkecantikan::find($id);

		return View::make('verifikasiklinikkecantikans.edit', compact('verifikasiklinikkecantikan'));
	}

	/**
	 * Update the specified verifikasiklinikkecantikan in storage.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function update($id)
	{
		$verifikasiklinikkecantikan = Verifikasiklinikkecantikan::findOrFail($id);

		$validator = Validator::make($data = Input::all(), Verifikasiklinikkecantikan::$rules);

		if ($validator->fails())
		{
			return Redirect::back()->withErrors($validator)->withInput();
		}

		$verifikasiklinikkecantikan->update($data);

		return Redirect::route('verifikasiklinikkecantikans.index');
	}

	/**
	 * Remove the specified verifikasiklinikkecantikan from storage.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function destroy($id)
	{
		Verifikasiklinikkecantikan::destroy($id);

		return Redirect::route('verifikasiklinikkecantikans.index');
	}

}
