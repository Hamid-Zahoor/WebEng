<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
//use Illuminate\Support\Facades\DB;
use App\Models\User1;

class SpecTable extends Controller
{
    //
    /*function index(){
        return DB::select("select * from companies");
    */
    function getData(){
        return User1::all();

}

}
