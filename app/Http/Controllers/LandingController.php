<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class LandingController extends Controller
{

    public function landing()
    {
        return view('landing');
    }

    public function about()
    {
        return view('about');
    }
}
