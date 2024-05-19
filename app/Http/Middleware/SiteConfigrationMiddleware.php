<?php

namespace App\Http\Middleware;

use App\Models\SiteConfiguration;
use Closure;
use Illuminate\Http\Request;
use Illuminate\Support\Arr;
use Illuminate\Support\Facades\Auth;

class SiteConfigrationMiddleware
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

        // config([
        //     'siteconfigrations' => SiteConfiguration::all()->keyBy('code')->toArray()
        // ]);
        config([
            'siteconfigrations' => Arr::collapse([  SiteConfiguration::all()->keyBy('code')->toArray() , config('siteconfigrations')]
        )]);
        \Illuminate\Support\Facades\App::setLocale("ta");
       //dd(config('siteconfigrations'),SiteConfiguration::all()->keyBy('code')->toArray() );
        //dd(Arr::collapse([  SiteConfiguration::all()->keyBy('code')->toArray() , config('siteconfigrations')] ));

        return $next($request);
    }
}
