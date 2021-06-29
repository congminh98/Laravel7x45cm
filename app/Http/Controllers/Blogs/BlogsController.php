<?php

namespace App\Http\Controllers\Blogs;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class BlogsController extends Controller
{
    public function news(Request $request)
    {
        return view('layouts.pages.blogs.index');
    }
    public function detail(Request $request)
    {
        return view('layouts.pages.blogs.detail');
    }
    public function masonry(Request $request)
    {
        return view('layouts.pages.blogs.masonry');
    }
}
