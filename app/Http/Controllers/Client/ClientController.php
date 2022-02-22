<?php

namespace App\Http\Controllers\Client;

use App\Models\Post;
use App\Models\Subscription;
use Illuminate\Http\Request;
use Illuminate\Http\Response;
use App\Events\SubscriptionEvent;
use App\Http\Controllers\Controller;

class ClientController extends Controller
{

    public function dashboard()
    {
        $user = auth()->user();

        if($user->can('view_candidate_dashboard')){
            return view('client.pages.candidate.dashboard');
        }

        if($user->can('view_recruiter_dashboard')){
            return view('client.pages.recruiter.dashboard');
        }

    }
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

    public function subscribe(Request $request)
    {
        $subscription = New Subscription;
        $subscription->email = $request->email;
        $subscription->save();

        //$response = new Response('Hello world');
        //$response->withCookie(cookie('subscription','subscription',10));

        event(new SubscriptionEvent($request));


        return redirect() ->route('app.home')->withCookie(cookie('subscription','subscription',10));
    }

    public function cookie_consent()
    {
        return redirect()->back()->withCookie(cookie('cookie_consent','cookie_consent',(365 * 24 * 60)));
    }


}
