<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Http;

class ApiUserController extends Controller
{
    //
    function index()
    {

        //return Http::get("https://lucid.app/lucidchart/1301f4bb-7f86-4fe7-92ba-d9e692794bde/edit?beaconFlowId=4C3EE0B81CE6AF62&page=0_0#");
        $collection=Http::get("https://lucid.app/lucidchart/1301f4bb-7f86-4fe7-92ba-d9e692794bde/edit?beaconFlowId=4C3EE0B81CE6AF62&page=0_0#");
         return view ('users',['collection'=>$collection['data']]);        
    }
}
