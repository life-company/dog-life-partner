<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use Mail;

class MailSendController extends Controller
{
    public function index(){

        $data = [];

        Mail::send('contacts.index', $data, function($message){
            $message->to('info@example.com', 'Test')
            ->subject('This is a test mail');
        });
    }
}
