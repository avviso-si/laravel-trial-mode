<?php

namespace AvvisoSI\TrialMode\Http\Middleware;

use Carbon\Carbon;
use Closure;
use Symfony\Component\HttpKernel\Exception\HttpException;

class CheckForTrialMode
{
    public function handle($request, Closure $next)
    {
        $file_path = storage_path() . '/framework/trial';
        if (file_exists($file_path)) {
            $content = trim(file_get_contents($file_path));
            $today = Carbon::today();
            $trialTime = Carbon::parse($content);
            if ($trialTime->lte($today)) {
                throw new HttpException(402);
            }
        }
        return $next($request);
    }
}
