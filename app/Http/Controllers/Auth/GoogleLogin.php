<?php

namespace App\Http\Controllers\Auth;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Laravel\Socialite\Facades\Socialite;

class GoogleLogin extends Controller
{
    public function redirectToGoogle(){

        return Socialite::driver('google')->redirect();

    }



    public function handleGoogleCallback(){




    }
}
