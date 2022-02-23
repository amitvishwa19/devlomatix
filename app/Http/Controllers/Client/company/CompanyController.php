<?php

namespace App\Http\Controllers\Client\company;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class CompanyController extends Controller
{
    public function home(){


        return view('client.pages.company.dashboard');
    }
}
