<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Client\ClientController;



Route::get('/',[
   'uses' => 'Client\ClientController@home',
   'as' =>'app.home'
]);


Route::get('/blogs',[
   'uses' => 'Client\ClientController@blogs',
   'as' =>'app.blogs'
]);

Route::get('/blog/{slug}',[
    'uses' => 'Client\ClientController@blog',
    'as' =>'app.blog'
 ]);

Route::get('/contact',[
   'uses' => 'Client\ClientController@contact',
   'as' =>'app.contact'
]);

Route::get('/about',[
   'uses' => 'Client\ClientController@about',
   'as' =>'app.about'
]);

Route::get('/cookie_consent',[
    'uses' => 'Client\ClientController@cookie_consent',
    'as' =>'app.cookie.consent'
]);

Route::get('/cookie_consent',[
    'uses' => 'Client\ClientController@cookie_consent',
    'as' =>'app.cookie.consent'
]);






//Recruiter
//Route::get('/recruiter',['uses' => 'Client\RecruiterController@dashboard','as' =>'app.recruiter.dashboard']);







