<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\login;

class logincontroller extends Controller
{
    //
    public function loginuser(Request $req)
    {
     $data =  $req->input('email');
     $req->session()->put('email',$data);
     return redirect('adminpanel');
    }
}
