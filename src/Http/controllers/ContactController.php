<?php

namespace testnamespace\contact\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Routing\Controller;
use testnamespace\contact\models\Contact;


class ContactController extends Controller
{
    public function index(){
        return view('contact::contactView');
    }

    public function send(Request $request){

        Contact::create($request->all());

        return $request->all();


    }
}
