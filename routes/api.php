<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UserController;
use App\Http\Controllers\PropertyController;

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

Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});


Route::prefix('v1')->group(function(){

        //FOR USER LOGIN
        Route::post("login",[UserController::class,'login']);

        //FOR USER REGISTER
        Route::post('/users',[UserController::class,'create']);

        //AUTHENTICATED REQUESTS
        Route::group(['middleware' => 'auth:sanctum'], function(){

            //for Users
            Route::get('/users',[UserController::class,'show']);
            Route::delete('/users/{id}',[UserController::class,'destroy']);
            Route::put('/users/{id}',[UserController::class,'update']);


            //for Properties
            Route::post('/properties',[PropertyController::class,'store']);
            Route::get('/properties',[PropertyController::class,'index']);
            Route::delete('/properties/{property}',[PropertyController::class,'destroy']);
            Route::put('/properties/{property}',[PropertyController::class,'edit']);

        });    
    });
    