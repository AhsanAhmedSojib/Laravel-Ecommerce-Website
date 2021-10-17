<?php

namespace App\Http\Controllers\Frontend;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

use App\Models\Product;
use App\Models\ProductImage;

class PagesController extends Controller
{
    //
    public function index() {
        return view('frontend.pages.index');
    }
    public function contact() {
        return view('frontend.pages.contact');
    }

}
