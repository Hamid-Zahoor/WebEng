<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\obseletefarmer;

class ObseleteFarmerController extends Controller
{
    //
    function addData(Request $req)
    {
$farmer= new farmer;
$farmer->first_name=$req->first_name;
$farmer->last_name=$req->last_name;
$farmer->email=$req->email;
$farmer->address=$req->address;
$farmer->city=$req->city;
$farmer->username=$req->username;
$farmer->password=$req->password;
$farmer->phone=$req->phone;
$farmer->region_id=$req->region_id;
$farmer->save();
return redirect('farmer');


    }
}
