<?php

use App\Http\Controllers\Client\ClientController;




Route::get('/', [ClientController::class, 'home'])->name('app.home');
Route::get('/contact', [ClientController::class, 'contact'])->name('app.contact');
Route::get('/about', [ClientController::class, 'about'])->name('app.about');
Route::get('/blogs', [ClientController::class, 'blogs'])->name('app.blogs');
Route::post('/subscribe', [ClientController::class, 'subscribe'])->name('app.subscribe');
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
//oute::resource('/subscribe',SubscriptionController::class);

// App Inquiry
Route::get('/inquire', [InquiryController::class, 'index'])->name('inquire');

//Auto deploy of app
Route::post('/deploy',[AutoDeployController::class,'deploy'])->name('app.auto.deploy');
