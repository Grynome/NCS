<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class CareersController extends Controller
{
    public function vwCareers()
    {
        return view('Pages.Careers.index');
    }
}
