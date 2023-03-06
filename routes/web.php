<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\AdminController;
use App\Http\Controllers\SuperAdminController;
use App\Http\Controllers\CategoryController;

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

//BackEnd Routes
Route::get('/adminform',[AdminController::class , 'index']);
Route::post('/adminLogin',[AdminController::class, 'show_dashboard']);
Route::get('/dashboard',[SuperAdminController::class, 'dashboard']);
Route::get('/logout',[SuperAdminController::class, 'logout']);

//Category Routes

Route::get('/categories',[CategoryController::class,'index']);

 Route::post('/categories/create',[CategoryController::class,'create']);


//FrontEnd Routes
Route::get('/',[HomeController::class , 'index']);


?>