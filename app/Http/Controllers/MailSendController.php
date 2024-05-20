<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;
use App\Mail\ContactMail;
use App\Mail\PlainTextMail;

class MailSendController extends Controller
{
    public function index(){
        return view('contacts.index');
    }

    public function confirm(Request $request)
    {

        $data = (object) $request->all();

        return view('contacts.confirm', compact('data'));
    }

    public function send(Request $request)
    {
        $data = $request->all();

        Mail::send('contacts.send', ['data' => $data], function($message){
            $message->to('info@example.com', 'Test')
            ->subject('テストメール送信タイトル1111');
        });

        return redirect('/')->with('status', 'お問い合わせ内容を送信しました。');
    }
}