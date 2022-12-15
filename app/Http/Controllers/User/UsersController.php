<?php

namespace App\Http\Controllers\User;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Http\Requests\Auth\LoginRequest;
use App\Http\Requests\Auth\RegisterRequest;
use App\Http\Requests\Profile\UpdateRequest;
use Illuminate\Support\Facades\Log;
use App\Models\Testimonial;
use App\Models\Book;
use App\Models\Category;
use App\Models\User;
use App\Enums\RoleEnum;
use App\Enums\UserEnum;
use App\Enums\BookEnum;
use App\Enums\TestimonialEnum;
use App\Helpers\UploadHelper;
use Auth;
use Error;


class UsersController extends Controller
{
    public function __construct(){
        $this->route = "/";
        $this->view = "users.landingPage";
        $this->testimonial = new Testimonial();
        $this->book = new Book();
        $this->category = new Category();
        $this->user = new User();

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

        $total_books = $this->book;
        $total_books = $total_books->count();

        $total_user = $this->user;
        $total_user = $total_user->role(RoleEnum::USER);
        $total_user = $total_user->count();

        $total_categories = $this->category;
        $total_categories = $total_categories->count();

        $data = [
            'table' => $table,
            'total_books' => $total_books,
            'total_user' => $total_user,
            'total_categories' => $total_categories,
        ];

        return view($this->view,$data);
    }


}
