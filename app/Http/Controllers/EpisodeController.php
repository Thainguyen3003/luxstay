<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class EpisodeController extends Controller
{
    public function episode()
    {
        return view('pages.episode');
    }
}
