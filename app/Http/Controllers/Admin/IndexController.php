<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App;
use Illuminate\Http\Request;

class IndexController extends Controller
{
    public function index(){
        $products = App\Product::all();
        $categories = App\Category::all();
        return view('admin.home', compact('products', 'categories'));
    }
}
