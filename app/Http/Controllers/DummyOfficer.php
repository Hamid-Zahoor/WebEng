<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class DummyOfficer extends Controller
{
    function getData(){
        return [
            ['details'=>['first_name'=>'hamid','last_name'=>'zahoor',
            'date_of_birth'=>'2021-10-2','email'=>'h@c.com'],
            'contact'=>'042142415', 'job_title'=>'professional','address'=>['city'=>'Syd','country'=>'Australia']],
            
        ];
    }

}
