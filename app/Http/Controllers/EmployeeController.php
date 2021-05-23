<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
Use Illuminate\Support\Facades\DB;
use App\Models\Employee;
use Validator;


class EmployeeController extends Controller
{

    function showJoinData()
    {
    return DB::table('employees')
    ->join('companies', 'employees.compid', "=", 'companies.id')
    ->select('companies.*')//In case companies data is required then use the specific table name
    //->where('companies.name',"JB")//Using where clause
    ->get();
    }


    function addEmployee(Request $req)
    {
              
           $emp= new Employee();
           $emp->name = $req->name;      //data in $req comes from postman during test of api           $emp->name=$req->name;
           $emp->id = $req->id;         //data in $req comes from postman during test of api           $resp=$emp->save();
           $emp->compid = $req->compid; //data in $req comes from postman during test of api
           $resp = $emp->save();
           $result=["Result" => "Data was not successfully been saved"];
           if($resp){
$result= ["Result" => "Data was successfully saved"];
}
return $result;
}

    
/*26.	POST List of entities API in Laravel
a) Add another method addEmployees in the EmployeeController class
 */



function addEmployees(Request $req){
    $listData = $req->all(); //data in $req comes from postman during test of api
    //return ["data 1" => $listData[0]['name']];
    $result = ["Result" => "Data was not successfully been saved"];
    foreach($listData as $empData){
        $emp=new Employee();
        $emp->id=$empData['id'];
        $emp->name=$empData['name'];         
        $emp->compid=$empData['compid'];
        $resp=$emp->save();
        if( $resp){
            $result = ["Result" => "Data was not successfully saved"];
            break;
        }
    }
    return $result;
}



///*27. updateEmployee */


function uodateEmployee(Request $req){
    $emp = Employee::find($req->id);
    $emp->name =$req->name;      //data in $req comes from postman during test of api
    $emp->compid = $req->compid; //data in $req comes from postman during test of api
    $resp = $emp->save();
    $result = ["Result" => "Data was not successfully updated"];
    if( $resp){
        $result = ["Result" => "Data was  successfully updated"];
    }
    return $result;
}


// 28. DELETE EMPLOYEE IN LARAVEL

function deleteEmployee($id){
    /*
    $result = ["Result" => "Data was  successfully deleted"];
    return $result;
    */
    
 $emp = Employee::find($id);
  
    $resp = $emp->delete();
    $result = ["Result" => "Data was not successfully deleted"];
    if( $resp){
        $result = ["Result" => "Data was  successfully deleted"];
    }
    return $result;
    
}

// 29. Exact Search  API in Laravel
//only COntroller Method is Used other details are similar
//'Where' is used for exact search

// function 29 used to search full name and 30 for partial 
//one can be used with a same names
/*
function searchEmployee($name){
    return Employee::where("name", $name)->get();
}
*/

//30.	Partial Match Search  API in Laravel
function searchEmployee($name){
    return Employee::where("name", "like", "%".$name."%")->get();
}

//31. Used to provide validation messages when the api is being called
function validatedDataPost(Request $req)

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

        return  $this->addEmployee($req);
    }
}
}
