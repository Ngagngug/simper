<?php

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the Closure to execute when that URI is requested.
|
*/
Route::get('mail', function()
{
    Mail::send('message', array('name'=>'Shine'), function($message) {
        $message->to('husin.napi@gmail.com','Suhine')->subject('Hello Husin!!!');
    });
});

//Route::get('/', 'GuestController@index'); 

Route::get('/', 'GuestController@getIndex');
Route::get('apiApotek', 'GuestController@getApiApotek');
Route::get('apiPuskesmas', 'GuestController@getApiPuskesmas');
Route::get('apiKlinik', 'GuestController@getApiKlinik');
Route::get('apiRumahSakit', 'GuestController@getApiRumahSakit');

//Route::get('api', 'GuestController@getApi');

Route::get('/about', function()
{
	return View::make('about');
});

Route::get('/tes', function()
{
    return Verifikasiapotek::all();
});

Route::group(array('before' => 'auth'), function () {
    Route::get('dashboard', array('as'=>'dashboard', 'uses'=>'HomeController@dashboard'));

    Route::group(array('prefix' => 'admin', 'before' => 'admin'), function()
    {
    	Route::resource('authors', 'AuthorsController');
        Route::get('verifikasiapoteks/export', array('as'=>'admin.verifikasiapoteks.export', 'uses'=>'VerifikasiapoteksController@export'));
        Route::post('verifikasiapoteks/export-post', array('as'=>'admin.verifikasiapoteks.exportpost', 'uses'=>'VerifikasiapoteksController@exportPost'));
    	
        Route::get('verifikasikliniks/export', array('as'=>'admin.verifikasikliniks.export', 'uses'=>'VerifikasikliniksController@export'));
        Route::post('verifikasikliniks/export-post', array('as'=>'admin.verifikasikliniks.exportpost', 'uses'=>'VerifikasikliniksController@exportPost'));
        
        Route::get('verifikasiklinikdialises/export', array('as'=>'admin.verifikasiklinikdialises.export', 'uses'=>'VerifikasiklinikdialisesController@export'));
        Route::post('verifikasiklinikdialises/export-post', array('as'=>'admin.verifikasiklinikdialises.exportpost', 'uses'=>'VerifikasiklinikdialisesController@exportPost'));
        
        Route::get('verifikasiklinikkecantikans/export', array('as'=>'admin.verifikasiklinikkecantikans.export', 'uses'=>'VerifikasiklinikkecantikansController@export'));
        Route::post('verifikasiklinikkecantikans/export-post', array('as'=>'admin.verifikasiklinikkecantikans.exportpost', 'uses'=>'VerifikasiklinikkecantikansController@exportPost'));
        
        Route::get('penggunas/export', array('as'=>'admin.penggunas.export', 'uses'=>'PenggunasController@export'));
        Route::post('penggunas/export-post', array('as'=>'admin.penggunas.exportpost', 'uses'=>'PenggunasController@exportPost'));
        Route::get('visitasiapoteks/export', array('as'=>'admin.visitasiapoteks.export', 'uses'=>'VisitasiapoteksController@export'));
        Route::post('visitasiapoteks/export-post', array('as'=>'admin.visitasiapoteks.exportpost', 'uses'=>'VisitasiapoteksController@exportPost'));
        Route::resource('penggunas', 'PenggunasController');
    	Route::resource('perijinans', 'PerijinansController');
    	Route::resource('verifikasiapoteks', 'VerifikasiapoteksController');
        Route::resource('verifikasikliniks', 'VerifikasikliniksController');
        Route::resource('verifikasiklinikdialises', 'VerifikasiklinikdialisesController');
        Route::resource('verifikasiklinikkecantikans', 'VerifikasiklinikkecantikansController');

        Route::resource('visitasiapoteks', 'VisitasiapoteksController');
    });
});

Route::get('login', array('as'=>'guest.login', 'uses'=>'GuestController@login'));
Route::post('authenticate', 'HomeController@authenticate');
Route::get('logout', 'HomeController@logout');