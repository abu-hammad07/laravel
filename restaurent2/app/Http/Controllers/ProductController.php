<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ProductController extends Controller
{
    //
    public function getProductsView(Request $request){
        return view ('product');
    }
}
