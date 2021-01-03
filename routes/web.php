<?php

use App\Http\Controllers\HomeController;
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

Route::get('/home2', function () {
    return view('welcome');
})->name('home2');;
Route::redirect('/anasayfa', '/home')->name('anasayfa');;

Route::get('/admin', [App\Http\Controllers\Admin\HomeController::class, 'admin'])->name('admin')->middleware('auth');

Route::get('/admin/login', [HomeController::class, 'login'])->name('adminlogin');

Route::post('/admin/logincheck', [HomeController::class, 'logincheck'])->name('logincheck');

Route::get('/admin/logout', [HomeController::class, 'logout'])->name('admin_logout');

Route::get('/contact', [HomeController::class, 'contact'])->name('contact');

Route::get('/appoint', [HomeController::class, 'appoint'])->name('appoint');

Route::get('/barbers', [HomeController::class, 'barbers'])->name('barbers');

Route::get('/services', [HomeController::class, 'services'])->name('services');

Route::get('/', [HomeController::class, 'home'])->name('home');

Route::get('/about', [HomeController::class, 'about'])->name('about');

Route::get('/test', [HomeController::class, 'test'])->name('test');

Route::get('/id/{id}/{name}', [HomeController::class, 'send'])->whereNumber('id')->whereAlpha('name')->name('send');;
//Route::get('/', function () {
//  return view('home.index',['aname' => 'Emre Aluc']);
Route::middleware('auth')->prefix('admin')->group(function (){

    Route::get('/', [App\Http\Controllers\Admin\HomeController::class, 'admin'])->name('admin');
    Route::get('category',[\App\Http\Controllers\Admin\CategoryController::class,'index'])->name('admin_category');
    Route::get('category/add',[\App\Http\Controllers\Admin\CategoryController::class,'add'])->name('admin_category_add');
    Route::get('category/update',[\App\Http\Controllers\Admin\CategoryController::class,'update'])->name('admin_category_update');
    Route::get('category/delete',[\App\Http\Controllers\Admin\CategoryController::class,'destroy'])->name('admin_category_delete');
    Route::get('category/show',[\App\Http\Controllers\Admin\CategoryController::class,'show'])->name('admin_category_show');
});
Route::get('/home', [HomeController::class, 'index']);
Route::middleware(['auth:sanctum', 'verified'])->get('/dashboard', function () {
    return view('dashboard');
})->name('dashboard');
