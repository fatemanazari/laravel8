<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Users;
use App\Http\Controllers\UsersController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\ModelController;
use App\Http\Controllers\Members;
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
//Route::get("users",[UsersControler::class, 'viewLoad']);
Route::view("gallery",'gallery');
Route::view("contact",'contact');
Route::view("about",'about');
Route::view("buy",'buy');
Route::get("control/{user}",[Users::class,'index']);
Route::post("users",[UsersController::class,'getData']);
Route::view("home",'home');
Route::view("noaccess",'noaccess');
Route::get("controller",[UserController::class,'index']);
Route::get("model",[ModelController::class,'getData']);
Route::get("list",[Members::class,'dbOperations']);
