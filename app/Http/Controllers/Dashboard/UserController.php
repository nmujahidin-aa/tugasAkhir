<?php

namespace App\Http\Controllers\Dashboard;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Log;
use App\Http\Requests\User\StoreRequest;
use App\Http\Requests\User\UpdateRequest;
use App\Models\User;
use App\Enums\RoleEnum;
use App\Enums\UserEnum;
use App\Helpers\UploadHelper;
use Auth;

class UserController extends Controller
{
    public function __construct(){
        $this->route = "dashboard.users.";
        $this->view = "Admin.users.";
        $this->user = new User();
    }
    
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {

        $table = $this->user;
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
            $name = (empty($request->input("name"))) ? null : trim(htmlentities($request->input("name")));
            $email = (empty($request->input("email"))) ? null : trim(htmlentities($request->input("email")));
            $phone = (empty($request->input("phone"))) ? null : trim(htmlentities($request->input("phone")));
            $password = (empty($request->input("password"))) ? null : trim(htmlentities($request->input("password")));
            $roles = $request->input("roles");
            $avatar = $request->file("avatar");

            if($avatar){
                $upload = UploadHelper::upload_file($avatar,'user-avatar',UserEnum::EXT_AVATAR);

                if($upload["IsError"] == TRUE){
                    throw new Error($upload["Message"]);
                }

                $avatar = $upload["Path"];
            }

            $create = $this->user->create([
                'name' => $name,
                'email' => $email,
                'phone' => $phone,
                'password' => bcrypt($password),
                'avatar' => $avatar,
            ]);

            $create->assignRole($roles);

            alert()->html('Berhasil','Data berhasil ditambahkan','success'); 
            return redirect()->route($this->route."index");

        } catch (\Throwable $e) {
            Log::emergency($e->getMessage());

            alert()->error('Gagal',$e->getMessage());
            return redirect()->route($this->route."create")->withInput();
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
        $result = $this->user;
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
        $result = $this->user;
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
    public function update(UpdateRequest $request, $id)
    {
        try {
            $result = $this->user;
            $result = $result->where('id',$id);
            $result = $result->first();

            if(!$result){
                throw new Error("Data tidak ditemukan");
            }

            $name = (empty($request->input("name"))) ? null : trim(htmlentities($request->input("name")));
            $email = (empty($request->input("email"))) ? null : trim(htmlentities($request->input("email")));
            $phone = (empty($request->input("phone"))) ? null : trim(htmlentities($request->input("phone")));
            $password = (empty($request->input("password"))) ? null : trim(htmlentities($request->input("password")));
            $roles = $request->input("roles");
            $avatar = $request->file("avatar");

            if($avatar){
                $upload = UploadHelper::upload_file($avatar,'user-avatar',UserEnum::EXT_AVATAR);

                if($upload["IsError"] == TRUE){
                    throw new Error($upload["Message"]);
                }

                $avatar = $upload["Path"];
            }
            else{
                $avatar = $result->avatar;
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

            $result->syncRoles($roles);

            alert()->html('Berhasil','Data berhasil diubah','success'); 
            return redirect()->route($this->route."index");

        } catch (\Throwable $e) {
            Log::emergency($e->getMessage());

            alert()->error('Gagal',$e->getMessage());
            return redirect()->route($this->route."edit",$id)->withInput();
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
            $result = $this->user;
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