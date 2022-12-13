<?php

namespace App\Http\Controllers\User;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Http\Requests\Auth\LoginRequest;
use App\Http\Requests\Auth\RegisterRequest;
use App\Http\Requests\Profile\UpdateRequest;
use Illuminate\Support\Facades\Log;
use Illuminate\Support\Facades\Mail;
use App\Enums\RoleEnum;
use App\Enums\UserEnum;
use App\Models\Book;
use App\Helpers\UploadHelper;
use App\MAil\SendMail;
use Auth;
use Error;

class ContactController extends Controller
{
    public function index()
    {
        return view('users.contact.contact');
    }

    public function send(Request $request)
    {
        $this->validate($request,[
            'nama'      =>       'required',
            'email'     =>       'required|email',
            'subjek'    =>       'required',
            'massage'   =>       'required'

        ]);

        $email = $request->email;
        $nama = $request->nama;
        $massage = $request->massage;
        $subjek = $request->subjek;

        Mail::to('nurmujahidin111@gmail.com')->send(new SendMail($email, $massage, $nama, $subjek));

        alert()->html('Berhasil','Saran dan Kritik berhasil dikirimkan','success'); 
        return redirect()->back();
    }
}
