<?php

namespace App\Http\Controllers\Admin;

use Exception;
use App\Models\User;
use Facebook\Facebook;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;
use Laravel\Socialite\Facades\Socialite;
use Illuminate\Support\Facades\Validator;
use Facebook\Exceptions\FacebookSDKException;

class FacebookController extends Controller
{

    private $api;
    public function __construct(Facebook $fb)
    {
        $this->middleware(function ($request, $next) use ($fb) {
            $fb->setDefaultAccessToken(Auth::user()->facebook_token);
            $this->api = $fb;
            return $next($request);
        });
    }
    
    public function add_page(Request $request){

        //$response = $this->api->get('/me?fields=id,name,email', auth()->user()->facebook_token);
        //dd($this->api->get('/me?fields=id,name', auth()->user()->facebook_token));

        $pages = $this->api->get('/me/accounts', auth()->user()->facebook_token);
        $pages = $pages->getGraphEdge()->asArray();



        $input = $request->all();
        $rule = [
            'page_id' => 'required',
        ];
        $validator = Validator::make($input,$rule);
        
        if($validator->fails()){
            return ['status'=> 400, 'msg'=>$validator->errors()->first()];
        }else{
            try{
                $user = User::findOrFail(auth()->user()->id);
                $user->facebook_page_id = $request->page_id;
                $user->save();
                
                //$pages = [];
                //$pgs = $this->api->get('/me/accounts', auth()->user()->facebook_token)->getGraphEdge()->asArray();

                //$response = $this->api->get('/me?fields=id,name,email', auth()->user()->facebook_token);


                return ['status' =>200,'msg'=>'Facebook page added successfully'];
            }catch(Exception $ex){
                return ['status'=> 400, 'msg'=>$validator->errors()->first()];
            }
            
        }
    }

    public function userProfile(){
        try {
 
            $params = "first_name,last_name,age_range,gender";
 
            $user = $this->api->get('/me?fields='.$params)->getGraphUser();
            
            return $user;
            dd($user);
 
        } catch (FacebookSDKException $e) {
 
        }
 
    }
    
    public function fb_data(){
        $pages = $this->api->get('/me/accounts', auth()->user()->facebook_token);
        dd($this->api );
        return 'fb data';
    }
    
}
