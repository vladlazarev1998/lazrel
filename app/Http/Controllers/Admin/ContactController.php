<?php

namespace App\Http\Controllers\Admin;

use App;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class ContactController extends Controller
{
    public function index(){
        $contacts = App\Contact::all();
        return view('admin.contact.contact_list', compact('contacts'));
    }
}
