<?php

namespace Test\Cms\Http\Middleware;

use Closure;

class Admin {
    public function handle($request, Closure $next, $protected= null)
    {
        dd('hee');
        return $next;
    }
}