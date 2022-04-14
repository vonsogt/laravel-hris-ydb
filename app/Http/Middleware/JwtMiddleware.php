<?php

namespace App\Http\Middleware;

use Closure;
use JWTAuth;
use Exception;
use Illuminate\Http\Request;

class JwtMiddleware
{
    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure(\Illuminate\Http\Request): (\Illuminate\Http\Response|\Illuminate\Http\RedirectResponse)  $next
     * @return \Illuminate\Http\Response|\Illuminate\Http\RedirectResponse
     */
    public function handle(Request $request, Closure $next)
    {
        try {
            self::setTokenToHeader($request);
            $user = JWTAuth::parseToken()->authenticate();
        } catch (Exception $e) {

            if (!\Route::is('home'))
                return response()->redirectTo(route('login'));

            // if ($e instanceof \Tymon\JWTAuth\Exceptions\TokenInvalidException) {
            //     return response()->json(['status' => 'Token is Invalid']);
            // } else if ($e instanceof \Tymon\JWTAuth\Exceptions\TokenExpiredException) {
            //     return response()->json(['status' => 'Token is Expired']);
            // } else {
            //     return response()->json(['status' => 'Authorization Token not found']);
            // }
        }

        if ($request->route()->getPrefix() == '/employee') {
            \Auth::shouldUse('api');
        }

        return $next($request);
    }

    public function setTokenToHeader($request)
    {
        // Decleare variable $bearer_token
        $bearer_token = '';

        // Search token from header cookies
        $headerCookies = explode('; ', $request->header('cookie'));
        foreach ($headerCookies as $key => $cookieString) {
            $cookie = explode('=', $cookieString);
            if ($cookie[0] === 'token')
                $bearer_token = $cookie[1];
        }

        if ($bearer_token !== '') {
            $request->headers->set('Authorization', "Bearer " . $bearer_token);
            return true;
        }

        return false;
    }
}
