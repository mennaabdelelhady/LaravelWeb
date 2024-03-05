<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;


/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "api" middleware group. Make something great!
|
*/

Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});

Route::get("/hello", function(){
    return "Hello api";

});

Route::post("/hello",function(Request $request){
    $name =$request->input("name");
    return response()->json(["message"=>"Hello {$name}"]);
   //return response()->json(["message"=>"You have posted hello"]) ;
});

Route::delete("/hello",function(){
    return response()->json(["data"=>"You have deleted hello"]) ;
});