<?php

namespace App\Http\Controllers\Dashboard;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Log;
use App\Http\Requests\Book\StoreRequest;
use App\Http\Requests\Book\UpdateRequest;
use App\Models\Book;
use App\Models\Category;
use App\Enums\RoleEnum;
use App\Enums\BookEnum;
use App\Helpers\UploadHelper;
use App\Helpers\SlugHelper;
use Auth;

class BookController extends Controller
{
    public function __construct(){
        $this->route = "dashboard.books.";
        $this->view = "Admin.books.";
        $this->book = new Book();
        $this->category = new Category();
    }
    
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {

        $table = $this->book;
        $table = $table->orderBy("created_at","DESC");
        $table = $table->get();

        $data = [
            'table' => $table,
        ];

        return view($this->view."index",$data);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $categories = $this->category;
        $categories = $categories->get();

        $data = [
            'categories' => $categories
        ];
        return view($this->view."create",$data);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StoreRequest $request)
    {
        try {
            $category_id = $request->category_id;
            $title = $request->title;
            $description = $request->description;
            $file = $request->file('file');
            $published_at = $request->published_at;
            $author = $request->author;

            $slug = SlugHelper::generate(Book::class,$title,"slug");

            if($file){
                $upload = UploadHelper::upload_file($file,'books',BookEnum::EXT_FILE);

                if($upload["IsError"] == TRUE){
                    return $this->response(false, $upload["Message"] , null, Response::HTTP_INTERNAL_SERVER_ERROR);
                }

                $file = $upload["Path"];
            }

            $create = $this->book->create([
                'user_id' => Auth::user()->id,
                'slug' => $slug,
                'category_id' => $category_id,
                'title' => $title,
                'description' => $description,
                'published_at' => $published_at,
                'author' => $author,
                'file' => $file,
            ]);

            alert()->html('Berhasil','Data berhasil ditambahkan','success'); 
            return redirect()->route($this->route."index");

        } catch (\Throwable $e) {
            Log::emergency($e->getMessage());

            alert()->html('Gagal',$e->getMessage(),'error');
            return redirect()->back()->withInput();
        }
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $result = $this->book;
        $result = $result->where('id',$id);
        $result = $result->first();

        if(!$result){
            alert()->error('Gagal',"Data tidak ditemukan");
            return redirect()->route($this->route."index");
        }

        $data = [
            'result' => $result,
        ];

        return view($this->view."show",$data);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $result = $this->book;
        $result = $result->where('id',$id);
        $result = $result->withTrashed();
        $result = $result->first();

        if(!$result){
            alert()->error('Gagal',"Data tidak ditemukan");
            return redirect()->route($this->route."index");
        }

        $categories = $this->category;
        $categories = $categories->get();

        $data = [
            'result' => $result,
            'categories' => $categories,
        ];

        return view($this->view."edit",$data);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(UpdateRequest $request,$id)
    {
        try {

            $result = $this->book;
            $result = $result->where('id',$id);
            $result = $result->first();

            if(!$result){
                throw new Error("Data tidak ditemukan");
            }

            $category_id = $request->category_id;
            $title = $request->title;
            $description = $request->description;
            $file = $request->file('file');
            $published_at = $request->published_at;
            $author = $request->author;

            if($title != $result->title){
                $slug = SlugHelper::generate(Book::class,$title,"slug");
            }
            else{
                $slug = $result->title;
            }

            if($file){
                $upload = UploadHelper::upload_file($file,'books',BookEnum::EXT_FILE);

                if($upload["IsError"] == TRUE){
                    return $this->response(false, $upload["Message"] , null, Response::HTTP_INTERNAL_SERVER_ERROR);
                }

                $file = $upload["Path"];
            }
            else{
                $file = $result->file;
            }

            $update = $result->update([
                'slug' => $slug,
                'category_id' => $category_id,
                'title' => $title,
                'description' => $description,
                'published_at' => $published_at,
                'author' => $author,
                'file' => $file,
            ]);

            alert()->html('Berhasil','Data berhasil update','success'); 
            return redirect()->route($this->route."index");

        } catch (\Throwable $e) {
            Log::emergency($e->getMessage());

            alert()->html('Gagal',$e->getMessage(),'error');
            return redirect()->back()->withInput();
        }
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        try {
            $result = $this->book;
            $result = $result->where('id',$id);
            $result = $result->first();

            if(!$result){
                alert()->error('Gagal',"Data tidak ditemukan");
                return redirect()->route($this->route."index");
            }

            $result->delete();

            alert()->html('Berhasil','Data berhasil dihapus','success'); 
            return redirect()->route($this->route."index");

        } catch (\Throwable $e) {
            Log::emergency($e->getMessage());

            alert()->error('Gagal',$e->getMessage());
            return redirect()->route($this->route."index");
        }
    }
}