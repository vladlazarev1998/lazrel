<?php

namespace App\Http\Controllers;

use App\Alias;
use App\Http\Controllers;
use Illuminate\Http\Request;
use App\Http\Controllers\Auth;

class AliasController extends Controller
{
    public function index($alias){

//        $aliases = new Alias();
//        $alias = $aliases->getAlias($alias);
//
//        if($alias){
//            $name_alias = 'App\Http\Controllers' . '\\'.ucfirst($alias).'Controller';
//            $contact = new $name_alias();
//            return $contact->index();
//
//        }
        if($alias == 'home'){
            return view('home');
        }
        elseif($alias == 'category'){
            $category = new CategoriesController();
            return $category->index();
        }
        elseif ($alias == 'product'){
            $product = new ProductsController();
            return $product->index();
        }
        elseif ($alias == 'contact'){
            $contact = new ContactController();
            return $contact->index();
        }
        else{
            abort(404);
        }
    }
}
