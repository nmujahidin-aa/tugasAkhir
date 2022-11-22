<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests\Auth\LoginRequest;
use App\Http\Requests\Auth\RegisterRequest;
use Illuminate\Support\Facades\Log;
use App\Enums\RoleEnum;
use Auth;
use Error;

class LogoutController extends Controller
{
    public function logout(){
        if(Auth::check()){
            Auth::logout();
            alert()->html('Berhasil','Logout berhasil','success');
        }

        return redirect()->route('login.index');
    }
}
