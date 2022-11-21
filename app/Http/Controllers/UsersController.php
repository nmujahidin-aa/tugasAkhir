<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests\Auth\LoginRequest;
use App\Http\Requests\Auth\RegisterRequest;

class UsersController extends Controller
{
    public function index()
    {
        return view('users.landingPage');
    }

    public function home()
    {
        return view('users.homePage');
    }

    public function login()
    {
        return view('users.login');
    }

    public function loginPost(LoginRequest $request){
        dd($request);
    }

    public function register()
    {
        return view('users.register');
    }

    public function registerPost(RegisterRequest $request){
        dd($request);
    }

}
