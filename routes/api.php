<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

use App\Http\Controllers\UsersController;
/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/

Route::middleware('auth:api')->get('/user', function (Request $request) {
    return $request->user();
});

// Route for Dummy API
use App\Http\Controllers\DummyAPI;
Route::get("dummydata", [DummyAPI::class, 'getData']);
 
//25. Route for addEmployee method
use App\Http\Controllers\EmployeeController;
Route::post("postDataAPI", [EmployeeController::class, 'addEmployee']);
//26.	POST List of entities API in Laravel
Route::post("postListDataAPI", [EmployeeController::class, 'addEmployees']);
//27.UpdateEmployee Route
Route::put("putEmpAPI",[EmployeeController::class, 'uodateEmployee']);
//28. Delete API in Laravel
Route::delete("deleteEmpAPI/{id}",[EmployeeController::class, 'deleteEmployee']);
// 29. Exact Search  API in Laravel
//The route uses get since searching retrieves data
Route::get("searchEmpAPI/{name}",[EmployeeController::class, 'searchEmployee']);
//31. route for the validatedDataPost method in api.php
Route::post("validatedPostAPI", [EmployeeController::class, 'validatedDataPost']);
// sanctum step (I)
Route::post("login",[UsersController::class,'index']);



///////////////////////////////////////////////////////////////////////
//////////////////////API OFFICER//////////////////
//////////////////////////////////////////////////////////

use App\Http\Controllers\DummyOfficer;

Route::get("dummyofficer", [DummyOfficer::class, 'getData']);


use App\Http\Controllers\OfficerController;
Route::post("postOfficerAPI", [OfficerController::class, 'addOfficer']);
Route::post("postListOfficerAPI", [OfficerController::class, 'addOfficers']);
Route::put("putOffAPI",[OfficerController::class, 'updateOfficer']);
Route::delete("deleteOffAPI/{id}",[OfficerController::class, 'deleteOfficer']);
Route::get("searchOffAPI/{first_name}",[OfficerController::class, 'searchOfficer']);
Route::post("validatedOffPostAPI", [OfficerController::class, 'validatedOffPost']);
