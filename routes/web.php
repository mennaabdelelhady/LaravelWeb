<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\BookingController;


/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});

//Route::get('/hello', function () {
 //   $value =9;
 //   $name = 'Menna';

  //  $students = ["mohamed","mostafa","soso"];
 //   return view('hello')->with('name',$name)->with('value',$value)->with('students',$students);
//});

//Route::get('/myBookings','App\Http\Controllers\BookingController@myBookings')->name('myBookings');
Route::get('/myBookings/{name}', BookingController::class .'@myBookings')->middleware(IsMohamedUser::class);

Route::get('/sayHello/{name}', [BookingController::class ,'sayHello'])->middleware(IsMohamedUser::class);

Route::get('/login', BookingController::class .'@login');