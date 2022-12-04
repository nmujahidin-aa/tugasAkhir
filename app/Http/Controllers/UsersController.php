<?php

namespace App\Http\Controllers;

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

    public function contact()
    {
        return view('users.contact');
    }

    public function book()
    {
        $table = new Book();
        $table = $table->where("user_id", Auth::user()->id);
        $table = $table->paginate(10);

        $data = [
            'table' => $table
        ];

        return view('users.book', $data);
    }

    public function profile()
    {
        $result = Auth::user();

        $data = [
            'result' => $result
        ];

        return view('users.profile', $data);
    }

    public function profile_update(UpdateRequest $request)
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

                $avatar = $upload["Path"];
            } else {
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
            return redirect()->route('user.profile');
        } catch (\Throwable $e) {
            Log::emergency($e->getMessage());

            alert()->error('Gagal', $e->getMessage());
            return redirect()->route('user.profile')->withInput();
        }
    }
}
