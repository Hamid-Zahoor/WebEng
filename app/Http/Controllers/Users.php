<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class Users extends Controller
{
    public function index($mydata)
    {
        echo $mydata. "From Users Controller";
    }
/*call created from views is as follows for user_view.blade.php 
create a route in web.php*/
    

function loadUserView($mydata) {

       // return view("users_view"); 
       // above statement is changed to following
       
       //The following statement is replaced by following to add a parameter
       //to controller by addin ($mydata) in function and the statement
       //return view("users_view", ['country'=>"Aus"]);
       return view("users_view", ['country'=>$mydata]);
    }
    
function viewLoad()
    
    {
        
        $data=['anil','peter','locky','bruce'];
        return view('users',['user'=>$data]);
    }
}
