<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class PolicyController extends Controller
{
    //



    public function DevlomatixSolutionsPrivacy(){
        return "Devlomatix Solutions Privacy Policy";
    }


    public function DevlomatixSolutionsTerms(){
        return "Devlomatix Solutions Terms & Conditions";
    }


    public function DevlomatixGamesPrivacy(){
        return "Devlomatix Games Privacy Policy";
    }

    public function DevlomatixGamesTerms(){
        return "Devlomatix Games Terms & Conditions";
    }

}
