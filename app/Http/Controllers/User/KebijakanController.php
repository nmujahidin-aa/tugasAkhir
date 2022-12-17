<?php

namespace App\Http\Controllers\User;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class KebijakanController extends Controller
{
    public function index()
    {   
        return view('Layout.footer.kebijakan');
    }
}
