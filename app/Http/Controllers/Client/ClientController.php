<?php

namespace App\Http\Controllers\Client;

use App\Models\Post;
use App\Models\Corporate;
use App\Models\Intenship;
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
        
        if(!$user){
            abort(404);
        }

        if($user->role == 'student'){
            return redirect() ->route('student.home');
        }

        if($user->role == 'student'){
            return redirect() ->route('student.home');
        }

        if($user->role == 'corporate'){
            //return 'University Home';
            return redirect() ->route('company.home');
        }
        

    }
    public function home(Request $request)
    {
        $internships = Intenship::orderby('created_at','desc')
                                ->where('status',true)
                                ->where('approved',true)
                                ->get();

        $corporates = Corporate::orderby('created_at','desc')->get();
        return view('client.pages.home')->with('internships',$internships)->with('corporates',$corporates);
    }

    public function blogs()
    {
        $posts = Post::where('status','published')->get();
        return view('client.pages.blogs',compact('posts'));
    }

    public function blog($slug)
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
