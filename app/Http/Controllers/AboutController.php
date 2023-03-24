<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AboutController extends Controller
{
    public function pageAbout()
    {
        return  view('about');
    }
}
