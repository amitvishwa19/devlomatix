<?php

namespace App\Http\Controllers\Client\student;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class StudentController extends Controller
{
    
    public function home(){


        return view('client.pages.student.dashboard');
    }

    
}
