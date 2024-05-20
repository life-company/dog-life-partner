<?php

namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;

class PlainTextMail extends Mailable
{
    use Queueable, SerializesModels;

    public function build()
    {
        return $this->view('emails.plain_text_email')
                    ->text('emails.plain_text_email_plain'); // プレーンテキストメールのビューを指定
    }
}