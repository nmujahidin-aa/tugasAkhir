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

Route::get('/',[UsersController::class,'index']);
Route::get('/login',[UsersController::class,'login']);
Route::post('/login',[UsersController::class,'loginPost']);

Route::get('/register',[UsersController::class,'register']);
Route::post('/register',[UsersController::class,'registerPost']);


