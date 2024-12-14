<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use illuminate\Support\Facades\Mail;

class EmailController extends Controller
{
    //
    public function sendWelcomeEmail(){
        $toEmail = 'ruemisiko@gmail.com';
        $message = 'welcome to writing agency';
        $subject = 'hello how can reach out';

        $response = Mail::to($toEmail)->send(new WeclomeEmail($message));

     dd($response);
    }
}
