<?php

use App\Http\Controllers\Admin\CategoryController;
use App\Http\Controllers\Admin\FaqController;
use App\Http\Controllers\Admin\MessageController;
use App\Http\Controllers\Admin\ProductController;
use App\Http\Controllers\Admin\SettingController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\UserController;
use Illuminate\Support\Facades\Route;

/*
|-------- ------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/


Route::redirect('/home', '/home')->name('home');;

Route::get('/admin/login', [HomeController::class, 'login'])->name('adminlogin');
Route::post('/admin/logincheck', [HomeController::class, 'logincheck'])->name('logincheck');
Route::get('/logout', [HomeController::class, 'logout'])->name('logout');

Route::get('/admin/logout', [HomeController::class, 'admin_logout'])->name('admin_logout');

Route::get('/contact', [HomeController::class, 'contact'])->name('contact');

Route::get('/appointment', [HomeController::class, 'appointment'])->name('appointment');

Route::post('/sendmessage', [HomeController::class, 'sendmessage'])->name('sendmessage');

Route::get('/faq', [HomeController::class, 'faq'])->name('faq');

Route::get('/barbers', [HomeController::class, 'barbers'])->name('barbers');

Route::get('/services', [HomeController::class, 'services'])->name('services');

Route::get('/', [HomeController::class, 'home'])->name('home');

Route::get('/about', [HomeController::class, 'about'])->name('about');

Route::get('/productdetail/{id}', [HomeController::class, 'productdetail'])->name('productdetail');

Route::get('/references', [HomeController::class, 'references'])->name('references');

Route::get('/test', [HomeController::class, 'test'])->name('test');

Route::get('/appxx', [HomeController::class, 'appxx'])->name('appxx');

Route::get('/id/{id}/{name}', [HomeController::class, 'send'])->whereNumber('id')->whereAlpha('name')->name('send');;
//Route::get('/', function () {
//  return view('home.index',['aname' => 'Emre Aluc']);
Route::middleware('auth')->prefix('admin')->group(function () {
    Route::middleware('admin')->group(function () {
        Route::get('/', [App\Http\Controllers\Admin\HomeController::class, 'admin'])->name('admin');
        Route::get('category', [CategoryController::class, 'index'])->name('admin_category');
        Route::get('category/add', [CategoryController::class, 'add'])->name('admin_category_add');
        Route::post('category/create', [CategoryController::class, 'create'])->name('admin_category_create');
        Route::get('category/edit/{id}', [CategoryController::class, 'edit'])->name('admin_category_edit');
        Route::post('category/update/{id}', [CategoryController::class, 'update'])->name('admin_category_update');
        Route::get('category/delete/{id}', [CategoryController::class, 'destroy'])->name('admin_category_delete');
        Route::get('category/show', [CategoryController::class, 'show'])->name('admin_category_show');
        Route::prefix('product')->group(function () {
            Route::get('/', [ProductController::class, 'index'])->name('admin_products');
            Route::get('create', [ProductController::class, 'create'])->name('admin_product_add');
            Route::post('store', [ProductController::class, 'store'])->name('admin_product_store');
            Route::get('edit/{id}', [ProductController::class, 'edit'])->name('admin_product_edit');
            Route::post('update/{id}', [ProductController::class, 'update'])->name('admin_product_update');
            Route::get('delete/{id}', [ProductController::class, 'destroy'])->name('admin_product_delete');
            Route::get('show', [ProductController::class, 'show'])->name('admin_product_show');
        });
        Route::prefix('messages')->group(function () {
            Route::get('/', [MessageController::class, 'index'])->name('admin_message');
            Route::get('edit/{id}', [MessageController::class, 'edit'])->name('admin_message_edit');
            Route::post('update/{id}', [MessageController::class, 'update'])->name('admin_message_update');
            Route::get('delete/{id}', [MessageController::class, 'destroy'])->name('admin_message_delete');
            Route::get('show', [MessageController::class, 'show'])->name('admin_message_show');
        });
        Route::get('setting', [SettingController::class, 'index'])->name('admin_setting');
        Route::post('setting/update', [SettingController::class, 'update'])->name('admin_setting_update');
        Route::prefix('faq')->group(function () {
            Route::get('/', [FaqController::class, 'index'])->name('admin_faq');
            Route::get('create', [FaqController::class, 'create'])->name('admin_faq_add');
            Route::post('store', [FaqController::class, 'store'])->name('admin_faq_store');
            Route::get('edit/{id}', [FaqController::class, 'edit'])->name('admin_faq_edit');
            Route::post('update/{id}', [FaqController::class, 'update'])->name('admin_faq_update');
            Route::get('delete/{id}', [FaqController::class, 'destroy'])->name('admin_faq_delete');
            Route::get('show', [FaqController::class, 'show'])->name('admin_faq_show');
        });
        Route::prefix('user')->group(function () {
            Route::get('/', [App\Http\Controllers\Admin\UserController::class, 'index'])->name('admin_user');
            Route::get('create', [App\Http\Controllers\Admin\UserController::class, 'create'])->name('admin_user_add');
            Route::post('store', [App\Http\Controllers\Admin\UserController::class, 'store'])->name('admin_user_store');
            Route::get('edit/{id}', [App\Http\Controllers\Admin\UserController::class, 'edit'])->name('admin_user_edit');
            Route::post('update/{id}', [App\Http\Controllers\Admin\UserController::class, 'update'])->name('admin_user_update');
            Route::get('delete/{id}', [App\Http\Controllers\Admin\UserController::class, 'destroy'])->name('admin_user_delete');
            Route::get('show/{id}', [App\Http\Controllers\Admin\UserController::class, 'show'])->name('admin_appointment_show');
            Route::get('userrole/{id}', [App\Http\Controllers\Admin\UserController::class, 'user_roles'])->name('admin_user_roles');
            Route::post('userrolestore/{id}', [App\Http\Controllers\Admin\UserController::class, 'user_role_store'])->name('admin_user_role_add');
            Route::get('userloredelete/{userid}/{roleid}', [App\Http\Controllers\Admin\UserController::class, 'user_role_delete'])->name('admin_user_role_delete');
        });
        Route::prefix('appointment')->group(function () {
            Route::get('/', [App\Http\Controllers\Admin\AppointmentController::class, 'index'])->name('admin_appointment');
            Route::post('create', [App\Http\Controllers\Admin\AppointmentController::class, 'create'])->name('admin_appointment_add');
            Route::post('store', [App\Http\Controllers\Admin\AppointmentController::class, 'store'])->name('admin_appointment_store');
            Route::get('edit/{id}', [App\Http\Controllers\Admin\AppointmentController::class, 'edit'])->name('admin_appointment_edit');
            Route::post('update/{id}', [App\Http\Controllers\Admin\AppointmentController::class, 'update'])->name('admin_appointment_update');
            Route::get('delete/{id}', [App\Http\Controllers\Admin\AppointmentController::class, 'destroy'])->name('admin_appointment_delete');
            Route::get('show', [App\Http\Controllers\Admin\AppointmentController::class, 'show'])->name('admin_appointment_show');
        });
    }); #admin
}); #auth
Route::middleware('auth')->prefix('myaccount')->namespace('myaccount')->group(function ()
{
    Route::get('/', [UserController::class, 'index'])->name('myprofile');
    Route::get('message', [UserController::class, 'show'])->name('myprofile_message_show');
    Route::get('appointment', [UserController::class, 'appointshow'])->name('myprofile_appointment_show');
    Route::get('edit/{id}', [App\Http\Controllers\Admin\AppointmentController::class, 'useredit'])->name('user_appointment_edit');
    Route::get('delete/{id}', [MessageController::class, 'destroy'])->name('user_message_delete');
    Route::post('edit/{id}', [App\Http\Controllers\Admin\MessageController::class, 'usermessageupdate'])->name('user_message_update');
});
Route::middleware('auth')->prefix('user')->namespace('user')->group(function ()
{
    Route::post('update/{id}', [App\Http\Controllers\Admin\AppointmentController::class, 'update'])->name('user_appointment_update');
    Route::get('edit/{id}', [App\Http\Controllers\Admin\MessageController::class, 'usermessageedit'])->name('user_message_edit');
    Route::post('create', [App\Http\Controllers\Admin\AppointmentController::class, 'create'])->name('admin_appointment_add');
    Route::get('delete/{id}', [App\Http\Controllers\Admin\AppointmentController::class, 'destroy'])->name('admin_appointment_delete');
    Route::get('/profile', [UserController::class, 'index'])->name('userprofile');
});
Route::get('/home', [HomeController::class, 'index']);
Route::middleware(['auth:sanctum', 'verified'])->get('/dashboard', function () {
    return view('dashboard');
})->name('dashboard');
