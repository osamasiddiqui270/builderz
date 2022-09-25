<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\user;
class builderzcontroller extends Controller
{
    //
    function addquery(Request $req)
    {
        $member = new user;
        $member->name=$req->name;
        $member->email=$req->email;
        $member->subject=$req->subject;
        $member->message=$req->message;
        $member->save();
        return redirect('contact-us');
    }

}
