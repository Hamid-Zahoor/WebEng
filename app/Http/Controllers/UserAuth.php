<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class UserAuth extends Controller
{
    //
   /* function userLogin(Request $req){
        return $req->input();
    */
    function userLogin(Request $req){
        $data = $req->input();
        $req->session()->put('userKey', $data['user']); //'user' is the naame used in the form for user name input
        echo session('userKey');



    }

}
