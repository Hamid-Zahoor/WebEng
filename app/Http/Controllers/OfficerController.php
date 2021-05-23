<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
Use Illuminate\Support\Facades\DB;
use App\Models\Officer;
use Validator;

class OfficerController extends Controller
{
function addOfficer (Request $req) {
   
   $off= new Officer();
   $off->first_name = $req->first_name;      //data in $req comes from postman during test of api           $emp->name=$req->name;
   $off->id = $req->id;         //data in $req comes from postman during test of api           $resp=$emp->save();
   $off->last_name = $req->last_name; //data in $req comes from postman during test of api
   $off->date_of_birth = $req->date_of_birth;
   $off->email = $req->email;
   $off->contact = $req->contact;
   $off->job_title= $req->job_title;
   $off->city = $req->city;
   $off->country = $req->country;
   
   $resp = $off->save();
   $result=["Result" => "Data was not successfully saved"];
   if($resp){
$result= ["Result" => "Data was successfully saved"];
}
return $result;

}

function addOfficers(Request $req){
   $listData = $req->all(); //data in $req comes from postman during test of api
   //return ["data 1" => $listData[0]['name']];
   $result = ["Result" => "Data was not successfully saved"];
   foreach($listData as $offData){
       $off=new Officer();
       $off->id=$offData['id'];
       $off->first_name=$offData['first_name'];         
       $off->last_name=$offData['last_name'];
       $off->date_of_birth=$offData['date_of_birth'];
       $off->email=$offData['email'];
       $off->contact=$offData['contact'];
       $off->job_title=$offData['job_title'];
       $off->city=$offData['city'];
       $off->country=$offData['country'];
 
       $resp=$off->save();
       if( $resp){
           $result = ["Result" => "Data was not successfully saved"];
           break;
       }
   }
   return $result;
}

///*27. updateEmployee */


function updateOfficer(Request $req){
   $off = Officer::find($req->id);
   $off->first_name =$req->first_name;      //data in $req comes from postman during test of api
   $off->last_name = $req->last_name; //data in $req comes from postman during test of api
   $off->date_of_birth = $req->date_of_birth;
   $off->email = $req->email;
   $off->contact = $req->contact;
   $off->job_title= $req->job_title;
   $off->city = $req->city;
   $off->country = $req->country;
   $resp = $off->save();
   $result = ["Result" => "Data was not successfully updated"];
   if( $resp){
       $result = ["Result" => "Data was  successfully updated"];
   }
   return $result;
}

// 28. DELETE EMPLOYEE IN LARAVEL

function deleteOfficer($id){
   /*
   $result = ["Result" => "Data was  successfully deleted"];
   return $result;
   */
   
$off = Officer::find($id);
 
   $resp = $off->delete();
   $result = ["Result" => "Data was not successfully deleted"];
   if( $resp){
       $result = ["Result" => "Data was  successfully deleted"];
   }
   return $result;
   
}

/*function searchOfficer($first_name){
   return Officer::where("first_name", $first_name)->get();
}*/

//30.	Partial Match Search  API in Laravel
function searchOfficer($first_name){
   return Officer::where("first_name", "like", "%".$first_name."%")->get();
}

//31. Used to provide validation messages when the api is being called
function validatedOffPost(Request $req)

{
        
    $rules = array(
        "id" => "required|min:1|max:4"
    );
    $validator = Validator::make($req->all(), $rules);
    if($validator->fails())
{
        return   response()->json($validator->errors(),401);
}
    else
{

        return  $this->addOfficer($req);
    }
}




}


