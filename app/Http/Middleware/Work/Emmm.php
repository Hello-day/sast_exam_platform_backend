<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;

class Emmm
{
    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure  $next
     * @return mixed
     */
    public function handle(Request $request, Closure $next)
    {

        if($request->method()=='GET'){
            return response()->json([
                'code'  => 404,
                'msg' => 'Not Found'
            ], 404);
        }
        if($request->method()=='POST'){
            if($request->has('username')&&$request->has('password'))
            {
              return response()->json([
                    'code'  => 200,
                    'msg' => 'OKKKK'
                ], 200);
            }
            else{
                return response()->json([
                    'code'  => 403,
                    'msg' => 'Forbidden'
                ], 403);

            }
        }
        return $next($request);
    }
}
