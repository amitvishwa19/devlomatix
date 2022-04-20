<?php

namespace App\Http\Controllers\Admin;

use Exception;
use App\Models\Post;
use App\Models\User;
use Facebook\Facebook;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;
use Laravel\Socialite\Facades\Socialite;
use Illuminate\Support\Facades\Validator;
use Facebook\Exceptions\FacebookSDKException;
use Facebook\Exceptions\FacebookResponseException;

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

        //return $request->page_id;

        //$pages = $this->api->get('/me/accounts', auth()->user()->facebook_token);
        //$pages = $pages->getGraphEdge()->asArray();



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

      
        //return view('admin.pages.setting.setting');
        $response = $this->api->get('/me/accounts', auth()->user()->facebook_token);
        
        $pages = $response->getGraphEdge()->asArray();
        return $pages;
        dd($pages);
        return redirect()->route('setting.index',['type'=>'facebook'])->with('pages',$pages);
        return $pages;
    }

    public function publishToPage(Request $request){

        return [
            'status' =>200,
            'msg'=>'Published to facebook page successfully',
            'id' => 'id'
            ];

        $page_id = Auth::user()->facebook_page_id??'';
        $access_token = Auth::user()->facebook_token;
        $page_access_token = $this->pageAccessToken($page_id);

        $text = ['message' =>'Test Messege'];
        
        $id = $request->id;
        $post = Post::find($id);

        return $this->textPost($post['description'], $page_id, $page_access_token);
        //return $this->imagePost($post['description'], $post['feature_image'],$page_id, $page_access_token);
        //return $this->linkPost($post['description'], 'www.devlomatix.com/blog/'.$post['slug'], $page_id, $page_access_token);
    }

    public function pageAccessToken($page_id){

        try {
            // Get the \Facebook\GraphNodes\GraphUser object for the current user.
            // If you provided a 'default_access_token', the '{access-token}' is optional.
            $response = $this->api->get('/me/accounts', Auth::user()->facebook_token);
       } catch(FacebookResponseException $e) {
           // When Graph returns an error
           echo 'Graph returned an error: ' . $e->getMessage();
           exit;
       } catch(FacebookSDKException $e) {
           // When validation fails or other local issues
           echo 'Facebook SDK returned an error: ' . $e->getMessage();
           exit;
       }
    
       try {
           $pages = $response->getGraphEdge()->asArray();
           foreach ($pages as $key) {
               if ($key['id'] == $page_id) {
                   return $key['access_token'];
               }
           }
       } catch (FacebookSDKException $e) {
           dd($e); // handle exception
       }
    }

    public function textPost($text, $pageId, $token){
        try {

            $linkData = [
                'link' => 'https://www/devlomatix.com',
                'message' => 'Test Link post to page'
            ];

            //$fb_post = $this->api->post('/' . $pageId . '/feed', $linkData, $token);
              
            $fb_post = $this->api->post('/' . $pageId . '/feed', array('message' =>$text), $token);
            $fb_post = $fb_post->getGraphNode()->asArray();

            
            if($fb_post){
                return [
                    'status' =>200,
                    'msg'=>'Published to facebook page successfully',
                    'id' => $fb_post['id']
                    ];
            }else{
                return ['status' =>400,'msg'=>'Error while publishing to facebook page'];
            }
        }catch(FacebookSDKException $ex){
            return ['status' =>400,'msg'=>$ex];
        }

    }

    public function imagePost($text, $image, $pageId, $token){

        $link = 'www.devlomatix.com';
        try {
            $fb_post = $this->api->post('/' . $pageId . '/' . 'photos', array('message' => $text, 'source' => $this->api->fileToUpload($image)), $token);
            $fb_post = $fb_post->getGraphNode()->asArray();

            if($fb_post){
                return [
                    'status' =>200,
                    'msg'=>'Published to facebook page successfully',
                    'id' => $fb_post['id']
                    ];
            }else{
                return ['status' =>400,'msg'=>'Error while publishing to facebook page'];
            }


        }catch(FacebookSDKException $ex){
            return ['status' =>400,'msg'=>'Error while publishing to facebook page'];
        }
    }   
    
    public function linkPost($text, $link, $pageId, $token){
        try {

            $linkData = [
                'link' => 'https://www/devlomatix.com',
                'message' => 'Test Link post to page'
            ];

            //$fb_post = $this->api->post('/' . $pageId . '/feed', $linkData, $token);
              
            $fb_post = $this->api->post('/' . $pageId . '/feed', array('link' =>$link), $token);
            $fb_post = $fb_post->getGraphNode()->asArray();

            
            if($fb_post){
                return [
                    'status' =>200,
                    'msg'=>'Published to facebook page successfully',
                    'id' => $fb_post['id']
                    ];
            }else{
                return ['status' =>400,'msg'=>'Error while publishing to facebook page'];
            }
        }catch(FacebookSDKException $ex){
            return ['status' =>400,'msg'=>'Error while publishing to facebook page'];
        }

    }
}
