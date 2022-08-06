<?php

namespace App\Http\Controllers\Api\v2;

use App\Models\User;
use Illuminate\Http\Request;
use Tymon\JWTAuth\Facades\JWTAuth;
use App\Http\Resources\UserResource;
use Illuminate\Support\Facades\Auth;
use App\Http\Controllers\Api\Controller;
use Illuminate\Support\Facades\Validator;

class AuthController extends Controller
{
    public function login(Request $request)
    {   

        // $cred = $request->only(['email','password']);
        // $token = auth()->attempt($cred);
        // return $token;
        
        $this->validate($request, [
            'email' => 'required|string',
            'password' => 'required|string',
        ]);

        $credentials = $request->only(['email', 'password']);

        //return $credentials ;


        if ($token = $this->guard()->attempt($credentials)) {
            $user = auth()->user();
            return response()->json(
                [
                    'success' => true,
                    'message'=>'Login success',
                    'token'=>$token, 
                    'user'=>new UserResource($user) 
                    
                ], 200
            );
        }

        return response()->json(['success' => false,'message'=>'Invalid Credentials','token'=>null], 401);
    }

    public function register(Request $request){

        $validator = Validator::make($request->all(),[
            'email' => 'required|email|unique:users',
            'password' => 'required|min:6|required_with:confirm_password|same:confirm_password',
            'confirm_password' => 'required|min:6',
        ]);
        
        if($validator->fails()){
            return response()->json(['success' => false, 'message' => 'Invalid details', 'token'=>null],422);
        }
        
        $user = User::create(
                array_merge(
                    $validator->validated(),
                    ['password' => bcrypt($request->password)]
                )
            );

        $credentials = $request->only(['email', 'password']);
        $token = $this->guard()->attempt($credentials);

        return response()->json([
            'success' => true,
            'message'=>'Login success',
            'token'=>$token, 
            'user'=>new UserResource($user) 
        ],200);

    }

    public function refresh()
    {
        return $this->respondWithToken(auth()->refresh());
    }

    public function logout(){
        $this->guard()->logout();

        return response()->json(['message' => 'Logout successfully'],200);
    }

    public function user(){

        $user = $this->guard()->user();
        return response()->json(new UserResource($user));
    }

    public function guard()
    {
        return Auth::guard();
    }
    
    protected function respondWithToken($token)
    {
        return response()->json([
            'access_token' => $token,
            'token_type' => 'bearer',
            'expires_in' => auth()->factory()->getTTL() * 60
        ]);
    }  


    public function firebaseLogin(Request $request)
    {
        $user = User::where('email', $request->email)->first();
        if($user){
            Auth::login($user);    
        }else{
            $user = User::create([
                'email' => $request->email,
                'display_name' => $request->name,
                'password' => null,
                'avatar_url' => $request->avatar,
                'fcm_device_id' => $request->fcm_id,
                'type' => 'user',
                'role' => 'user',
                'status' => true,
            ]);
        }
        $token = JWTAuth::fromUser($user);
        $user = auth()->user();
        return response()->json(
            [
                'success' => true,
                'message'=>'Login success',
                'token'=>$token,
                'user'=>new UserResource($user)
            ], 200
        );
    }

    public function add_fcm_id(Request $request){
        return  $request->all();
        
    }
}
