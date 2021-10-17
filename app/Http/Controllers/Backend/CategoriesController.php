<?php

namespace App\Http\Controllers\Backend;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Models\Category;
use Image;

class CategoriesController extends Controller
{
    public function index()
    {
        $categories= Category::orderBy('id','desc')->get();
        return view('backend.pages.categories.index', compact('categories'));
    }
    public function create()
    {
        $main_categories= Category::orderBy('name','desc')->where('parent_id', NULL)->get();

        return view('backend.pages.categories.create', compact('main_categories'));
    }
      public function store(Request $request)
    {

        $validated = $request->validate([
            'name' => 'required',
            'image' => 'nullable|image',
   
        ],
        [
            'name.required'=>'Please provide a Category Id',
            'image.image'=>'Please provide a valid image with .jpg, .png, .gif, .jpeg extension',

        ]);
        $category=new Category();
        $category->name=$request->name;
        $category->description=$request->description;
        $category->parent_id=$request->parent_id;
        //insert images also


            if (count((array)$request->image) > 0) {  
                    $image= $request->file('image');
                    $img=time().'.'.$image->getClientOriginalExtension();
                    $location = public_path('images/categories/'.$img);
                    Image::make($image)->save($location);
        
                    $category->image=$img;

                    

            }                
            $category->save();

            session()->flash('success', 'A new category has been added successfully !!');
            return redirect()->route('admin.categories');

    }


}
