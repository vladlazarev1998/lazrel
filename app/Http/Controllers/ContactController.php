<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App;

class ContactController extends Controller
{
    public function index(){
        return view('contact');
    }
    public function send(Request $request){

        $validatedData = $request->validate([
            'name'    => 'required',
            'email'   => 'required|email',
            'message' => 'required'
        ]);

        $contact = new App\Contact();
        $contact->name = $request->name;
        $contact->email = $request->email;
        $contact->message = $request->message;
        $contact->save();

        return redirect('/contact')->with('message', 'Successful');
    }
}
