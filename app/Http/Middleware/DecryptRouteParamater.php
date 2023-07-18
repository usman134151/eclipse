<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Illuminate\Contracts\Encryption\DecryptException;
use Illuminate\Support\Str;


class DecryptRouteParamater
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
        $parameters = $request->route()->parameters();
        foreach($parameters as  $param => $val){
            if(Str::contains($param, 'ID')){
                $encryptedId = $request->route($param);
                $request->route()->setParameter($param, (decrypt($encryptedId)));

            }
        }
        // try {
            // $request->route()->setParameter('companyID', (decrypt($encryptedId)));
        // } catch (DecryptException $e) {
        //     //
        // }

        return $next($request);
    }
}
