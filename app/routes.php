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
    //Verifikasi Controller
        Route::get('penggunas/export', array('as'=>'admin.penggunas.export', 'uses'=>'PenggunasController@export'));
        Route::post('penggunas/export-post', array('as'=>'admin.penggunas.exportpost', 'uses'=>'PenggunasController@exportPost'));
        
        Route::get('verifikasiapoteks/export', array('as'=>'admin.verifikasiapoteks.export', 'uses'=>'VerifikasiapoteksController@export'));
        Route::post('verifikasiapoteks/export-post', array('as'=>'admin.verifikasiapoteks.exportpost', 'uses'=>'VerifikasiapoteksController@exportPost'));
    	
        Route::get('verifikasikliniks/export', array('as'=>'admin.verifikasikliniks.export', 'uses'=>'VerifikasikliniksController@export'));
        Route::post('verifikasikliniks/export-post', array('as'=>'admin.verifikasikliniks.exportpost', 'uses'=>'VerifikasikliniksController@exportPost'));
        
        Route::get('verifikasiklinikdialises/export', array('as'=>'admin.verifikasiklinikdialises.export', 'uses'=>'VerifikasiklinikdialisesController@export'));
        Route::post('verifikasiklinikdialises/export-post', array('as'=>'admin.verifikasiklinikdialises.exportpost', 'uses'=>'VerifikasiklinikdialisesController@exportPost'));
        
        Route::get('verifikasiklinikkecantikans/export', array('as'=>'admin.verifikasiklinikkecantikans.export', 'uses'=>'VerifikasiklinikkecantikansController@export'));
        Route::post('verifikasiklinikkecantikans/export-post', array('as'=>'admin.verifikasiklinikkecantikans.exportpost', 'uses'=>'VerifikasiklinikkecantikansController@exportPost'));
        
        Route::get('verifikasiklinikkecantikans/export', array('as'=>'admin.verifikasiklinikkecantikans.export', 'uses'=>'VerifikasiklinikkecantikansController@export'));
        Route::post('verifikasiklinikkecantikans/export-post', array('as'=>'admin.verifikasiklinikkecantikans.exportpost', 'uses'=>'VerifikasiklinikkecantikansController@exportPost'));
       
        Route::get('verifikasilabklinikumums/export', array('as'=>'admin.verifikasilabklinikumums.export', 'uses'=>'VerifikasilabklinikumumsController@export'));
        Route::post('verifikasilabklinikumums/export-post', array('as'=>'admin.verifikasilabklinikumums.exportpost', 'uses'=>'VerifikasilabklinikumumsController@exportPost'));
       
        Route::get('verifikasilaboptiks/export', array('as'=>'admin.verifikasilaboptiks.export', 'uses'=>'VerifikasilaboptiksController@export'));
        Route::post('verifikasilaboptiks/export-post', array('as'=>'admin.verifikasilaboptiks.exportpost', 'uses'=>'VerifikasilaboptiksController@exportPost'));
       
        Route::get('verifikasioptikals/export', array('as'=>'admin.verifikasioptikals.export', 'uses'=>'VerifikasioptikalsController@export'));
        Route::post('verifikasioptikals/export-post', array('as'=>'admin.verifikasioptikals.exportpost', 'uses'=>'VerifikasioptikalsController@exportPost'));

        Route::get('verifikasitokoobats/export', array('as'=>'admin.verifikasitokoobats.export', 'uses'=>'VerifikasitokoobatsController@export'));
        Route::post('verifikasitokoobats/export-post', array('as'=>'admin.verifikasitokoobats.exportpost', 'uses'=>'VerifikasitokoobatsController@exportPost'));

        Route::get('verifikasiapotekrakyats/export', array('as'=>'admin.verifikasiapotekrakyats.export', 'uses'=>'VerifikasiapotekrakyatsController@export'));
        Route::post('verifikasiapotekrakyats/export-post', array('as'=>'admin.verifikasiapotekrakyats.exportpost', 'uses'=>'VerifikasiapotekrakyatsController@exportPost'));

        Route::get('verifikasialatkesehatans/export', array('as'=>'admin.verifikasialatkesehatans.export', 'uses'=>'VerifikasialatkesehatansController@export'));
        Route::post('verifikasialatkesehatans/export-post', array('as'=>'admin.verifikasialatkesehatans.exportpost', 'uses'=>'VerifikasialatkesehatansController@exportPost'));

        Route::get('verifikasirumahsakits/export', array('as'=>'admin.verifikasirumahsakits.export', 'uses'=>'VerifikasirumahsakitsController@export'));
        Route::post('verifikasirumahsakits/export-post', array('as'=>'admin.verifikasirumahsakits.exportpost', 'uses'=>'VerifikasirumahsakitsController@exportPost'));

        Route::get('verifikasilabklinikumummadyas/export', array('as'=>'admin.verifikasilabklinikumummadyas.export', 'uses'=>'VerifikasilabklinikumummadyasController@export'));
        Route::post('verifikasilabklinikumummadyas/export-post', array('as'=>'admin.verifikasilabklinikumummadyas.exportpost', 'uses'=>'VerifikasilabklinikumummadyasController@exportPost'));

        Route::get('verifikasiusahakecilobats/export', array('as'=>'admin.verifikasiusahakecilobats.export', 'uses'=>'VerifikasiusahakecilobatsController@export'));
        Route::post('verifikasiusahakecilobats/export-post', array('as'=>'admin.verifikasiusahakecilobats.exportpost', 'uses'=>'VerifikasiusahakecilobatsController@exportPost'));

        Route::get('verifikasiusahamikroobats/export', array('as'=>'admin.verifikasiusahamikroobats.export', 'uses'=>'VerifikasiusahamikroobatsController@export'));
        Route::post('verifikasiusahamikroobats/export-post', array('as'=>'admin.verifikasiusahamikroobats.exportpost', 'uses'=>'VerifikasiusahamikroobatsController@exportPost'));



    //Visitasi Controller
        Route::get('visitasiapoteks/export', array('as'=>'admin.visitasiapoteks.export', 'uses'=>'VisitasiapoteksController@export'));
        Route::post('visitasiapoteks/export-post', array('as'=>'admin.visitasiapoteks.exportpost', 'uses'=>'VisitasiapoteksController@exportPost'));
   
        Route::get('visitasiapotekrakyats/export', array('as'=>'admin.visitasiapotekrakyats.export', 'uses'=>'VisitasiapotekrakyatsController@export'));
        Route::post('visitasiapotekrakyats/export-post', array('as'=>'admin.visitasiapotekrakyats.exportpost', 'uses'=>'VisitasiapotekrakyatsController@exportPost'));
        
        Route::get('visitasialatkesehatans/export', array('as'=>'admin.visitasialatkesehatans.export', 'uses'=>'VisitasialatkesehatansController@export'));
        Route::post('visitasialatkesehatans/export-post', array('as'=>'admin.visitasialatkesehatans.exportpost', 'uses'=>'VisitasialatkesehatansController@exportPost'));

        Route::get('visitasiklinikdialises/export', array('as'=>'admin.visitasiklinikdialises.export', 'uses'=>'VisitasiklinikdialisesController@export'));
        Route::post('visitasiklinikdialises/export-post', array('as'=>'admin.visitasiklinikdialises.exportpost', 'uses'=>'VisitasiklinikdialisesController@exportPost'));

        Route::get('visitasiklinikkecantikans/export', array('as'=>'admin.visitasiklinikkecantikans.export', 'uses'=>'VisitasiklinikkecantikansController@export'));
        Route::post('visitasiklinikkecantikans/export-post', array('as'=>'admin.visitasiklinikkecantikans.exportpost', 'uses'=>'VisitasiklinikkecantikansController@exportPost'));

        Route::get('visitasikliniks/export', array('as'=>'admin.visitasikliniks.export', 'uses'=>'VisitasikliniksController@export'));
        Route::post('visitasikliniks/export-post', array('as'=>'admin.visitasikliniks.exportpost', 'uses'=>'VisitasikliniksController@exportPost'));

        Route::get('visitasilabklinikumums/export', array('as'=>'admin.visitasilabklinikumums.export', 'uses'=>'VisitasilabklinikumumsController@export'));
        Route::post('visitasilabklinikumums/export-post', array('as'=>'admin.visitasilabklinikumums.exportpost', 'uses'=>'VisitasilabklinikumumsController@exportPost'));

        Route::get('visitasilaboptiks/export', array('as'=>'admin.visitasilaboptiks.export', 'uses'=>'VisitasilaboptiksController@export'));
        Route::post('visitasilaboptiks/export-post', array('as'=>'admin.visitasilaboptiks.exportpost', 'uses'=>'VisitasilaboptiksController@exportPost'));

        Route::get('visitasioptikals/export', array('as'=>'admin.visitasioptikals.export', 'uses'=>'VisitasioptikalsController@export'));
        Route::post('visitasioptikals/export-post', array('as'=>'admin.visitasioptikals.exportpost', 'uses'=>'VisitasioptikalsController@exportPost'));

        Route::get('visitasirumahsakits/export', array('as'=>'admin.visitasirumahsakits.export', 'uses'=>'VisitasirumahsakitsController@export'));
        Route::post('visitasirumahsakits/export-post', array('as'=>'admin.visitasirumahsakits.exportpost', 'uses'=>'VisitasirumahsakitsController@exportPost'));

        Route::get('visitasitokoobats/export', array('as'=>'admin.visitasitokoobats.export', 'uses'=>'VisitasitokoobatsController@export'));
        Route::post('visitasitokoobats/export-post', array('as'=>'admin.visitasitokoobats.exportpost', 'uses'=>'VisitasitokoobatsController@exportPost'));

        Route::get('visitasilabklinikumummadyas/export', array('as'=>'admin.visitasilabklinikumummadyas.export', 'uses'=>'VisitasilabklinikumummadyasController@export'));
        Route::post('visitasilabklinikumummadyas/export-post', array('as'=>'admin.visitasilabklinikumummadyas.exportpost', 'uses'=>'VisitasilabklinikumummadyasController@exportPost'));

        Route::get('visitasiusahakecilobats/export', array('as'=>'admin.visitasiusahakecilobats.export', 'uses'=>'VisitasiusahakecilobatsController@export'));
        Route::post('visitasiusahakecilobats/export-post', array('as'=>'admin.visitasiusahakecilobats.exportpost', 'uses'=>'VisitasiusahakecilobatsController@exportPost'));

        Route::get('visitasiusahamikroobats/export', array('as'=>'admin.visitasiusahamikroobats.export', 'uses'=>'VisitasiusahamikroobatsController@export'));
        Route::post('visitasiusahamikroobats/export-post', array('as'=>'admin.visitasiusahamikroobats.exportpost', 'uses'=>'VisitasiusahamikroobatsController@exportPost'));

    //Controller Recource
        Route::resource('penggunas', 'PenggunasController');
    	Route::resource('perijinans', 'PerijinansController');

    //Verifikasi Controller Recource
    	Route::resource('verifikasiapoteks', 'VerifikasiapoteksController');
        Route::resource('verifikasikliniks', 'VerifikasikliniksController');
        Route::resource('verifikasiklinikdialises', 'VerifikasiklinikdialisesController');
        Route::resource('verifikasiklinikkecantikans', 'VerifikasiklinikkecantikansController');
        Route::resource('verifikasilabklinikumums', 'VerifikasilabklinikumumsController');
        Route::resource('verifikasilaboptiks', 'VerifikasilaboptiksController');
        Route::resource('verifikasioptikals', 'VerifikasioptikalsController');
        Route::resource('verifikasitokoobats', 'VerifikasitokoobatsController');
        Route::resource('verifikasiapotekrakyats', 'VerifikasiapotekrakyatsController');
        Route::resource('verifikasialatkesehatans', 'VerifikasialatkesehatansController');
        Route::resource('verifikasirumahsakits', 'VerifikasirumahsakitsController');
        Route::resource('verifikasilabklinikumummadyas','VerifikasilabklinikumummadyasController');
        Route::resource('verifikasiusahakecilobats', 'VerifikasiusahakecilobatsController');
        Route::resource('verifikasiusahamikroobats', 'VerifikasiusahamikroobatsController');


  //Visitasi Controller Recource
        Route::resource('visitasiapoteks', 'VisitasiapoteksController');
        Route::resource('visitasiapotekrakyats', 'VisitasiapotekrakyatsController');
        Route::resource('visitasialatkesehatans', 'VisitasialatkesehatansController');
        Route::resource('visitasiklinikdialises', 'VisitasiklinikdialisesController');
        Route::resource('visitasiklinikkecantikans', 'VisitasiklinikkecantikansController');
        Route::resource('visitasikliniks', 'VisitasikliniksController');
        Route::resource('visitasilabklinikumums', 'VisitasilabklinikumumsController');
        Route::resource('visitasilaboptiks', 'VisitasilaboptiksController');
        Route::resource('visitasioptikals', 'VisitasioptikalsController');
        Route::resource('visitasirumahsakits', 'VisitasirumahsakitsController');
        Route::resource('visitasitokoobats', 'VisitasitokoobatsController');
        Route::resource('visitasilabklinikumummadyas', 'VisitasilabklinikumummadyasController');
        Route::resource('visitasiusahakecilobats', 'VisitasiusahakecilobatsController');
        Route::resource('visitasiusahamikroobats', 'VisitasiusahamikroobatsController');

        
        
    });
});

Route::get('login', array('as'=>'guest.login', 'uses'=>'GuestController@login'));
Route::post('authenticate', 'HomeController@authenticate');
Route::get('logout', 'HomeController@logout');