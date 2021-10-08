<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;
use App\Mail\TestMail;

class MailController extends Controller
{
    public function sendMail(Request $request){
        $contenuEmail=[
            "name"=>$request->name,
            "email"=>$request->email,
            "subject"=>$request->subject,
            "message"=>$request->message
        ];

        Mail::to('thousand24@outlook.fr')->send(new TestMail($contenuEmail));
        return redirect()->back()->with('message','gg');
    }
}
