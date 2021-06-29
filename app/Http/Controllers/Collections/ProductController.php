<?php

namespace App\Http\Controllers\Collections;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class ProductController extends Controller
{
    public function index(){
        return view();
    }

    public function productsDetail(){
        return view('layouts.pages.collections.products.product_view');
    }
}
