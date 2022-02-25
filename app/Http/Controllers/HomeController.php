<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Country;
use App\Models\Genre;
use App\Models\Year;
use App\Models\Movie;

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
        $listMovieOdds = Movie::where('category_id', 9)->orderBy('updated_at', 'DESC')->take(8)->get();
        $listMovieNews = Movie::where('category_id', 8)->orderBy('updated_at', 'DESC')->take(8)->get();
        $listMovieSeries = Movie::where('category_id', 10)->orderBy('updated_at', 'DESC')->take(8)->get();
        $listMovieTheaters = Movie::where('category_id', 11)->orderBy('updated_at', 'DESC')->take(12)->get();
        
        return view('home', compact(
            'listGenres',
            'listCountries',
            'listYears',
            'listMovieOdds',
            'listMovieNews',
            'listMovieSeries',
            'listMovieTheaters'
        ));
    }
}
