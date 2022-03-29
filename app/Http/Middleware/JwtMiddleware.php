<?php

namespace App\Http\Middleware;

use Closure;
use Tymon\JWTAuth\Facades\JWTAuth;
use Exception;
use Tymon\JWTAuth\Http\Middleware\BaseMiddleware;

class JwtMiddleware extends BaseMiddleware
{
    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure  $next
     * @return mixed
     */
    public function handle($request, Closure $next)
    {
        try{
            $user = JWTAuth::parseToken()->authenticate();
        } 
        catch(Exception $e){
            if($e instanceof \Tymon\JWTAuth\Exceptions\TokenInvalidException){
                return Response() -> json([
                    'status' => 0,
                    'message' => 'Token is invalid. Try Again!'
                ]);
            } 
            else if($e instanceof \Tymon\JWTAuth\Exceptions\TokenExpiredException){
                return Response() -> json([
                    'status' => 0,
                    'message' => 'Token is expired'
                ]);
            }
            else{
                return Response() -> json([
                    'status' => 0,
                    'message' => 'Authorizarion Token not found'
                ]);
            }
        }
        return $next($request);
    }
}
