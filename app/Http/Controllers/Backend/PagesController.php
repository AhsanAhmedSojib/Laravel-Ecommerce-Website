<?php
namespace App\Http\Controllers\Backend;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

use App\Models\Product;
use Image;//probblem11111111111111111111111111111111111111111----------------
use App\Models\ProductImage;

class PagesController extends Controller
{
    public function index()
    {
        return view('backend.pages.index');
    }
   
}
