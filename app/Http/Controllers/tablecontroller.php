<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\user;
class tablecontroller extends Controller
{
    //
    function show()
    {
        $data = user::all();
        return view('adminlogin.query-data',['users'=>$data]);
    }
}
