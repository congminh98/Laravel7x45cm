<?php

namespace App\Http\Controllers\Collections;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class CollectionController extends Controller
{
    public function accessories(Request $request){
        return view('layouts.pages.collections.accessories.index');
    }
    public function allProducts(){
        return view('layouts.pages.collections.accessories.index');
    }
    public function shop(){
        return view('layouts.pages.collections.col-types.col_type');
    }
    public function categories(){
        return view('layouts.pages.collections.categories.view');
    }
}
