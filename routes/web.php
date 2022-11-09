<?php

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

Route::get('/', function () {
    return view('users.landingPage');
})->name("home");

Route::get('/explore', function () {
    return view('users.explore');
})->name("explore");

Route::get('/upload', function () {
    return view('users.upload');
})->name("upload");

Route::get('/admin', function () {
    return view('admin.homepage');
})->name("adminpage");
