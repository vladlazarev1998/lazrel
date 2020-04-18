<?php

namespace App\Http\Controllers\Admin;

use App;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class ProductController extends Controller
{
    public function index(){
        if(request()->filled('product_id')){
            return $this->editProduct(request()->product_id);

        }elseif (request()->filled('add') == 1){
            return $this->editProduct();
        }
        else{
            $products = App\Product::all();
            return view('admin.product.product_list', compact( 'products'));
        }
    }

    public function editProduct($product_id = ''){
        if($product_id){
            $product = App\Product::find($product_id);
        }else{
            $product = '';
        }
        $categories = App\Category::all();
        return view('admin.product.editProduct', compact('product', 'categories'));
    }

    public function updateProduct(Request $request){

        $validatedData = $request->validate([
            'name'        => 'required',
            'description' => 'required',
        ]);

        if($request->id){
            DB::update('update products set name = "' . $request->name . '", description = "' . $request->description .'", status = "'. $request->status .'", category_id = "'. $request->category .'" where id = ?', [$request->id]);
        }else{
            $product = new App\Product();

            $product->name = $request->name;
            $product->description = $request->description;
            $product->status = $request->status;
            $product->category_id = $request->category;

            $product->save();
        }


        return redirect('/admin/product_list')->with('message', 'Successful');
    }
}
