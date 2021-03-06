<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\ Http\Controllers\testapi;
use App\ Http\Controllers\DeviceController;
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
Route::get("data",[testapi::class,'getData']);
Route::get("getDevices/{id?}",[DeviceController::class,'list']);
Route::post("addDevice",[DeviceController::class,'addDevice']);
Route::post("addDevice2",[DeviceController::class,'addDevice2']);
Route::put("updateDevice",[DeviceController::class,'updateDevice']);
Route::get("searchDevice/{name}",[DeviceController::class,'searchDevice']);
Route::delete("deleteDevice/{id}",[DeviceController::class,'deleteDevice']);