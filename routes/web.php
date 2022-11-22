<?php

use App\Http\Controllers\UsersController;
use Illuminate\Support\Facades\Route;


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

Route::get('/',[UsersController::class,'index'])->name("landing-page.index");
Route::get('/home',[UsersController::class,'home'])->name("homepage.index");

Route::get('/login',[UsersController::class,'login'])->name("login.index");
Route::post('/login',[UsersController::class,'loginPost'])->name("login.post");

Route::get('/logout',[UsersController::class,'logout'])->name("logout.post");

Route::get('/register',[UsersController::class,'register'])->name("register.index");
Route::post('/register',[UsersController::class,'registerPost'])->name("register.post");

Route::group(['middleware' => ['auth']], function () {
	Route::get('/dashboard',function(){
		dd("kamu berhasil login");
	})->name("dashboard.index");


});

