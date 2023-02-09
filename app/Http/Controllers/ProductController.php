<?php

namespace App\Http\Controllers;

use DB;
use Illuminate\Http\Request;
use App\Models\Product;


class ProductController extends Controller
{
    public function showAll(){
        $product = DB::select('select * from products');
        return view('home',['product' => $product]);
    }
}
