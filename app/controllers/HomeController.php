<?php

class HomeController extends BaseController {

	/*
	|--------------------------------------------------------------------------
	| Default Home Controller
	|--------------------------------------------------------------------------
	|
	| You may wish to use controllers instead of, or in addition to, Closure
	| based routes. That's great! Here is an example controller method to
	| get you started. To route to this controller, just add the route:
	|
	|	Route::get('/', 'HomeController@showWelcome');
	|
	*/

	protected $layout = 'layouts.master';

	public function dashboard()
	{
		$user = Sentry::getUser();
        $admin = Sentry::findGroupByName('admin');
        $regular = Sentry::findGroupByName('regular');

        // is admin
        if ($user->inGroup($admin)) {  
            $this->layout->content = View::make('dashboard.admin')
                    ->withTitle('Dashboard');
        }

        // is regular user
        if ($user->inGroup($regular)) {
            $this->layout->content = View::make('dashboard.regular')
                    ->withTitle('Dashboard');
        }
	}

	public function authenticate()
    {
        // Ambil credentials dari $_POST variable
        $credentials = array(
            'email'    => Input::get('email'),
            'password' => Input::get('password'),
        );

        try {
            // authentikasi user
            $user = Sentry::authenticate($credentials, false);

            // Kembalikan user ke dashboard
            return Redirect::intended('dashboard');
        } catch (Cartalyst\Sentry\Users\WrongPasswordException $e) {
            return Redirect::back()->with('errorMessage', 'Password yang Anda masukan salah.');
        } catch (Exception $e) {
            return Redirect::back()->with('errorMessage', trans('Akun dengan email tersebut tidak ditemukan di sistem kami.'));
        }
    }

    public function logout()
    {
    	Sentry::logout();
    	return Redirect::to('login')->with('successMessage', 'Anda berhasil logout.');
    }

	public function showWelcome()
	{
		return View::make('hello');
	}

     public function editPassword()
    {
        $this->layout->content = View::make('dashboard.editpassword')
            ->withTitle('Ubah Password');
    }

    /**
     * Ubah password user
     * @return response
     */
    public function updatePassword()
    {
        $user = Sentry::getUser();

        // validasi password lama
        if(!$user->checkPassword(Input::get('oldpassword'))) {
            return Redirect::back()->with('errorMessage', 'Password Lama Anda salah.');
        }

        // validasi konfirmasi password baru
        $rules = array('newpassword' => 'confirmed|required|min:5');
        $validator = Validator::make($data = Input::all(), $rules);

        if ($validator->fails()) {
            return Redirect::back()->withErrors($validator)->withInput();
        }

        // Simpan password baru
        $user->password = Input::get('newpassword');
        $user->save();

        // Redirect ke halaman sebelumnya
        return Redirect::back()->with('successMessage', 'Password berhasil diubah.');
    }

}
