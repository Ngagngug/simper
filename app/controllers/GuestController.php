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
}