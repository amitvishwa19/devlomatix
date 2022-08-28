<?php

namespace App\Http\Controllers\Admin;

use App\Models\User;
use App\Mail\AppMail;
use App\Mail\TestMail;
use App\Jobs\TestMailJob;
use Illuminate\Http\Request;
use App\Services\AppMailingService;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Mail;
use App\Notifications\InquiryNotification;

class SandboxController extends Controller
{
    public function mail(){

        //$mail->test();
        //dd(app());
        //dd(app()->make('Hello'));
        return view('admin.pages.sandbox.mail');
    }

    public function simpleMail(AppMailingService $mail){


        $to = 'amitvishwa19@gmail.com';
        $from = 'info@devlomatix.com';
        $subject = 'Test mail send by AppMail mailer class,Simple mail without job';
        $body = 'This is the mail body of test mail';
        $data =["title" => "hello", "description" => "test test test"];
        $view = 'mails.testmail';

        //Mail::to('jaysvishwa@gmail.com')->send(new TestMail);
        //$mail = Mail::to($to)->send(new AppMail($subject,$body));

        $mail->sendMail($to,$subject,$body,$data,$view);


        return redirect() ->route('sandbox.mail')
        ->with([
            'message'    =>'Mail sent successfully',
            'alert-type' => 'success',
        ]);
    }

    public function dispatchMail(AppMailingService $mail){
        $to = 'amitvishwa19@gmail.com';
        $from = 'info@devlomatix.com';
        $subject = 'Test mail send by AppMail mailer class,Simple mail with job';
        $body = 'This is the mail body of test mail';
        $data =["title" => "hello", "description" => "test test test"];
        $view = 'mails.wola';

        $mail->sendMailJob($to,$subject,$body,$data,$view);


        return redirect() ->route('sandbox.mail')
        ->with([
            'message'    =>'Mail sent successfully with dispatch job',
            'alert-type' => 'success',
        ]);
    }

    public function dispatchMailCustom(Request $request,AppMailingService $mail)
    {

        $validate = $request->validate([
            'to' => 'required',
        ]);


        $to = $request->to;
        $from = 'info@devlomatix.com';
        $subject = $request->subject;
        $body = $request->message;
        $data = null;
        $view = 'mails.wola';


        $mail->sendMailJob($to,$subject,$body);


        return redirect() ->route('sandbox.mail')
        ->with([
            'message'    =>'Custom Mail sent successfully with dispatch job',
            'alert-type' => 'success',
        ]);

    }


    public function stockMarket(){

        $user = auth()->user();
        $users = User::where('status',true)->get();
        $users = User::role('super_admin')->get();
        $users = User::permission('new_inquiry_notification')->get();

        foreach($users as $user){
            $user->notify(new InquiryNotification('Test Title','Test Body'));
        }
        //$role = $user->hasRole('admin');

        //$permissions = $user->role()->permissions();

        //$permissions = $role->getAllPermissions();
        //$permission = $user->hasPermission('admin');

        //$client = new \GuzzleHttp\Client();
        //$request = $client->get('https://www.nseindia.com/api/option-chain-indices?symbol=BANKNIFTY');
        //$response = $request->getBody()->getContents();

        //dd($permissions);
        //$user->notify(new InquiryNotification);

        $notifications = auth()->user()->notifications;
        
        return view('admin.pages.sandbox.trading');

    }
}
