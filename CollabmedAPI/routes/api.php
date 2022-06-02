<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

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

// Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
//     return $request->user();
// });

header('Access-Control-Allow-Origin: *');
header('Access-Control-Allow-Methods: POST, GET, OPTIONS, PUT, DELETE');
header('Access-Control-Allow-Headers: Content-Type, X-Auth-Token, Origin, Authorization');

Route::post('/register','App\Http\Controllers\AuthController@register');
Route::post('/login', 'App\Http\Controllers\AuthController@login');
// Route::get('/departments' )->name('departments')->uses('DepartmentController@index');
Route::get('/departments', 'App\Http\Controllers\DepartmentController@index');
Route::get('/department/{id}', 'App\Http\Controllers\DepartmentController@fetchDepartmentById');

Route::get('/patients', 'App\Http\Controllers\PatientController@index');

Route::get('/departments-except-reception', 'App\Http\Controllers\DepartmentController@fetchDepartmentsExceptReception');
Route::get('/departments-except-reception-nursing', 'App\Http\Controllers\DepartmentController@fetchDepartmentsExceptReceptionAndNursing');

Route::post('/patient-checkin', 'App\Http\Controllers\PatientController@create');
Route::get('/patient/{id}', 'App\Http\Controllers\PatientController@fetchPatientById');
Route::post('/patient/update', 'App\Http\Controllers\PatientController@update');
Route::post('/patient/refer', 'App\Http\Controllers\PatientController@referral');
Route::post('/patient-referral', 'App\Http\Controllers\ReferralController@create');
Route::get('/patient/referrals', 'App\Http\Controllers\ReferralController@index');







Route::get('/users', 'App\Http\Controllers\AuthController@users');


// Route::get('/departments' )->name('departments')->uses('AuthController@getDepartments');



