<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Admin\PostController;
use App\Http\Controllers\Admin\RoleController;
use App\Http\Controllers\Admin\UserController;
use App\Http\Controllers\Admin\ClassroomController;
use App\Http\Controllers\Admin\DashboardController;
use App\Http\Controllers\Admin\PermissionController;


/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');



Route::group(['middleware'=>['auth'],'prefix'=>'admin'],function(){

    Route::get('/',[DashboardController::class,'index'])->name('admin.dashboard');

    //Access Control
    Route::resource('/user',UserController::class);
    Route::resource('/permission',PermissionController::class);
    Route::resource('/role',RoleController::class);
    Route::resource('/classroom',ClassroomController::class);




    Route::resource('/posts',PostController::class);
    Route::get('/posts/delete/{post}',[PostController::class,'delete'])->name('post.delete');



});
