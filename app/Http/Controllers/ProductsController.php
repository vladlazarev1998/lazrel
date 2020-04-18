<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App;
class ProductsController extends Controller
{
    public function index(){
        if(request()->filled('product_id')){
            return $this->product(request()->product_id);
        }else{
            $products = App\Product::all();
            $categories = App\Category::all();
            return view('categories', compact('products', 'categories'));
        }
    }


    public function product($product_id){
        $product = App\Product::find($product_id);
        if($product){
            return view('product', compact('product'));
        }
        else{
            abort(404);
        }

    }

}
