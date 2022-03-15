<?php


//use App\Models\User;
//use App\Facades\Test;
//use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\Admin\TagController;
use App\Http\Controllers\Admin\ChatController;
use App\Http\Controllers\Admin\FileController;
use App\Http\Controllers\Admin\MenuController;
use App\Http\Controllers\Admin\PostController;
use App\Http\Controllers\Admin\QuizController;
use App\Http\Controllers\Admin\RoleController;
use App\Http\Controllers\Admin\TaskController;
use App\Http\Controllers\Admin\UserController;
use App\Http\Controllers\Admin\RouteController;
use App\Http\Controllers\Admin\VideoController;
use App\Http\Controllers\Admin\PolicyController;
use App\Http\Controllers\Admin\ServerController;
use App\Http\Controllers\Admin\ChapterController;
use App\Http\Controllers\Admin\ContactController;
use App\Http\Controllers\Admin\InquiryController;
use App\Http\Controllers\Admin\ProfileController;
use App\Http\Controllers\Admin\ProjectController;
use App\Http\Controllers\Admin\SandboxController;
use App\Http\Controllers\Admin\SettingController;
use App\Http\Controllers\Admin\TeacherController;
use App\Http\Controllers\Client\ClientController;
use App\Http\Controllers\Admin\CategoryController;
use App\Http\Controllers\Admin\ErrorLogController;
use App\Http\Controllers\Admin\QuestionController;
use App\Http\Controllers\Admin\ClassroomController;
use App\Http\Controllers\Admin\CorporateController;
use App\Http\Controllers\Admin\DashboardController;
use App\Http\Controllers\Admin\IntenshipController;

use App\Http\Controllers\Admin\AutoDeployController;
use App\Http\Controllers\Admin\PermissionController;
use App\Http\Controllers\Admin\ActivityLogController;
use App\Http\Controllers\Admin\ImpersonateController;
use App\Http\Controllers\Admin\MailTemplateController;
use App\Http\Controllers\Admin\SubscriptionController;
use App\Http\Controllers\Client\company\CompanyController;
use App\Http\Controllers\Client\student\StudentController;
use App\Http\Controllers\Client\university\UniversityController;


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

Route::get('/mail', function(){

    $to = 'amitvishwa19@gmail.com';
    $subject = 'Test Mail Subject with job mail';
    $body = 'test body';
    $data = 'test data';
    $view = 'mails.subscription';

    return appmail($to,$subject,$body,$data,$view,true);

});




Route::get('/', [ClientController::class, 'home'])->name('app.home');
Route::get('/news', [ClientController::class, 'blogs'])->name('app.blogs');
Route::get('/news/{slug}', [ClientController::class, 'blog'])->name('app.blog');
Route::get('/dashboard', [ClientController::class, 'dashboard'])->name('app.user.dashboard');


//Student
//Route::prefix('/student')->middleware(['student','auth'])->group(base_path('routes/student.php'));
Route::group(['middleware'=>['auth','student'],'prefix'=>'student'],function(){
    
    Route::get('/', [StudentController::class, 'home'])->name('student.home');
    
});



//company
Route::group(['middleware'=>['auth', 'company'],'prefix'=>'company'],function(){
    
    Route::get('/', [CompanyController::class, 'home'])->name('company.home');
    Route::get('/profile', [CompanyController::class, 'profile'])->name('company.profile');
    Route::post('/profile/update', [CompanyController::class, 'profile_update'])->name('company.profile.update');

    Route::get('/internship', [CompanyController::class, 'internship'])->name('company.internship');

    Route::get('/internship/show/{id}', [CompanyController::class, 'internship_view'])->name('company.internship.view');
    Route::get('/internship/edit/{id}', [CompanyController::class, 'internship_edit'])->name('company.internship.edit');
    Route::put('/internship/{id}/update', [CompanyController::class, 'internship_update'])->name('company.internship.update');

    Route::get('/internship/new', [CompanyController::class, 'internship_new'])->name('company.internship.new');
    Route::post('/internship/new/add', [CompanyController::class, 'internship_new_add'])->name('company.internship.new.add');
    Route::get('/internship/delete/{id}', [CompanyController::class, 'internship_delete'])->name('company.internship.delete');

    Route::get('/internship/applied', [CompanyController::class, 'internship_applied'])->name('company.internship.applied');

    Route::get('/resumes', [CompanyController::class, 'resumes'])->name('company.resumes');
    Route::get('/password_management', [CompanyController::class, 'password_management'])->name('company.password.management');
    Route::post('/password_management/update', [CompanyController::class, 'password_update'])->name('company.password.update');

});


