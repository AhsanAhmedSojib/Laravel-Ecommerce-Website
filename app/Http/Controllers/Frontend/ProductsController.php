<?php

namespace App\Http\Controllers\Frontend;

use Illuminate\Http\Request;
use App\Models\Product;
use App\Http\Controllers\Controller;

class ProductsController extends Controller
{
    //
    public function index() {
        $products= Product::with('images')->orderBy('id','desc')->get();

        return view('frontend.pages.product.index')->with('products',$products);
    }
    public function show($slug) {
    //
    }

}
