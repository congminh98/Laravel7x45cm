<?php

namespace App\Http\Controllers\Communicaties;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class FaqsController extends Controller
{
    public function index()
    {
        return view('layouts.pages.communicaties.faqs.index');
    }
    public function versionSecond()
    {
        return view('layouts.pages.communicaties.faqs.version_2');
    }
}
