<?php

namespace App\Http\Controllers;

use App\Mail\TestMail;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;

class MailController extends Controller
{
    public function sendEmail()
    {
        $details = [
            'title' => 'Mail from Media',
            'body' => 'This message for testing mail using gmail:)'
        ];

        Mail::to('arailym.lollipop12@gmail.com')->send(new TestMail($details));
        return "Thanks, email sent";
    }
}
