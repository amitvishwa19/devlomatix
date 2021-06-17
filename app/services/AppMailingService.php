<?php

namespace App\Services;

use App\Mail\AppMail;
use App\Jobs\MailerJob;
use Illuminate\Support\Facades\Mail;




class AppMailingService
{

    public $subject;
    public $body;

    // public function __construct($subject,$body)
    // {
    //     $this->subject = $subject;
    //     $this->body = $body;
    // }

    public function test(){
        activity()->log('App mail service provider');
    }

    public function sendMail($to,$subject,$body)
    {
        //activity()->log('App mailing service  sendMail finction ' . 'Subject :- ' . $subject  );
        Mail::to($to)->send(new AppMail($subject,$body));
    }

    public function sendMailJob($to,$subject,$body)
    {
        dispatch(new MailerJob($to,$subject,$body));
    }


}


