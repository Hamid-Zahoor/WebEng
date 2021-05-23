<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
//use Illuminate\Support\Facades\DB;
use App\Models\UserClient;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Http;

class HttpClient extends Controller

{
    //
    function testHttpClient(){
       // return http::get('https://hub.dummyapis.com/employee?noofRecords=3&idStarts=1001');
   
  $myEmpList = http::get('https://hub.dummyapis.com/employee?noofRecords=3&idStarts=1001');
        //return $myEmpList;
        
        $myEmpList = json_decode($myEmpList, true);
        return view('Users',['myList'=>$myEmpList]);


}

}
