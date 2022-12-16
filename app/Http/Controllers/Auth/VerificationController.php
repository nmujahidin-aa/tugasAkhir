<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use Illuminate\Auth\Access\AuthorizationException;
use Illuminate\Auth\Events\Verified;
use Illuminate\Support\Facades\Log;
use Illuminate\Http\Request;
use App\Models\User;
use Auth;

class VerificationController extends Controller
{
    public function verificationNotice()
    {
        if (Auth::user()->hasVerifiedEmail()) {
            return redirect()->route('login.index');
        }

        return view('Login.verification.notice');
    }

    public function verifyUser(Request $request)
    {
        $user = User::find($request->route('id'));
        if (! hash_equals((string) $request->route('hash'), sha1($user->getEmailForVerification()))) {
            throw new AuthorizationException();
        }

        if ($user->hasVerifiedEmail()) {
            alert()->html('Gagal','Email sudah diverifikasi','danger'); 
            return redirect()->route('login.index');
        } else {
            if ($user->markEmailAsVerified()) {
                event(new Verified($user));
            }

            alert()->html('Berhasil','Email berhasil diverifikasi','success'); 
            return redirect()->route('login.index');
        }
    }
    public function verificationResend(Request $request)
    {
        try {
            $user = $request->user() ?? $request->user('sanctum');
            if ($user) {
                $user->update([
                    'email' => $request->email ?: $user->email,
                ]);
            }
            if (! $user && $request->email) {
                $user = User::where('email', $request->email)->first();
            }
            if (! $user) {
                alert()->html('Gagal','Email tidak ditemukan','danger'); 
                return redirect()->route('login.index');
            }
            if ($user->hasVerifiedEmail()) {
                alert()->html('Gagal','Email sudah diverifikasi','danger'); 
                return redirect()->route('login.index');
            }
            $user->sendEmailVerificationNotification();

            alert()->html('Berhasil','Link verifikasi berhasil dikirim ulang','success'); 
            return redirect()->route('login.index');
        } catch (Exception $e) {
            Log::emergency($e->getMessage());

            alert()->html('Gagal',$e->getMessage(),'danger'); 
            return redirect()->route('login.index');
        }
    }   
}
