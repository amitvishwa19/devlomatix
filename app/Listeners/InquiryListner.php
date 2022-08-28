<?php

namespace App\Listeners;

use App\Models\User;
use App\Events\InquiryEvent;
use Illuminate\Queue\InteractsWithQueue;
use App\Notifications\InquiryNotification;
use Illuminate\Contracts\Queue\ShouldQueue;

class InquiryListner
{
    /**
     * Create the event listener.
     *
     * @return void
     */
    public function __construct()
    {
        //
    }

    /**
     * Handle the event.
     *
     * @param  InquiryEvent  $event
     * @return void
     */
    public function handle(InquiryEvent $event)
    {
        activity('Inquiry')->log('New Inquiry log');
        $users = User::permission('new_inquiry_notification')->get();
        activity('Inquiry Count')->log($users->count());

        foreach($users as $user){
            $user->notify(new InquiryNotification($event->name, $event->message));
        }

        
        $to = $event->email;
        $subject = 'Inquiry for Devlomatix :: ' . $event->subject;
        $body = 'test body';
        $data = array(
                    'name' => $event->name,
                    'message' => $event->message
                );
        $view = 'mails.inquiry';
        return appmail($to,$subject,$body,$data,$view,true);

       
    }
}
