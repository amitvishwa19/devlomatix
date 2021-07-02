<?php


use App\Models\User;
use App\Facades\Test;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Admin\TagController;
use App\Http\Controllers\Admin\ChatController;
use App\Http\Controllers\Admin\FileController;
use App\Http\Controllers\Admin\PostController;
use App\Http\Controllers\Admin\QuizController;
use App\Http\Controllers\Admin\RoleController;
use App\Http\Controllers\Admin\TaskController;
use App\Http\Controllers\Admin\UserController;
use App\Http\Controllers\Admin\VideoController;
use App\Http\Controllers\Admin\ServerController;
use App\Http\Controllers\Admin\ChapterController;
use App\Http\Controllers\Admin\ContactController;
use App\Http\Controllers\Admin\InquiryController;
use App\Http\Controllers\Admin\ProjectController;
use App\Http\Controllers\Admin\SandboxController;
use App\Http\Controllers\Admin\SettingController;
use App\Http\Controllers\Admin\TeacherController;
use App\Http\Controllers\Client\ClientController;
use App\Http\Controllers\Admin\CategoryController;
use App\Http\Controllers\Admin\ErrorLogController;
use App\Http\Controllers\Admin\QuestionController;
use App\Http\Controllers\Admin\ClassroomController;
use App\Http\Controllers\Admin\DashboardController;
use App\Http\Controllers\Admin\AutoDeployController;
use App\Http\Controllers\Admin\PermissionController;
use App\Http\Controllers\Admin\ActivityLogController;
use App\Http\Controllers\Admin\ImpersonateController;
use App\Http\Controllers\Admin\MailTemplateController;
use App\Http\Controllers\Admin\SubscriptionController;


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

    return view('client.welcome');
});



Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

Route::get('/privacypolicy', [ClientController::class, 'privacy'])->name('privacy');
Route::get('/termscondition', [ClientController::class, 'terms'])->name('terms');

// App Subscription
Route::resource('/subscribe',SubscriptionController::class);

// App Inquiry
Route::get('/inquire', [InquiryController::class, 'index'])->name('inquire');

//Auto deploy of app
Route::post('/deploy',[AutoDeployController::class,'deploy'])->name('app.auto.deploy');

Auth::routes();

Route::group(['middleware'=>['auth'],'prefix'=>'admin'],function(){

    Route::get('/',[DashboardController::class,'index'])->name('admin.dashboard');
    Route::resource('/setting',SettingController::class);


    //Post
    Route::resource('/post',PostController::class);

    //Access Control
    Route::resource('/user',UserController::class);
    Route::resource('/permission',PermissionController::class);
    Route::resource('/role',RoleController::class);

    //Error Logs
    Route::get('/logs',[ErrorLogController::class,'index'])->name('admin.logs');


    //Activity Log
    Route::resource('/activity',ActivityLogController::class);

    //Mail Templates
    Route::resource('/mtemplate',MailTemplateController::class);

    //crm
    //Route::resource('/posts',PostController::class);
    Route::resource('/category',CategoryController::class);
    Route::resource('/tag',TagController::class);
    Route::resource('/subscription',SubscriptionController::class);
    Route::resource('/chat',ChatController::class);
    Route::resource('/file',FileController::class);


    //Sandbox
    Route::get('/mail',[SandboxController::class,'mail'])->name('sandbox.mail');
    Route::get('/mail/simple',[SandboxController::class,'simpleMail'])->name('sandbox.mail.simple');
    Route::get('/mail/dispatch',[SandboxController::class,'dispatchMail'])->name('sandbox.mail.dispatch');
    Route::post('/mail/dispatch/custom',[SandboxController::class,'dispatchMailCustom'])->name('sandbox.mail.dispatch.custom');

    //Sandbox-Aws server
    Route::resource('/server',ServerController::class);

    //Imporsonate
    if ('production' != config('app.env')) {
        Route::get('/impersonate',[ImpersonateController::class,'index'])->name('impersonate.index');
        Route::get('/impersonate/enter/{user_id}',[ ImpersonateController::class, 'impersonate'])->name('impersonate.enter');
        Route::get('/impersonate/leave',[ ImpersonateController::class, 'impersonate_leave'])->name('impersonate.leave');
    }

     //Client
     Route::resource('/contact',ContactController::class);

    //Client
    Route::resource('/client',ClientController::class);

     //Projects
     Route::resource('/project',ProjectController::class);


     //Tasks
     Route::resource('/task',TaskController::class);


});

//Digilearn
Route::group(['middleware'=>['auth'],'prefix'=>'digilearn'],function(){
    Route::get('/', [App\Http\Controllers\Admin\DigilearnDashboard::class, 'index'])->name('digilearn.dashboard');
    Route::resource('/teacher',TeacherController::class);
    Route::resource('/classroom',ClassroomController::class);
    Route::resource('/chapter',ChapterController::class);
    Route::resource('/quiz',QuizController::class);
    Route::resource('/question',QuestionController::class);
    Route::resource('/video',VideoController::class);
});
