<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Mail\NewUserNotification;
use Illuminate\Support\Facades\Mail;

class FeedbackController extends Controller
{
    //

    public function index() {
        return view('mail.index');
    }

    public function send(Request $request) {

        $info = [
            'to'=>$request->email,
            'subject'=>$request->subject,
            'body'=>$request->body
        ];

        Mail::to($request->email)->send(new NewUserNotification($info));
        return 'A message has been sent to Mailtrap!';

    }
}
