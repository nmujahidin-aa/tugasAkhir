<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Http\Requests\Auth\LoginRequest;
use App\Http\Requests\Auth\RegisterRequest;
use Illuminate\Support\Facades\Log;
use App\Enums\RoleEnum;
use App\Models\User;
use Auth;
use Error;

class RegisterController extends Controller
{
    public function index()
    {
        return view('login.register');
    }

    public function register(RegisterRequest $request)
    {
        try {
            $name = $request->name;
            $email = $request->email;
            $phone = $request->phone;
            $password = $request->password;

            $user = User::create([
                'name' => $name,
                'email' => $email,
                'phone' => $phone,
                'password' => bcrypt($password),
            ]);

            $user->assignRole(RoleEnum::USER);

            alert()->html('Berhasil','Register berhasil','success'); 
            return redirect()->route('login.index');

        } catch (\Throwable $e) {
            Log::emergency($e->getMessage());

            alert()->html('Gagal',$e->getMessage(),'error');
            return redirect()->route('register.index')->withInput();
        }
        
    }
}
