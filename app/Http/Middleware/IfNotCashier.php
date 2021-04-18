<?php
namespace App\Http\Middleware;
use Closure;

class IfNotCashier {

    public function handle($request, Closure $next, $guard="cashier")
    {
        if(!auth()->check()) {
            return redirect('/NotCashier');
        }
        return $next($request);


    }
}
