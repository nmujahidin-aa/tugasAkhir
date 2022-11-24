<?php

use App\Http\Controllers\UsersController;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\RegisterController;
use App\Http\Controllers\LogoutController;
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

Route::get('/logout', [UsersController::class, 'logout'])->name("logout.post");

Route::get('/register', [RegisterController::class, 'index'])->name("register.index");
Route::post('/register', [RegisterController::class, 'register'])->name("register.post");

Route::group(['middleware' => ['auth']], function () {
	Route::get('/homepage', [UsersController::class, 'home'])->name("homepage.index");
});

Route::get('/admin/dashboard', function () {
	return view('admin.dashboard');
})->name("dashboard");
