<?php

namespace App\Http\Controllers\User;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Http\Requests\Auth\LoginRequest;
use App\Http\Requests\Auth\RegisterRequest;
use App\Http\Requests\Profile\UpdateRequest;
use Illuminate\Support\Facades\Log;
use App\Enums\RoleEnum;
use App\Enums\UserEnum;
use App\Models\Book;
use App\Helpers\UploadHelper;
use Auth;
use Error;

class ProfileController extends Controller
{

    public function index()
    {
        $result = Auth::user();

        $data = [
            'result' => $result
        ];

        return view('users.profile.index',$data);
    }

    public function edit()
    {
        $result = Auth::user();

        $data = [
            'result' => $result
        ];

        return view('users.profile.edit',$data);
    }

    public function update(UpdateRequest $request)
    {
        try {
            $result = Auth::user();

            $name = $request->name;
            $email = $request->email;
            $phone = $request->phone;
            $password = $request->password;
            $avatar = $request->file("avatar");

            if ($avatar) {
                $upload = UploadHelper::upload_file($avatar, 'user-avatar', UserEnum::EXT_AVATAR);

                if ($upload["IsError"] == TRUE) {
                    throw new Error($upload["Message"]);
                }

                if($password){
                    $password = bcrypt($password);
                }
                else{
                    $password = $result->password;
                }

                $result->update([
                    'name' => $name,
                    'email' => $email,
                    'phone' => $phone,
                    'password' => bcrypt($password),
                    'avatar' => $avatar,
                ]);

                alert()->html('Berhasil','Data berhasil diubah','success'); 
                return redirect()->route('user.profile.index');

            }else {
                $avatar = $result->avatar;
            }

            if ($password) {
                $password = bcrypt($password);
            } else {
                $password = $result->password;
            }

            $result->update([
                'name' => $name,
                'email' => $email,
                'phone' => $phone,
                'password' => bcrypt($password),
                'avatar' => $avatar,
            ]);

            alert()->html('Berhasil', 'Data berhasil diubah', 'success');
            return redirect()->route('user.profile.edit');
        } catch (\Throwable $e) {
            Log::emergency($e->getMessage());

            alert()->error('Gagal', $e->getMessage());
            return redirect()->route('user.profile.edit')->withInput();
        }
    }
}
