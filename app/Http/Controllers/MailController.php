<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;
use App\Mail\ContactMail;

class MailController extends Controller
{
    
    public function send(Request $request)
    {
        


        Mail::to('hello@example.com')->send(new ContactMail($request->name, $request->email, $request->msg));


    }
}
