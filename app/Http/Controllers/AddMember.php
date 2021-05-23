<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AddMember extends Controller
{
    //
    function addMember(Request $req){
        $data =$req->input('user');
        $req->session()->flash('user',$data);
        return redirect('addMember');
    }

}
