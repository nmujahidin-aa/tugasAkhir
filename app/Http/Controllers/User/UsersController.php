<?php

namespace App\Http\Controllers\User;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Http\Requests\Auth\LoginRequest;
use App\Http\Requests\Auth\RegisterRequest;
use App\Http\Requests\Profile\UpdateRequest;
use Illuminate\Support\Facades\Log;
use App\Models\Testimonial;
use App\Enums\RoleEnum;
use App\Enums\UserEnum;
use App\Enums\TestimonialEnum;
use App\Models\Book;
use App\Helpers\UploadHelper;
use Auth;
use Error;

class UsersController extends Controller
{
    public function __construct(){
        $this->route = "/";
        $this->view = "users.landingPage";
        $this->testimonial = new Testimonial();
    }
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
        $table = $this->testimonial;
        $table = $table->orderBy("created_at","DESC");
        $table = $table->get();

        $data = [
            'table' => $table,
        ];

        return view($this->view,$data);
    }


}
