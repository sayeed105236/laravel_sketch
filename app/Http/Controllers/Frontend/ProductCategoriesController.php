<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Category;

class ProductCategoriesController extends Controller
{

    public function index()
    {
        //
    }

    public function show($id)
    {
        $category= Category::find($id);
        if(!is_null($category)){
          return view('frontend.pages.categories.show',compact('category'));
        }else{
          sesseion()->flash('errors', 'Sorry!! There is no category by this ID!!');
        }
        return redirect('/');
    }

}
