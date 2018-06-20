<?php

namespace AvvisoSI\TrialMode\Http\Middleware;

use Carbon\Carbon;
use Closure;
use Symfony\Component\HttpKernel\Exception\HttpException;

class CheckForTrialMode
{
    public function handle($request, Closure $next)
    {

    }
}
