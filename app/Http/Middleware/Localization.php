<?php

namespace App\Http\Middleware;

use Closure;
use App;

class Localization
{
    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request $request
     * @param  \Closure $next
     * @return mixed
     */
    public function handle($request, Closure $next)
    {
        //make localization for website only
        if (session()->has('locale')&&!\Request::is('admin/*')) {
            App::setLocale(session()->get('locale'));
        }
        return $next($request);
    }
}
