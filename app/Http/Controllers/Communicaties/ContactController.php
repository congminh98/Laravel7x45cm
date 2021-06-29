<?php

namespace App\Http\Controllers\Communicaties;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class ContactController extends Controller
{
    public function index()
    {
        return view('layouts.pages.communicaties.contact.index');
    }
    public function versionSecond()
    {
        return view('layouts.pages.communicaties.contact.version_2');
    }
}
