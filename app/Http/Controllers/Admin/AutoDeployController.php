<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class AutoDeployController extends Controller
{
    public function deploy(Request $request)
    {
        activity()->log('Webhook from github ,will fire this event if new push to github');
        

        return response()->json(['message'=>'Successfully delivered notification'],200);
    }

    public function gitDeploy(Request $request){

        return 'Git Deploy';

    }
}
