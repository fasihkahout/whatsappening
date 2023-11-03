<?php

use App\Http\Middleware\AdminAuth;
use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Artisan;
use App\Http\Controllers\UserController;
use App\Http\Controllers\IndexController;
use App\Http\Controllers\MessageController;
use App\Http\Controllers\UserViewController;
use App\Http\Controllers\UserAdminController;
use App\Http\Controllers\AdminLoginController;
use App\Http\Controllers\AdminReplyController;
use App\Http\Controllers\SupportChatController;
use App\Http\Livewire\Admin\Messages\ListConversationAndMessages;

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
// Route::get('/updateapp', function()
// {
//     \Artisan::call('dump-autoload');
//     echo 'dump-autoload complete';
// });

// Route::get('/clear-cache', function() {
//     $exitCode = Artisan::call('cache:clear');
//     // return what you want
// });

// Route::get('/optimize', function() {
//     $exitCode = Artisan::call('optimize:clear');
//     // return what you want
// });


Route::get('/', [AdminLoginController::class, 'adminlogin']);

//Index Controller
Route::get('home', [IndexController::class, 'index'])->name('admin.home');
Route::get('/page-clients' , [IndexController::class , 'pageclients']);
Route::get('/inactiveusers' , [IndexController::class , 'inactiveusers']);
//Route::get('/page-clients' , [IndexController::class , 'blocked']);
Route::get('/report-abuse' , [IndexController::class , 'reportabuse']);
Route::get('/app-chat' , [IndexController::class , 'userchat']);
Route::get('/app-setting' , [IndexController::class , 'appsetting']);
Route::get('/app-setting' , [IndexController::class , 'generalsetting']);
Route::get('/userhelp' , [IndexController::class , 'userhelp']);
Route::post('/customuserhelp' , [IndexController::class , 'customuserhelp']);
Route::get('/page-profile' , [IndexController::class , 'pageprofile']);
Route::get('/app-setting' , [IndexController::class , 'app2setting']);
Route::get('/chat' , [IndexController::class , 'chat']);
Route::post('/sendMessage' , [IndexController::class , 'customchat']);

//Form Controller
Route::get('/userpage' , [UserController::class , 'userpage']);
Route::post('/customuserpage' , [UserController::class , 'customuserpage']);

//Admin form view // UserController
Route::get('/admin-view/{id}', [UserController::class, 'adminview'])->name('adminview');
Route::get('/status-edit/{id}', [UserController::class, 'statusedit'])->name('statusedit');
Route::post('/status-edit/{id}', [UserController::class, 'customstatusedit'])->name('customstatusedit');
Route::get('/user-view-table', [UserController::class, 'userviewtable']);
Route::post('/user-view-table', [UserController::class, 'customuserviewtable']);
Route::get('/delete/{id}' , [UserController::class, 'delete'])->name('delete');

Route::get('/adminchat', [UserController::class, 'adminchat']);
Route::post('/adminchat', [UserController::class, 'adminchat']);

//SupportChat User Message View
Route::get('/supportchat/{id}', [UserAdminController::class, 'supportchat'])->name('supportchat');
Route::post('/customsupportchat', [UserAdminController::class, 'customsupportchat']);
Route::get('/useradminview', [UserAdminController::class, 'useradminview']);

//Admin Login Validation
Route::post('/customadminlogin', [AdminLoginController::class, 'customadminlogin']);

//Logout Route
Route::get('logout' , [AdminLoginController::class , 'logout']);















