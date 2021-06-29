<?php

namespace App\Http\Controllers\Communicaties;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class AboutController extends Controller
{
    public function index()
    {
        return view('layouts.pages.communicaties.about.index');
    }
    public function aboutMe()
    {
        return view('layouts.pages.communicaties.about.about_me');
    }
    public function aboutAgency()
    {
        return view('layouts.pages.communicaties.about.about_agency');
    }
}
