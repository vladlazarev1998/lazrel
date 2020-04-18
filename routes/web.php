<?php

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



//Route::get('category', function (){
////    $products = DB::table('products')->get();
//    $products = App\Product::all();
//    return view('category', compact('products'));
//});
Route::get('/', 'HomeController@index')->name('home');

Route::post('/contact/send','ContactController@send')->name('contact-form');

Auth::routes();

//Route::match(['get', 'post'], 'register', function (){
//   redirect('/');
//});

Route::get('logout', 'Auth\LoginController@logout');

Route::prefix('admin')->middleware('auth')->group(function (){
    Route::get('/', 'Admin\IndexController@index');

    Route::get('/category_list', 'Admin\CategoryController@index');  // Category
    Route::get('/product_list', 'Admin\ProductController@index');    // Product
    Route::get('/delete', 'Admin\DeleteController@index');
    Route::get('/contact_list', 'Admin\ContactController@index');


    Route::post('/updateProduct', 'Admin\ProductController@updateProduct');
    Route::post('/updateCategory', 'Admin\CategoryController@updateCategory');
});

Route::get('{alias}', 'AliasController@index')->name('alias');
//Route::get('category', 'ProductsController@index')->name('category');
//Route::get('category/{category_id}', 'ProductsController@category');
//Route::get('product/{product_id}', 'ProductsController@product');

//Route::get('/contact', 'ContactController@index')->name('contact');




