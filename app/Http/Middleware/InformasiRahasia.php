<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Symfony\Component\HttpFoundation\Response;

class InformasiRahasia
{
    /**
     * Handle an incoming request.
     *
     * @param  \Closure(\Illuminate\Http\Request): (\Symfony\Component\HttpFoundation\Response)  $next
     */
    public function handle(Request $request, Closure $next): Response
    {
        $info =$request->get("info");
        $token =$request->get("token");

        if($token == "1" && $info == "1"){
            return redirect("/info1");
        } 
        if($token == "2" && $info == "2"){
            return redirect("/info2");
        } 
        return $next($request);
    }
}
