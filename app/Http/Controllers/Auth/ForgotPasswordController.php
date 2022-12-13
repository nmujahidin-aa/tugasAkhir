<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Log;
use Illuminate\Support\Facades\Password;
use App\Http\Requests\Auth\ForgotPasswordRequest;
use Auth;
use Error;

class ForgotPasswordController extends Controller
{
    public function __construct(){
        $this->route = "forgot-password.";
        $this->view = "Login.forgot-password";
    }

    public function index()
    {
        if(Auth::check()){
            return redirect('/');
        }

        return view($this->view);
    }

    public function post(ForgotPasswordRequest $request)
    {
        try {

            $email = (empty($request->input("email"))) ? null : trim(htmlentities($request->input("email")));
            
            $status = Password::sendResetLink(
                [
                    'email' => $email,
                ]
            );

            if($status != Password::RESET_LINK_SENT){
                throw new Error('Terjadi kesalahan saat mengirim link reset password');
            }

            alert()->html('Berhasil','Link reset password telah dikirim ke email anda','success'); 
            return redirect()->route('login.index');

        } catch (\Throwable $e) {
            Log::emergency($e->getMessage());

            alert()->html('Gagal',$e->getMessage(),'error');
            return redirect()->back()->withInput();
        }
    }
}