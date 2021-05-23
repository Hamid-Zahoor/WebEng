<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Member;

class Memberadd extends Controller
{
 function add Member(Request $req)
  {

  $member=new Member;
   $member->name=$req->name;
   $member->email=$req->email;
   $member->address=$req->address;
   $member->save();
}
}
