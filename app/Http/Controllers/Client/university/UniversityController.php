<?php

namespace App\Http\Controllers\Client\university;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class UniversityController extends Controller
{
    public function home(){


        return view('client.pages.university.dashboard');
    }
}
