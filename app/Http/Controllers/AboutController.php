<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AboutController extends Controller
{
    public function vwAbout()
    {
        return view('Pages.About.about-us');
    }
}
