<?php

use App\Http\Controllers\UsersController;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\RegisterController;
use App\Http\Controllers\LogoutController;
use App\Http\Controllers\PustakaController;
use Illuminate\Support\Facades\Route;
use App\Enums\RoleEnum;

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

Route::get('/', [UsersController::class, 'index'])->name("landing-page.index");

Route::get('/login', [LoginController::class, 'index'])->name("login.index");
Route::post('/login', [LoginController::class, 'login'])->name("login.post");

Route::get('/login', [LoginController::class, 'index'])->name("login.index");
Route::post('/login', [LoginController::class, 'login'])->name("login.post");


Route::get('/logout', [LogoutController::class, 'logout'])->name("logout.post");

Route::get('/register', [RegisterController::class, 'index'])->name("register.index");
Route::post('/register', [RegisterController::class, 'register'])->name("register.post");

Route::group(['middleware' => ['auth']], function () {
	Route::get('/home',[UsersController::class,'home'])->name("homepage.index");
	Route::get('/contact',[UsersController::class,'contact'])->name("contact.index");

	Route::group(["as" => "user." , "prefix" => "user"],function(){
		Route::get('/profile',[UsersController::class, 'profile'])->name("profile");
		Route::get('/book',[UsersController::class, 'book'])->name("book");
		Route::post('/profile_update',[UsersController::class, 'profile_update'])->name("profile_update");
	Route::get('/home', [UsersController::class, 'home'])->name("homepage.index");
	Route::get('/create', [PustakaController::class, 'index'])->name("create.index");

	Route::group(["as" => "pustaka.", "prefix" => "pustaka"], function () {
		Route::get('/{pustaka}/edit', [PustakaController::class, 'edit'])->name("edit");
		Route::post('/', [PustakaController::class, 'store'])->name("store");
		Route::put('/{pustaka}', [PustakaController::class, 'update'])->name("update");
		Route::delete('/{pustaka}', [PustakaController::class, 'destroy'])->name("destroy");
	});


	Route::group(["as" => "pustaka." , "prefix" => "pustaka"],function(){
		Route::get('/create',[PustakaController::class, 'index'])->name("create");
		Route::get('/{pustaka}/edit',[PustakaController::class, 'edit'])->name("edit");
		Route::post('/',[PustakaController::class, 'store'])->name("store");
		Route::put('/{pustaka}',[PustakaController::class, 'update'])->name("update");
		Route::delete('/{pustaka}',[PustakaController::class, 'destroy'])->name("destroy");
	});

	// Route User End
	// Route Admin Start

	Route::group(["middleware" => ['role:' . implode('|', [RoleEnum::ADMINISTRATOR])]] , function(){
		Route::get('/admin/dashboard', function () {
			return view('admin.exdashboard');
		})->name("exdashboard");
	});

});
