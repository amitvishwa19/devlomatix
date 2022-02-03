<?php

use App\Http\Controllers\Admin\PolicyController;
use App\Http\Controllers\Client\ClientController;
use App\Http\Controllers\Admin\SubscriptionController;




Route::get('/', [ClientController::class, 'home'])->name('app.home');
//Route::get('/home', [ClientController::class, 'home'])->name('home');
Route::get('/contact', [ClientController::class, 'contact'])->name('app.contact');
Route::get('/about', [ClientController::class, 'about'])->name('app.about');
Route::get('/blogs', [ClientController::class, 'blogs'])->name('app.blogs');
Route::get('/cookie_consent', [ClientController::class, 'cookie_consent'])->name('app.cookie.consent');


// Route::get('/home', function(){
//     return view('client.welcome');
// })->name('home');


//Devlomatix Solutions & Devlomatix Games policy
Route::get('/games/privacy', [PolicyController::class, 'DevlomatixGamesPrivacy'])->name('games.privacy');
Route::get('/games/terms', [PolicyController::class, 'DevlomatixGamesTerms'])->name('games.terms');


Route::get('/privacy', [PolicyController::class, 'DevlomatixSolutionsPrivacy'])->name('privacy');
Route::get('/terms', [PolicyController::class, 'DevlomatixSolutionsTerms'])->name('terms');


Route::get('/termscondition', [HomeController::class, 'terms'])->name('terms');

// App Subscription
Route::post('/subscribe',[ClientController::class,'subscribe'])->name('app.subscribe');

// App Inquiry
Route::post('/inquire', [ClientController::class, 'inquiry'])->name('app.inquire');

//Auto deploy of app
Route::post('/deploy',[AutoDeployController::class,'deploy'])->name('app.auto.deploy');
