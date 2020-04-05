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

 Route::post('login', 'AuthController@login');
 Route::post('signup', 'AuthController@signup');
 
Route::group([
    'middleware' => 'api',
], function () {
    Route::post('logout', 'AuthController@logout');
    Route::post('refresh', 'AuthController@refresh');
    Route::post('me', 'AuthController@me');
    Route::post('sendPasswordResetLink', 'ResetPasswordController@sendEmail');
    Route::post('resetPassword', 'ChangePasswordController@process');
});

	 
 //Crud operation employee
 Route::post('employee','EmployeeController@Index');
 Route::post('addemployee','EmployeeController@create');
 Route::post('deleteEmployee/{id}','EmployeeController@delete');
 Route::post('editEmployee/{id}','EmployeeController@edit');
  Route::post('updateEmployee/{id}','EmployeeController@update');