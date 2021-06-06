<?php

namespace App\Http\Controllers\Admin;

use App\Mail\TestMail;
use App\Jobs\TestMailJob;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Mail;

class SandboxController extends Controller
{
    public function mail(){

        return view('admin.pages.sandbox.mail');
    }

    public function simpleMail(){


        Mail::to('jaysvishwa@gmail.com')->send(new TestMail);


        return redirect() ->route('sandbox.mail')
        ->with([
            'message'    =>'Mail sent successfully',
            'alert-type' => 'success',
        ]);
    }

    public function dispatchMail(){

        dispatch(new TestMailJob);

        return redirect() ->route('sandbox.mail')
        ->with([
            'message'    =>'Mail sent successfully with dispatch job',
            'alert-type' => 'success',
        ]);
    }
}
