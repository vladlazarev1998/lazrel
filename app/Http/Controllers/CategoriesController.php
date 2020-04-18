<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App;
class CategoriesController extends Controller
{
    public function index(){
        if(request()->filled('category_id')){
            return $this->category(request()->category_id);
        }else{
            $products = App\Product::all();
            $categories = App\Category::all();
            return view('categories', compact('products', 'categories'));
        }
    }

    public function category($category_id){
        $products = App\Product::where('category_id', $category_id)->where('status', 1)->get();
        return view('category', compact('products'));
    }
}
