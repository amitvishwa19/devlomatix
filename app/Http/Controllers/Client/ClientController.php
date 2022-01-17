<?php

namespace App\Http\Controllers\Client;

use App\Models\Subscription;
use Illuminate\Http\Request;
use App\Events\SubscriptionEvent;
use App\Services\AppMailingService;
use App\Http\Controllers\Controller;

class ClientController extends Controller
{
    public function home(Request $request)
    {
        //$value = $request->cookie('subscription');
        //dd(request()->cookie() );
        return view('client.pages.home');
    }

    public function blogs()
    {
        $posts = Post::where('status','published')->get();
        return view('client.pages.blogs',compact('posts'));
    }

    public function blog()
    {

        return view('client.pages.blog');
    }

    public function about()
    {

        return view('client.pages.about');
    }

    public function contact()
    {

        return view('client.pages.contact');
    }

    public function subscribe(Request $request,AppMailingService $mail)
    {
        $subscription = New Subscription;
        $subscription->email = $request->email;
        $subscription->save();

        //$response = new Response('Hello world');
        //$response->withCookie(cookie('subscription','subscription',10));

        //event(new SubscriptionEvent($request));
        event(new SubscriptionEvent($request->email));
        //activity()->log('Look mum, I logged something');

        //return redirect() ->route('app.home')->withCookie(cookie('subscription','subscription',10));
        return redirect() ->route('app.home');
    }

    public function unSubscribe(Request $request,AppMailingService $mail){


    }

    public function cookie_consent()
    {
        return redirect()->back()->withCookie(cookie('cookie_consent','cookie_consent',(365 * 24 * 60)));
    }

    public function test(){
        $settings = \AppSetting::all();
        $settings = \AppSetting::set('app_name','devlomatix10');
        $settings = \AppSetting::get('app_description');
        return $settings;
        //return AppSetting::all();
        //return 'test from clientcontroller';

    }
}
