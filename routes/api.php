<?php

use App\Customers;
use App\Employees;
use App\Prospects;
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

Route::middleware('auth:api')->get('/user', function (Request $request) {
    return $request->user();
});

Route::get('/get/customers', function () {
    return Customers::all();
});

Route::get('/get/employees', function () {
    return Employees::all();
});

Route::get('/get/prospect', function () {
    return Prospects::all();
});

