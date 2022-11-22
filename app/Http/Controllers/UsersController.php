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

    public function login()
    {
        return view('users.login');
    }

    public function loginPost(LoginRequest $request)
    {
        try {

            $email = $request->email;
            $password = $request->password;

            $rememberme = (empty($request->rememberme)) ? false : true;

            $field = [
                'email' => $email,
                'password' => $password
            ];

            if(Auth::attempt($field,$rememberme)){
                if(!Auth::user()->hasRole([
                    RoleEnum::ADMINISTRATOR,
                    RoleEnum::USER,
                ])){
                    Auth::logout();
                    throw new Error("Anda tidak diperbolehkan mengakses menu ini");
                }
            }
            else{
                throw new Error("Username / password tidak sesuai");
            }

            alert()->html('Berhasil','Login berhasil','success'); 
            return redirect()->intended(route('dashboard.index'));

        } catch (\Throwable $e) {
            Log::emergency($e->getMessage());

            alert()->html('Gagal',$e->getMessage(),'error');
            return redirect()->route('login.index')->withInput();
        }
    }

    public function register()
    {
        return view('users.register');
    }

    public function registerPost(RegisterRequest $request){
        dd($request);
    }

    public function logout(){
        if(Auth::check()){
            Auth::logout();
            alert()->html('Berhasil','Logout berhasil','success');
        }

        return redirect()->route('login.index');
    }

}
