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

class HomeController extends Controller
{
    public function index()
    {
        return view('users.homePage');
    }
}
