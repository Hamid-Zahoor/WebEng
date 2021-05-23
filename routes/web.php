<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Users;
use App\Http\Controllers\FormController;
use App\Http\Controllers\UsersController;
use App\Http\Controllers\HttpClient;
use App\Http\Controllers\ApiUserController;
use App\Http\Controllers\UserAuth;
use App\Http\Controllers\UploadController;
use App\Http\Controllers\EmployeeController;
use App\Http\Controllers\AddMember;
/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/
/**welcome refers to welcomebladephp opens laravel page*/
/*Homepath*/
Route::get('/', function () 
{
    return view('welcome');
});


Route::get('/hamid_p/{city}', function ($city) {
   echo $city;
    return view('hamid',['x'=>$city]);
});

/*Above commands run (localhost/hamid_p/d) in URL */

/*The Command below is used to redirect to a specific page*/
Route::get('/', function () {
    return view('welcome');
  //  return redirect("about");
});

/* Create a new route for this controller  
this command will run localhost/users in browser*/

/*Below command is changed to pass parameter to the method*/
/*Route::get("users",[Users::class,'index']);*/  
/*is changed as follows , changes are made in controller method as well*/
/*Run localhost/users/hamid in browser*/
Route::get("users/{mydata}", [Users::class,'index']);

/*Creation of route for localhost/testViewLoadFromController 
for user.php and user_view.blade.php--- open in URL */
/*
Following command is changed to pass data from URL to Controller to views
Route::get('testViewLoadFromController',[Users::class,'loadUserView']);
following command is used instead*/
Route::get('testViewLoadFromController/{mydata}',[Users::class,'loadUserView']);

//creating route for insect.blade.php and bird.blade.php as follows

Route::view("cpath","insect");
Route::view("bpath","bird");
Route::view("math","arithmetic");

Route::get("innerView", [Users::class,'viewLoad']);



Route::post("myform",[FormController::class,'getData']);
Route::view("login", "myform")->middleware('protectedPage');

Route::view("users", "userspath");
Route::view("noaccess", "noaccesspath");
Route::view("home", "homepath");
Route::view("ham", "NOaccess");

//Route for citizen check_GroupMW

Route::group(['middleware'=>['protectedPage']],function(){
    Route::view("users_group_path","userspath");
    Route::view("home_group_path","homepath");
});

//--------TEST ALL ROUTES AFTER SETTING DOCKER AND SQL-----

// Creating route for user model to fetch data from users database.
Route::get('uCntlrPath', [UsersController::class,'index']);
Route::get('uCntlrPath', [UsersController::class,'getData']);
use App\Http\Controllers\SpecTable;
Route::get('uCntlrPath1', [SpecTable::class,'getData']);
Route::get('client', [HttpClient::class,'testHttpClient']);

//create a for testHttpClient
Route::get('uc_httpclient',[UsersController::class,'testHttpClient']);

// API DATA ROUTE

Route::get('api',[ApiUserController::class,'index']);

//SESSION LOGIN PAGE
// Session Login Modified 
Route::view('sessionLogin','login'); 

//SESSION LOGIN PAGE
//Write the route for session log out in web.php

Route::get('/sessionlogout', function () {
    if(session()->has('userKey'))  //'userKey' is set in UserAuth.php
    {
        session()->pull('userKey'); //removing userKey 

    }
    return redirect('sessionLogin');//to take the user back to login page

});

//SESSION LOGIN PAGE
//We need to ensure that the user’s session is removed in 
//logout and then perhaps redirect back to the login page.
//l) Modify the sessionLogin route so that a  logged-on 
//user can never get to the login form

Route::get('/sessionLogin', function () {
    if(session()->has('userKey'))  //'userKey' is set in UserAuth.php
    {
        return redirect('profile');//to take the user back to login page

    }
    return view('login');
    
});

//SESSION LOGIN PAGE
//insert localhost/sessionLogin i browser to fill up form
//fill up fields and it redirects to userPost
Route::post('userPost',[UserAuth::class, 'userLogin']);

//Route for Flash Data Sessions
Route::view('flashSession','addMember');
Route::post('postMember',[AddMember::class,'addMember']);

//Upload Controller Route

Route::view('upload','upload');
Route::post('upload', [UploadController::class,'index']);

//Route for JOINING the Functions of two tables in a databasw
//EMPLOYEE CONTROLLER is used--
Route::get('joinsCntlr',[EmployeeController::class,'showJoinData']);


//FARNER PAGE
use App\Http\Controllers\FarmerController; 
Route::view ('farmer','addfarmer');
Route::post ('farmer', [FarmerController::class,'addData']);

//-----------------------------------------------------------------------
//-----------------------------------------------------------------------
//OPERATION OFFICER WORK FOR Class PROJECT
//===================================================
//===================================================
use App\Http\Controllers\OffAuth;
Route::view('offLogin', 'offlogin');
Route::post('offPost', [OffAuth::class,'userLogin']);

Route::get('/offlogout', function () {
    if(session()->has('userKey'))  //'userKey' is set in UserAuth.php
    {
        session()->pull('userKey'); //removing userKey 

    }
    return redirect('offLogin');//to take the user back to login page

});
Route::get('/offLogin', function () {
    if(session()->has('userKey'))  //'userKey' is set in UserAuth.php
    {
        return redirect('profile');//to take the user back to login page

    }
    return view('login');
});