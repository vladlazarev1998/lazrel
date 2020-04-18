<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class DeleteController extends Controller
{
    public function index(){
        if(request()->filled('category_id')){
            DB::delete('delete from categories where id='. request()->category_id .'');
            return redirect('/admin/category_list')->with('message', 'Successful');
        }elseif (request()->filled('product_id')){
            DB::delete('delete from products where id='. request()->product_id .'');
            return redirect('/admin/product_list')->with('message', 'Successful');
        }
        else{

        }
    }
}
