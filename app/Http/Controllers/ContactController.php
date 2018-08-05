<?php

namespace App\Http\Controllers;

use App\Http\Requests\ContactRequest;
use Mail;
//use Illuminate\Http\Request;

class ContactController extends Controller
{
    public function  getForm()
    {
        return view('contact');
    }

    public function  postForm( ContactRequest $request )
    {
        Mail::send('email_contact', $request->all(), function ( $message ){
            $message->to('yisa00@hotmail.fr')->subject('Contact');
        });

        return view('confirm');
    }
    //
}
