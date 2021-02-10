<?php

namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;

class TestMail extends Mailable
{
    use Queueable, SerializesModels;


    public $testString;

    public function __construct($testString)
    {
        $this -> testString = $testString;
    }

    public function build()
    {
        return $this
            -> from('no-reply@laravel.com')
            -> view('mail.testMail');
    }
}
