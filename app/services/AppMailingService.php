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

    public function sendMail($to,$subject,$body,$view)
    {
        //activity()->log('App mailing service  sendMail finction ' . 'Subject :- ' . $subject  );
        Mail::to($to)->send(new AppMail($subject,$body,$view));
    }

    public function sendMailJob($to,$subject,$body,$view)
    {
        dispatch(new MailerJob($to,$subject,$body,$view));
    }


}


