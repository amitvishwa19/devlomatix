<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Api\v2\AuthController;
use App\Http\Controllers\Api\v2\PostController;
use App\Http\Controllers\Api\v2\grocery\SliderController;
use App\Http\Controllers\Api\v2\grocery\CategoryController;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/

Route::prefix('v2')->group(function(){

    Route::post('login',[AuthController::class,'login']);
    Route::post('register',[AuthController::class,'register']);

    

    Route::middleware('auth:api')->group(function(){
        Route::get('refresh',[AuthController::class,'refresh']);
        Route::get('user',[AuthController::class,'user']);

        Route::get('posts',[PostController::class,'posts']);

    });

    Route::prefix('grocery')->group(function(){

        
        Route::get('categories',[CategoryController::class,'index']);
        Route::get('slider',[SliderController::class,'index']);
        

    });
   


});

Route::middleware('auth:api')->get('/user', function (Request $request) {
    return $request->user();
});
