<?php
use App\Http\Controllers\Frontend\PagesController;
use App\Http\Controllers\Frontend\ProductsController;
use App\Http\Controllers\Backend\AdminPagesController;
use App\Http\Controllers\Backend\AdminProductsController;
use App\Http\Controllers\Backend\CategoriesController;
use App\Http\Controllers\Frontend\ProductCategoriesController;
use App\Http\Controllers\Backend\BrandsController;
use Illuminate\Support\Facades\Route;


/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/',[PagesController::class,'index'])->name('index');
Route::get('/contact',[PagesController::class,'contact'])->name('contact');

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|All the routes for our products
*/

Route::group(['prefix' => 'products'],function(){
Route::get('/',[ProductsController::class,'index'])->name('products');
Route::get('/{slug}',[ProductsController::class,'show'])->name('products.show');
Route::get('/search',[PagesController::class,'search'])->name('search');

//category routes
Route::get('/categories',[ProductCategoriesController::class,'index'])->name('categories.show');
Route::get('/category/{id}',[ProductCategoriesController::class,'show'])->name('categories.show');
});

  //Admin routes

Route::group(['prefix' => 'admin'],function()
{
  Route::get('/',[AdminPagesController::class,'index'])->name('admin.pages.index');



  //product routes
  Route::group(['prefix' => '/products'],function(){
    Route::get('/',[AdminProductsController::class,'index'])->name('admin.products');
    Route::get('/create',[AdminProductsController::class,'create'])->name('admin.product.create');
    Route::get('/edit/{id}',[AdminProductsController::class,'edit'])->name('admin.product.edit');


    Route::post('/store',[AdminProductsController::class,'store'])->name('admin.product.store');
    Route::post('product/edit/{id}',[AdminProductsController::class,'update'])->name('admin.product.update');
    Route::post('product/delete/{id}',[AdminProductsController::class,'delete'])->name('admin.product.delete');

});
//Category routes
Route::group(['prefix' => '/categories'],function(){
  Route::get('/',[CategoriesController::class,'index'])->name('admin.categories');
  Route::get('/create',[CategoriesController::class,'create'])->name('admin.category.create');
  Route::get('/edit/{id}',[CategoriesController::class,'edit'])->name('admin.category.edit');


  Route::post('/store',[CategoriesController::class,'store'])->name('admin.category.store');
  Route::post('category/edit/{id}',[CategoriesController::class,'update'])->name('admin.category.update');
  Route::post('category/delete/{id}',[CategoriesController::class,'delete'])->name('admin.category.delete');

});
//Category routes
Route::group(['prefix' => '/brands'],function(){
  Route::get('/',[BrandsController::class,'index'])->name('admin.brands');
  Route::get('/create',[BrandsController::class,'create'])->name('admin.brand.create');
  Route::get('/edit/{id}',[BrandsController::class,'edit'])->name('admin.brand.edit');


  Route::post('/store',[BrandsController::class,'store'])->name('admin.brand.store');
  Route::post('brand/edit/{id}',[BrandsController::class,'update'])->name('admin.brand.update');
  Route::post('brand/delete/{id}',[BrandsController::class,'delete'])->name('admin.brand.delete');

});




});





//Route::get('admin',[AdminController::class,'index']);
