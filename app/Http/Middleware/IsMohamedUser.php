<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Symfony\Component\HttpFoundation\Response;

class IsMohamedUser
{
    /**
     * Handle an incoming request.
     *
     * @param  \Closure(\Illuminate\Http\Request): (\Symfony\Component\HttpFoundation\Response)  $next
     */
    public function handle(Request $request, Closure $next): Response
    {
        $name= $request->route('name');

        //if($name != 'mohamed'){
            //return response()->json(["error"=>["Not Authenticated"]],401);
        //}

        return $next($request);


        //dd("hello from the middleware");
        //return "hello from the middleware";
        //return $next($request);
    }
}
