<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Country;
use App\Models\Genre;
use App\Models\Year;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    /* public function __construct()
    {
        $this->middleware('auth');
    } */

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function home()
    {
        $listGenres = Genre::all();
        $listCountries = Country::all();
        $listYears = Year::all();
        return view('home', compact('listGenres', 'listCountries', 'listYears'));
    }
}
