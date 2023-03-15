<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Product;

class ProductController extends Controller
{
    //
    public function list(){
        $products = Product::all();
        error_log($products);
        return view('products', ['products'=>$products]);
    }
}
