<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;


class BookingController extends Controller
{
    //
    function myBookings(Request $request){
        //return $request->all();
        return "my bookings";
    }

    //function sayHello(Request $request,$name){
    //    return "hello" . $name;
    //}

    function login(){
        return '<h1>Login Page</h1>';
    }

    function sayHello($n){
        //return view('welcomeName')->with('requestedName',$n);
        $isAuthenticated = true;

        if($n=="mohamed"){
            $isAuthenticated=true;
        }else{
            $isAuthenticated=false;
        }
        
        if($isAuthenticated == true){
            return response()->json(["data"=>["name"=>$n]]);
        }
        else{
            //return redirect('/login');
            //return back();
            return response()->json(["error"=>["Not Authenticated"]],401);
        }
        
    }
    



   //private function isLoggedIn($n){
      //$isAuthenticated = true;

       //if($n=="mohamed"){
        //   $isAuthenticated=true;
       //}else{
         //  $isAuthenticated=false;
        //}

   //}

}
