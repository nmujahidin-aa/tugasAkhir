<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests\Auth\LoginRequest;
use App\Http\Requests\Auth\RegisterRequest;
use Illuminate\Support\Facades\Log;
use App\Enums\RoleEnum;
use Auth;
use Error;

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

}
