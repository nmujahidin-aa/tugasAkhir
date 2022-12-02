<?php

namespace App\Http\Controllers\Dashboard;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Log;
use App\Http\Requests\Book\StoreRequest;
use App\Http\Requests\Book\UpdateRequest;
use App\Models\Book;
use App\Models\Category;
use App\Models\User;
use App\Enums\RoleEnum;
use App\Enums\BookEnum;
use App\Helpers\UploadHelper;
use App\Helpers\SlugHelper;
use Auth;

class DashboardController extends Controller
{
    public function __construct(){
        $this->view = "Admin.exdashboard";
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

        $total_books = $this->book;
        $total_books = $total_books->count();

        $categories = $this->category;
        $categories = $categories->get();

        $total_user = $this->user;
        $total_user = $total_user->role(RoleEnum::USER);
        $total_user = $total_user->count();

        $total_categories = $this->category;
        $total_categories = $total_categories->count();

        $data = [
            'total_books' => $total_books,
            'categories' => $categories,
            'total_user' => $total_user,
            'total_categories' => $total_categories,
        ];

        return view($this->view,$data);
    }
}