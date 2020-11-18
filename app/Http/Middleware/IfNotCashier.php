<?php
namespace App\Http\Middleware;
use Closure;

class IfNotCashier {

    public function handle($request, Closure $next, $guard="cashier")
    {
        if(!auth()->check()) {
            dd(auth()->check());
        }
        return $next($request);


    }
}
