<?php

use App\Http\Controllers\User\UsersController;

use App\Http\Controllers\User\PustakaController;
use App\Http\Controllers\User\HomeController;
use App\Http\Controllers\User\NewsController;
use App\Http\Controllers\User\ContactController;
use App\Http\Controllers\User\ProfileController;
use App\Http\Controllers\Auth\LoginController;
use App\Http\Controllers\Auth\RegisterController;
use App\Http\Controllers\Auth\LogoutController;
use App\Http\Controllers\User\FaqController;
use App\Http\Controllers\User\AboutController;
use App\Http\Controllers\User\KebijakanController;
use App\Http\Controllers\User\KetentuanController;
use App\Http\Controllers\User\TeamController;
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

Route::get('/register', [RegisterController::class, 'index'])->name("register.index");
Route::post('/register', [RegisterController::class, 'register'])->name("register.post");

Route::get('/logout', [LogoutController::class, 'logout'])->name("logout.post");

Route::group(["namespace" => "App\Http\Controllers\Auth"], function () {
	Route::group(["as" => "forgot-password.","prefix" => "forgot-password"], function () {
		Route::get('/', 'ForgotPasswordController@index')->name('index');
		Route::post('/', 'ForgotPasswordController@post')->name('post');
	});

	Route::group(["as" => "reset-password.","prefix" => "reset-password"], function () {
        Route::get('/', 'ResetPasswordController@index')->name('index');
        Route::post('/', 'ResetPasswordController@post')->name('post');
    });

    Route::group(["as" => "verification.","prefix" => "email"], function () {
        Route::get('verify', 'VerificationController@verificationNotice')->name('notice')->middleware('auth');
        Route::get('verify/{id}/{hash}', 'VerificationController@verifyUser')->name('verify')->middleware(['signed']);
        Route::post('verification-notification', 'VerificationController@verificationResend')->name('send')->middleware(['auth', 'throttle:6,1']);
    });
});

Route::group(['middleware' => ['auth','verified']], function () {
	Route::get('/home', [HomeController::class, 'index'])->name("homepage.index");
	Route::get('/contact', [ContactController::class, 'index'])->name("contact.index");
	Route::get('/faq', [FaqController::class, 'index'])->name("faq.index");
	Route::get('/about', [AboutController::class, 'index'])->name("about.index");
	Route::get('/team', [TeamController::class, 'index'])->name("team.index");
	Route::get('/ketentuan', [KetentuanController::class, 'index'])->name("ketentuan.index");
	Route::get('/kebijakan', [KebijakanController::class, 'index'])->name("kebijakan.index");
	Route::post('/sendmail', [ContactController::class, 'send'])->name("contact.send");


	// PREFIX USER
	Route::group(["as" => "user.", "prefix" => "user"], function () {

		Route::group(["as" => "pustaka.", "prefix" => "pustaka"], function () {	
			Route::get('/', [PustakaController::class, 'index'])->name("index");
			Route::get('/create', [PustakaController::class, 'create'])->name("create");
			Route::get('/{pustaka}/edit', [PustakaController::class, 'edit'])->name("edit");
			Route::post('/', [PustakaController::class, 'store'])->name("store");
			Route::put('/{pustaka}', [PustakaController::class, 'update'])->name("update");
			Route::delete('/{pustaka}', [PustakaController::class, 'destroy'])->name("destroy");
		});

		Route::group(["as" => "profile.", "prefix" => "profile"], function () {	
			Route::get('/', [ProfileController::class, 'index'])->name("index");
			Route::get('/edit', [ProfileController::class, 'edit'])->name("edit");
			Route::put('/', [ProfileController::class, 'update'])->name("update");
		});
	});

	

	// Route User End
	// Route Admin Start

	Route::group(["namespace" => "App\Http\Controllers\Dashboard", "prefix" => "admin", "middleware" => ['role:' . implode('|', [RoleEnum::ADMINISTRATOR])]], function () {
		Route::get('dashboard', 'DashboardController@index')->name("exdashboard");


		Route::group(["as" => "dashboard."], function () {

			Route::group(["as" => "users.", "prefix" => "users"], function () {
				Route::get('/', 'UserController@index')->name("index");
				Route::get('/create', 'UserController@create')->name("create");
				Route::get('/{id}', 'UserController@show')->name("show");
				Route::get('/{id}/edit', 'UserController@edit')->name("edit");
				Route::post('/', 'UserController@store')->name("store");
				Route::put('/{id}', 'UserController@update')->name("update");
				Route::delete('/{id}', 'UserController@destroy')->name("destroy");
			});

			Route::group(["as" => "books.", "prefix" => "books"], function () {
				Route::get('/', 'BookController@index')->name("index");
				Route::get('/create', 'BookController@create')->name("create");
				Route::get('/{id}', 'BookController@show')->name("show");
				Route::get('/{id}/edit', 'BookController@edit')->name("edit");
				Route::post('/', 'BookController@store')->name("store");
				Route::put('/{id}', 'BookController@update')->name("update");
				Route::delete('/{id}', 'BookController@destroy')->name("destroy");
			});

			Route::group(["as" => "faqs.", "prefix" => "faqs"], function () {
				Route::get('/', 'FaqController@index')->name("index");
				Route::get('/create', 'FaqController@create')->name("create");
				Route::get('/{id}', 'FaqController@show')->name("show");
				Route::get('/{id}/edit', 'FaqController@edit')->name("edit");
				Route::post('/', 'FaqController@store')->name("store");
				Route::put('/{id}', 'FaqController@update')->name("update");
				Route::delete('/{id}', 'FaqController@destroy')->name("destroy");
			});

			Route::group(["as" => "testimonials.", "prefix" => "testimonials"], function () {
				Route::get('/', 'TestimonialController@index')->name("index");
				Route::get('/create', 'TestimonialController@create')->name("create");
				Route::get('/{id}', 'TestimonialController@show')->name("show");
				Route::get('/{id}/edit', 'TestimonialController@edit')->name("edit");
				Route::post('/', 'TestimonialController@store')->name("store");
				Route::put('/{id}', 'TestimonialController@update')->name("update");
				Route::delete('/{id}', 'TestimonialController@destroy')->name("destroy");
			});

			Route::group(["as" => "categories.", "prefix" => "categories"], function () {
				Route::get('/', 'CategoriesController@index')->name("index");
				Route::get('/create', 'CategoriesController@create')->name("create");
				Route::get('/{id}', 'CategoriesController@show')->name("show");
				Route::get('/{id}/edit', 'CategoriesController@edit')->name("edit");
				Route::post('/', 'CategoriesController@store')->name("store");
				Route::put('/{id}', 'CategoriesController@update')->name("update");
				Route::delete('/{id}', 'CategoriesController@destroy')->name("destroy");
			});
		});
	});
});
