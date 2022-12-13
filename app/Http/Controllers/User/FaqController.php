<?php

namespace App\Http\Controllers\User;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Faq;

class FaqController extends Controller
{
    public function __construct(){
        $this->faq = new Faq();
    }

    public function index()
    {   
        $table = $this->faq;
        $table = $table->orderBy("created_at","DESC");
        $table = $table->get();

        $data = [
            'table' => $table,
        ];
        return view('users.faq.faq',$data);
    }


}
