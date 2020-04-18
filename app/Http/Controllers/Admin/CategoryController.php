<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class CategoryController extends Controller
{
    public function index(){
        if(request()->filled('category_id')){
            return $this->editCategory(request()->category_id);

        }elseif (request()->filled('add') == 1){
            return $this->editCategory();
        }
        else{
            $categories = App\Category::all();
            return view('admin.category.category_list', compact( 'categories'));
        }
    }

    public function editCategory($category_id = ''){
        if($category_id){
            $category = App\Category::find($category_id);
        }else{
            $category = '';
        }
        return view('admin.category.editCategory', compact('category'));
    }

    public function updateCategory(Request $request){

        $validatedData = $request->validate([
            'name'        => 'required',
            'description' => 'required',
        ]);

        if($request->id){
            DB::update('update categories set name = "' . $request->name . '", description = "' . $request->description .'" where id = ?', [$request->id]);
        }else{
            $contact = new App\Category();
            $contact->name = $request->name;
            $contact->description = $request->description;
            $contact->save();
        }


        return redirect('/admin/category_list')->with('message', 'Successful');
    }
}
