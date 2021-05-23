<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
//use Illuminate\Support\Facades\DB;
use App\Models\User;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Http;


class UsersController extends Controller

{
    /*function index() {
 //echo "Hello from User Controller";
 return DB::select("select * from users");
 }*/

 function getData(){
    return User::all();
}

function testHttpClient(){
  // return http::get('https://hub.dummyapis.com/employee?noofRecords=3&idStarts=1001');


   $myEmpList = http::get('https://hub.dummyapis.com/employee?noofRecords=3&idStarts=1001');
//return $myEmpList; 
$myEmpList = json_decode($myEmpList, true);
return view('Users',['myList'=>$myEmpList]);
}


      // BELOW IS:   code from creating API TOKENS
 // Step (K) in document

  function index(Request $request){
        $user= User::where('email', $request->email)->first();
        // print_r($data);
            if (!$user || !Hash::check($request->password, $user->password)) {
                return response([
                    'message'=>['These credentials do not match our records.']], 404);
            }
        
             $token = $user->createToken('my-app-token')->plainTextToken;
        
            $response = [
                'user' => $user,
                'token' => $token
            ];
        
             return response($response, 201);
 



        }








 
 }
