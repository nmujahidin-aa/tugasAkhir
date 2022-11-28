<?php

use App\Http\Controllers\UsersController;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\RegisterController;
use App\Http\Controllers\LogoutController;
use App\Http\Controllers\PustakaController;
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

Route::get('/', [UsersController::class, 'index'])->name("landing-page.index");

Route::get('/login', [LoginController::class, 'index'])->name("login.index");
Route::post('/login', [LoginController::class, 'login'])->name("login.post");

Route::get('/login', [LoginController::class, 'index'])->name("login.index");
Route::post('/login', [LoginController::class, 'login'])->name("login.post");


Route::get('/logout', [UsersController::class, 'logout'])->name("logout.post");

Route::get('/register', [RegisterController::class, 'index'])->name("register.index");
Route::post('/register', [RegisterController::class, 'register'])->name("register.post");

Route::group(['middleware' => ['auth']], function () {
	Route::get('/home', [UsersController::class, 'home'])->name("homepage.index");
	Route::get('/create', [PustakaController::class, 'index'])->name("create.index");

	Route::group(["as" => "pustaka.", "prefix" => "pustaka"], function () {
		Route::get('/{pustaka}/edit', [PustakaController::class, 'edit'])->name("edit");
		Route::post('/', [PustakaController::class, 'store'])->name("store");
		Route::put('/{pustaka}', [PustakaController::class, 'update'])->name("update");
		Route::delete('/{pustaka}', [PustakaController::class, 'destroy'])->name("destroy");
	});
});

Route::get('/admin/dashboard', function () {
	return view('admin.exdashboard');
})->name("exdashboard");
