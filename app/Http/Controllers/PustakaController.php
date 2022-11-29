<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests\Auth\LoginRequest;
use App\Http\Requests\Book\StoreRequest;
use App\Http\Requests\Book\UpdateRequest;
use Illuminate\Support\Facades\Log;
use App\Helpers\UploadHelper;
use App\Helpers\SlugHelper;
use App\Enums\RoleEnum;
use App\Enums\BookEnum;
use App\Models\Book;
use Auth;
use Error;

class PustakaController extends Controller
{
    public function index()
    {
        $table = Book::paginate(10);

        $data = [
            'table' => $table
        ];

        return view('users.create',$data);
    }

    public function edit($id)
    {
        $result = Book::where('id',$id);
        $result = $result->first();

        $data = [
            'result' => $result
        ];

        return view('users.edit',$data);
    }

    public function store(StoreRequest $request)
    {
        try {
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

            $create = Book::create([
                'user_id' => Auth::user()->id,
                'slug' => $slug,
                'title' => $title,
                'description' => $description,
                'published_at' => $published_at,
                'author' => $author,
                'file' => $file,
            ]);

            alert()->html('Berhasil','Data berhasil ditambahkan','success'); 
            return redirect()->back();

        } catch (\Throwable $e) {
            Log::emergency($e->getMessage());

            alert()->html('Gagal',$e->getMessage(),'error');
            return redirect()->back()->withInput();
        }
    }

    public function update(UpdateRequest $request,$id)
    {
        try {
            $title = $request->title;
            $description = $request->description;
            $file = $request->file('file');
            $published_at = $request->published_at;
            $author = $request->author;

            $result = Book::where('id',$id);
            $result = $result->first();

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
                'title' => $title,
                'description' => $description,
                'published_at' => $published_at,
                'author' => $author,
                'file' => $file,
            ]);

            alert()->html('Berhasil','Data berhasil update','success'); 
            return redirect()->back();

        } catch (\Throwable $e) {
            Log::emergency($e->getMessage());

            alert()->html('Gagal',$e->getMessage(),'error');
            return redirect()->back()->withInput();
        }
    }

    public function destroy($id)
    {
        try {
            $result = Book::where('id',$id);
            $result = $result->first();

            $result->delete();

            alert()->html('Berhasil','Data berhasil dihapus','success'); 
            return redirect()->back();

        } catch (\Throwable $e) {
            Log::emergency($e->getMessage());

            alert()->html('Gagal',$e->getMessage(),'error');
            return redirect()->back()->withInput();
        }
    }
}
