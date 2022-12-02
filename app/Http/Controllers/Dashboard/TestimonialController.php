<?php

namespace App\Http\Controllers\Dashboard;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Log;
use App\Http\Requests\Testimonial\StoreRequest;
use App\Http\Requests\Testimonial\UpdateRequest;
use App\Models\Testimonial;
use App\Enums\RoleEnum;
use App\Enums\TestimonialEnum;
use App\Helpers\UploadHelper;
use App\Helpers\SlugHelper;
use Auth;

class TestimonialController extends Controller
{
    public function __construct(){
        $this->route = "dashboard.testimonials.";
        $this->view = "Admin.testimonials.";
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

        return view($this->view."index",$data);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view($this->view."create");
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
            $name = $request->name;
            $description = $request->description;
            $foto = $request->file('foto');

            if($foto){
                $upload = UploadHelper::upload_file($foto,'testimonials',TestimonialEnum::EXT_FOTO);

                if($upload["IsError"] == TRUE){
                    return $this->response(false, $upload["Message"] , null, Response::HTTP_INTERNAL_SERVER_ERROR);
                }

                $foto = $upload["Path"];
            }

            $create = $this->testimonial->create([
                'name' => $name,
                'description' => $description,
                'foto' => $foto,
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
        $result = $this->testimonial;
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
        $result = $this->testimonial;
        $result = $result->where('id',$id);
        $result = $result->withTrashed();
        $result = $result->first();

        if(!$result){
            alert()->error('Gagal',"Data tidak ditemukan");
            return redirect()->route($this->route."index");
        }

        $data = [
            'result' => $result,
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

            $result = $this->testimonial;
            $result = $result->where('id',$id);
            $result = $result->first();

            if(!$result){
                throw new Error("Data tidak ditemukan");
            }

            $name = $request->name;
            $description = $request->description;
            $foto = $request->file('foto');

            if($foto){
                $upload = UploadHelper::upload_file($foto,'testimonials',TestimonialEnum::EXT_FOTO);

                if($upload["IsError"] == TRUE){
                    return $this->response(false, $upload["Message"] , null, Response::HTTP_INTERNAL_SERVER_ERROR);
                }

                $foto = $upload["Path"];
            }
            else{
                $foto = $result->foto;
            }

            $update = $result->update([
                'name' => $name,
                'description' => $description,
                'foto' => $foto,
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
            $result = $this->testimonial;
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