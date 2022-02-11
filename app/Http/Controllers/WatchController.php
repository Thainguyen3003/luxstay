<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class WatchController extends Controller
{
    public function watch()
    {
        return view('pages.watch');
    }
}
