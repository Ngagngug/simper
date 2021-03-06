<?php

class GuestController extends BaseController {

    /**
     * Layout yang akan digunakan untuk controller ini
     */
    protected $layout = 'layouts.guest';

     /**
     * Tampikan halaman root
     * @return response
     */
    public function index()
    {
        // Redirect to dashboard if user has logged in
        if (Sentry::check()) {
            return Redirect::to('dashboard');
        }
        $this->layout->content = View::make('guest.index')->withTitle("Chart Pelamar Perijinan");
    }

    /**
     * Tampilkan halaman login
     * @return response
     */
    public function login()
    {
        // Redirect to dashboard if user has logged in
        if (Sentry::check()) {
            Session::reflash();
            return Redirect::to('dashboard');
        }
        $this->layout->content = View::make('guest.login');
    }

    public function getIndex()
    {
         // Redirect to dashboard if user has logged in
        if (Sentry::check()) {
            return Redirect::to('dashboard');
        }
        $this->layout->content =  View::make('guest.index')->withTitle("Chart Pengguna");
    }

    public function getAPIApotek()
    {
        $days = Input::get('days', 7);

        $range = \Carbon\Carbon::now()->subDays($days);

        $stats = DB::table('penggunas')
            ->where('perijinan_id', '=', '1')
            ->where('updated_at', '>=', $range)
            ->groupBy('date')
            ->orderBy('date', 'ASC')
            ->remember(1440) // Cache the data for 24 hours
            ->get([
                DB::raw('Date(created_at) as date'),
                DB::raw('COUNT(*) as value')
            ]);

        return $stats;
    }

    public function getAPIPuskesmas()
    {
        $days = Input::get('days', 7);

        $range = \Carbon\Carbon::now()->subDays($days);

        $stats = DB::table('penggunas')
            ->where('perijinan_id', '=', '2')
            ->where('updated_at', '>=', $range)
            ->groupBy('date')
            ->orderBy('date', 'ASC')
            ->remember(1440) // Cache the data for 24 hours
            ->get([
                DB::raw('Date(created_at) as date'),
                DB::raw('COUNT(*) as value')
            ]);

        return $stats;
    }

    public function getAPIKlinik()
    {
        $days = Input::get('days', 7);

        $range = \Carbon\Carbon::now()->subDays($days);

        $stats = DB::table('penggunas')
            ->where('perijinan_id', '=', '3')
            ->where('updated_at', '>=', $range)
            ->groupBy('date')
            ->orderBy('date', 'ASC')
            ->remember(1440) // Cache the data for 24 hours
            ->get([
                DB::raw('Date(created_at) as date'),
                DB::raw('COUNT(*) as value')
            ]);

        return $stats;
    }

      public function getAPIRumahSakit()
    {
        $days = Input::get('days', 7);

        $range = \Carbon\Carbon::now()->subDays($days);

        $stats = DB::table('penggunas')
            ->where('perijinan_id', '=', '4')
            ->where('updated_at', '>=', $range)
            ->groupBy('date')
            ->orderBy('date', 'ASC')
            ->remember(1440) // Cache the data for 24 hours
            ->get([
                DB::raw('Date(created_at) as date'),
                DB::raw('COUNT(*) as value')
            ]);

        return $stats;
    }

     /**
     * Tampilkan halaman lupa password
     * @return response
     */
    public function forgotPassword()
    {
        $this->layout->content = View::make('guest.forgot');
    }

    /**
     * Kirim email reset password
     * @return response
     */
    public function sendResetCode()
    {
        // Validasi email dan catcha
        $rules = array(
            'email' => 'required|exists:users',
            'recaptcha_response_field' => 'required|recaptcha'
        );

        $validator = Validator::make($data = Input::all(), $rules);

        // Redirect jika validasi gagal
        if ($validator->fails()) {
            return Redirect::back()->withErrors($validator)->withInput();
        }

        $user = Sentry::findUserByLogin(Input::get('email'));
        $data = array(
            'email' => $user->email,
            // Generate code untuk password reset
            'resetCode' => $user->getResetPasswordCode(),
        );

        // Kirim email untuk reset password
        Mail::send('emails.auth.reminder', $data, function ($message) use ($user) {
            $message->to($user->email, $user->first_name . ' ' . $user->last_name)->subject('Reset Password Larapus');
        });

        // Redirect ke halaman login
        return Redirect::route('guest.login')->with("successMessage", "Silahkan cek email Anda ($user->email) untuk me-reset password.");
    }

    /**
     * Tampilkan halaman untuk membuat password baru
     * @param  string $token
     * @return response
     */
    public function createNewPassword()
    {
        try {
            $user = Sentry::findUserByLogin(Input::get('email'));
            if($user->checkResetPasswordCode(Input::get('resetCode'))) {
                $this->layout->content = View::make('guest.resetpassword')
                    ->with('email', $user->email)
                    ->with('resetCode', Input::get('resetCode'));
            } else {
                return Redirect::route('guest.login')->with('errorMessage', 'Reset code tidak valid.');
            }
        } catch (UserNotFoundException $e) {
            return Redirect::route('guest.login')->with('errorMessage', $e->getMessage());
        }
    }

    /**
     * Simpan password user yang baru
     * @param  string $token
     * @return response
     */
    public function storeNewPassword()
    {
        try
        {
            // Cari user berdasarkan email
            $user = Sentry::findUserByLogin(Input::get('email'));

            // Check apakah resetCode valid
            if ($user->checkResetPasswordCode(Input::get('resetCode')))
            {
                // Validasi password baru
                $rules = array('password' => 'confirmed|required|min:5');
                $validator = Validator::make($data = Input::all(), $rules);

                // Redirect jika validasi gagal
                if ($validator->fails()) {
                    return Redirect::back()->withErrors($validator)->withInput();
                }

                // Reset password user
                $user->attemptResetPassword(Input::get('resetCode'), Input::get('password'));

                return Redirect::route('guest.login')->with('successMessage', 'Berhasil me-reset password. Silahkan login dengan password baru.');
            }
            else
            {
                return Redirect::route('guest.login')->with('errorMessage', 'Reset code tidak valid.');
            }
        }
        catch (Cartalyst\Sentry\Users\UserNotFoundException $e)
        {
            return Redirect::route('guest.login')->with('errorMessage', $e->getMessage());
        }
    }

}