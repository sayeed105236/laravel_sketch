<?php

namespace App\Http\Controllers\Backend;
use App\Http\Controllers\Controller;

use Illuminate\Http\Request;
use Illuminate\Support\Str;
use App\Models\Product;
use App\Models\ProductImage;
use Image;

class AdminProductsController extends Controller
{
  public function index()
   {
     $products= Product::orderBy('id','desc')->get();
     return view('backend.pages.product.index')->with('products', $products);
   }
    public function create()
     {

       return view('backend.pages.product.create');

     }

     public function edit($id)
      {
        $product= Product::find($id);
        session()->flash('success','Product has updated successfully!!');
        return view('backend.pages.product.edit')->with('product', $product);
      }


      public function update(Request $request,$id)
       {
         $product = Product::find($id);
         $product->title= $request->title;
         $product->description= $request->description;
         $product->price= $request->price;
         $product->quantity= $request->quantity;
         $product->category_id = $request->category_id;
         $product->brand_id = $request->brand_id;



         $product->save();


         return redirect()->route('admin.products');
       }


     public function store(Request $request)
      {
        $product = new Product;
        $product->title= $request->title;
        $product->description= $request->description;
        $product->price= $request->price;
        $product->quantity= $request->quantity;
        $product->category_id = $request->category_id;
        $product->brand_id = $request->brand_id;


        $product->slug= Str::slug($request->title);
        
        $product->admin_id = 1;
        $product->save();

        if ($request->hasFile('product_image')) {
          // insert that images
          $image= $request->file('product_image');
          $img= time(). '.'. $image->getClientOriginalExtension();
          $location=public_path('images/products/'.$img);
          Image::make($image)->save($location);

          $product_image=new ProductImage;
          $product_image->product_id= $product->id;
          $product_image->image= $img;
          $product_image->save();
        }
        return redirect()->route('admin.product.create');
      }
      public function delete($id)
      {
        $product = Product::find($id);
        if (!is_null($product)){
          $product->delete();
        }
        session()->flash('success','Product has deleted successfully!!');
        return back();
      }

}
//php artisan config:cache
//php artisan view:clear
//composer dump-autoload