//University
Route::group(['middleware'=>['auth', 'corporate'],'prefix'=>'corporate'],function(){

    Route::get('/', [CompanyController::class, 'home'])->name('company.home');
    Route::get('/profile', [CompanyController::class, 'profile'])->name('company.profile');
    Route::post('/profile/update', [CompanyController::class, 'profile_update'])->name('company.profile.update');

    Route::get('/internship', [CompanyController::class, 'internship'])->name('company.internship');

    Route::get('/internship/show/{id}', [CompanyController::class, 'internship_view'])->name('company.internship.view');
    Route::get('/internship/edit/{id}', [CompanyController::class, 'internship_edit'])->name('company.internship.edit');
    Route::put('/internship/{id}/update', [CompanyController::class, 'internship_update'])->name('company.internship.update');

    Route::get('/internship/new', [CompanyController::class, 'internship_new'])->name('company.internship.new');
    Route::post('/internship/new/add', [CompanyController::class, 'internship_new_add'])->name('company.internship.new.add');
    Route::get('/internship/delete/{id}', [CompanyController::class, 'internship_delete'])->name('company.internship.delete');

    Route::get('/internship/applied', [CompanyController::class, 'internship_applied'])->name('company.internship.applied');

    Route::get('/resumes', [CompanyController::class, 'resumes'])->name('company.resumes');
    Route::get('/password_management', [CompanyController::class, 'password_management'])->name('company.password.management');
    Route::post('/password_management/update', [CompanyController::class, 'password_update'])->name('company.password.update');

});









Auth::routes();

Route::group(['middleware'=>['auth'],'prefix'=>'admin'],function(){

    Route::get('/',[DashboardController::class,'index'])->name('admin.dashboard');
    Route::resource('/profile',ProfileController::class);
    Route::resource('/setting',SettingController::class);


    //App Menu Controller Routes
    Route::resource('/menu',MenuController::class);
    Route::get('/menu/{menu}/builder',[MenuController::class,'builder'])->name('menu.builder');
    Route::post('/menu/{menu}/builder/order',[MenuController::class,'order_item'])->name('menu.builder.order.item');
    Route::get('/menu/{menu}/builder/create',[MenuController::class,'addMenuItem_create'])->name('menu.item.create');
    Route::post('/menu/{menu}/builder/create',[MenuController::class,'addMenuItem'])->name('menu.item.add');
    Route::get('/menu/{menu}/builder/{item}/edit',[MenuController::class,'editMenuItem'])->name('menu.item.edit');
    Route::put('/menu/{menu}/builder/{item}/edit',[MenuController::class,'updateMenuItem'])->name('menu.item.update');
    Route::delete('/menu/{menu}/builder/{item}/delete',[MenuController::class,'deleteMenuItem'])->name('menu.item.delete');


    //Post
    Route::resource('/post',PostController::class);

    //Access Control
    Route::resource('/user',UserController::class);
    Route::resource('/permission',PermissionController::class);
    Route::resource('/role',RoleController::class);

    //Error Logs
    Route::get('/logs',[ErrorLogController::class,'index'])->name('admin.logs');


    //Routes Controller
     Route::resource('/route',RouteController::class);


    //Activity Log
    Route::resource('/activity',ActivityLogController::class);

    //Mail Templates
    Route::resource('/mtemplate',MailTemplateController::class);

    //crm
    //Route::resource('/posts',PostController::class);
    Route::resource('/category',CategoryController::class);
    Route::resource('/tag',TagController::class);
    Route::resource('/subscription',SubscriptionController::class);
    Route::resource('/inquiry',InquiryController::class);
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

   

    //Corporate
    Route::resource('/corporate',CorporateController::class);
    Route::resource('/internship',IntenshipController::class);

});

