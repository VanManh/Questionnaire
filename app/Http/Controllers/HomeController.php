<?php

namespace App\Http\Controllers;

use App\Surveys;

/**
 * this is controller to do auth of User
 *
 * Class HomeController
 * @package App\Http\Controllers
 */

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Http\Response
     */

}
