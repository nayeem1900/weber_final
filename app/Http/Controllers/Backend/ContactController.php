<?php

namespace App\Http\Controllers\Backend;

use App\Mail\ContactMail;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;

class ContactController extends Controller
{


    //
    public function sendEmail(Request $req)
    {

        $data = [
                'name'  =>  $req->name,
                'email'  =>  $req->email,
                 'subject'  =>  $req->subject,
                'message'  =>  $req->message,
            ];

        Mail::to('harun@ibfbd.org')->send(new ContactMail($data));
        return back()->with('sent-message',"Your Message has been sent successfully");

            }



}
