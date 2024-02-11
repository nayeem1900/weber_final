<?php

namespace App\Http\Controllers;

use App\Mail\ContactMail;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;

class SendmailController extends Controller
{

    public function maildata(Request $req){
        $data =[
            'name'=>$req->name,
            'email'=>$req->email,
            'subject'=>$req->subject,
            'message'=>$req->message,
        ];
        Mail::to('info@weber360.com')->send(new ContactMail($data));

        return response()->json(['ok'], 200);
    }


}
